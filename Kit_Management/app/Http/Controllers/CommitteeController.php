<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommitteeController extends Controller
{
    public function dashboard(){
  return view('committee.dashboard');
}
}
