<?php

namespace App\Controllers;

class ProfileController extends Controller
{
 public function index()
 {
  return view("post/index", [
   "message" => "Hello Frome ProfileController index method",
  ]);
 }

 public function edit()
 {
  echo "editing a profile from edit method";
 }
}
