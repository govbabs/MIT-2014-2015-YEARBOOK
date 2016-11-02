<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
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


      return view('admin.massUpload',compact('students'));
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
