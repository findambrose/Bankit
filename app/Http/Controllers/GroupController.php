<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;

class GroupController extends Controller
{
    //

    function createGroup(){


    return view('creategroup');
   }

   function joinGroup(){
   //get groups to display in select options
      $groups = Group::get();
   return view('joingroup', ['groups' => $groups]);
  }

  function changeGroup(){
  //get groups to display in select options
     $groups = Group::get();
  return view('changegroup', ['groups' => $groups]);
 }

 function groupDets()
 {
   //Code to get group info
   return view('group_dets');
 }


   function store(){
     $groupInstance = new Group();
     $groupInstance->name =  request('name');
     $groupInstance->desc =  request('desc');
     $groupInstance->save();

     return redirect('/')->with('success', 'Group succesfully created. Reload to clear message');
   }
}
