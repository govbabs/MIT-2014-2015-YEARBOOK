<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Cloudder;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
  	{
  		//$this->middleware('admin');

  	}

    public function index(){

      $user = Auth::user();
      return view('admin.index');
    }

    public function getAllStudents(){
      $students = User::all();


      return view('admin.students',compact('students'));
    }

    public function massUpload(){


      return view('admin.massUpload');
    }

    public function performUploadOperation(Request $request){
      $this->validate($request, [
          'fileToUpload' => 'required'
      ]);
      $file = $request->file('fileToUpload')->getRealPath();
      Cloudder::upload($file, null);


      return    Cloudder::show(Cloudder::getPublicId(), null);
    }


    public function excelToArray($filePath){
      Excel::load($filePath, function($reader) {

          // Getting all results
          return $results = $reader->get();



      });
    }

    public function getStudentsByID($matNo){

    }

    public function updateStudentProfile(){

    }
}
