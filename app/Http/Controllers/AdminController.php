<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Timeline;
use Cloudder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{

    public function __construct()
    {
        //$this->middleware('admin');

    }

    public function index()
    {

        $user = Auth::user();
        return view('admin.index');
    }

    public function getAllStudents()
    {
        $students = User::all();


        return view('admin.students', compact('students'));
    }

    public function massUpload()
    {


        return view('admin.massUpload');
    }

    public function activateAccount($id)
    {
        $user= User::where('user_id', $id)->first();
        $user->active = true;

        return redirect()->route('/')->with("suc_msg", " User activated");
    }

    public function performUploadOperation(Request $request)
    {
        $this->validate($request, [
            'fileToUpload' => 'required|mimes:csv,xlsx'
        ]);

        if ($request->hasFile('fileToUpload')) {
            $destinationPath = 'uploads'; // upload path
            $extension = $request->file('fileToUpload')->getClientOriginalExtension(); // getting image extension
            $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
            $path = $request->file('fileToUpload')->move($destinationPath, $fileName); // uploading file to given path
            $this->excelToArray($path);
            // sending back with message
            //  Session::flash('success', 'Upload successfully');
            //  return Redirect::to('upload');
            //  return redirect()->route('/')->with("suc_msg", "A ticket with ID: #$ticket->ticket_id has been opened.");
        }


    }


    public function excelToArray($filePath)
    {
        \Excel::load($filePath, function ($reader) {
// { ["surname"]=> string(7) "matthew" ["first_name"]=> string(4) "igho" ["other_name"]=> float(343) ["matric_number"]=> float(33) ["nature_of_workindustry"]=> string(3) "kjk" ["name_of_company"]=> NULL ["position_held_in_the_company"]=> NULL ["email_address"]=> NULL ["mobile_number"]=> NULL ["first_degree"]=> NULL } } } }

            // Getting all results
            $results = $reader->get();

            // Loop through all sheets
            $reader->each(function ($sheet) {
                $user = new User;
                $user->first_name = $sheet->surname;
                $user->last_name = $sheet->last_name;
                $user->email = $sheet->email_address;
                $user->matricNo = $sheet->matric_number;
                $user->other_name = $sheet->other_name;
                $user->sex = $sheet->sex;
                $user->save();


            });
            return redirect()->route('/')->with("suc_msg", count($results) . " Records successfully added!");

        });
    }

    public function getStudentsByID($matNo)
    {

    }

    public function updateStudentProfile()
    {

    }

    public function addPost()
    {
        return view('admin.newPost');
    }

    public function updateTimeline(Request $request)
    {
        $this->validate($request, [
            'header' => 'required',
            'description' => 'required',

        ]);

        $timeline = new Timeline([
            'header' => $request->input('header'),
            'description' => $request->input('description'),
            'thumbnail' => $request->input('thumbnail'),
            'post_by' => Auth::user()->user_id
        ]);

        if($request->hasFile('thumbnail')){
            $this->validate($request, [
                'thumbnail' => 'mimes:jpg,jpeg,bmp,png|between:1,7000',
            ]);

            $file = $request->file('thumbnail')->getRealPath();
//            Cloudder::upload($file, null);
//            list($width, $height) = getimagesize($file);
//            $timeline->thumbnail =
//                Cloudder::show(Cloudder::getPublicId(), ["width" => 1024, "height" => 921]);

            $destinationPath = 'images/posts'; // upload path
            $extension = $request->file('thumbnail')->getClientOriginalExtension(); // getting image extension
            $fileName = Auth::user()->user_id.rand(11111, 99999) . '.' . $extension; // renameing image
            $path = $request->file('thumbnail')->move($destinationPath, $fileName);
            $timeline->thumbnail =$path;
        }


        $timeline->save();
        return redirect()->route('home');
    }
}
