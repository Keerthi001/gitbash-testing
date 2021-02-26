<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App;
use App\Http\Requests;
use App\Example;
use App\GeneralSettings as Settings;
use Image;
use ImageSettings;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Support\Facades\Hash;
use Excel;
use Input;
use File;
use App\OneSignalApp;
use Exception;

class ExampleController extends Controller
{
  public function index(){
    return view('example');
  }
  public function create(Request $request)
  {
      $user = new Example;
      $user->name    = $request->name;
      $user->age        = $request->age;
      $user->save();
      return view('example');
  }
}
