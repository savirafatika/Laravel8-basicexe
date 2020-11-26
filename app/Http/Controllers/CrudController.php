<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudController extends Controller
{
   public function index()
   {
      return "this is from controller with index method";
   }
   public function edit()
   {
      return "this is edit method";
   }
}
