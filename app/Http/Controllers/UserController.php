<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Group;

class UserController extends Controller
{
    //Assign Group



   function assign(){
     $user = new User();
    $loggedInUserId = auth()->user()->id;
     $userInstance = $user->findOrFail($loggedInUserId);
     $userInstance->group_id =  request('group_id');
     $userInstance->save();
     $group = Group::findOrFail(request('group_id'));
     $groupName = $group->name;




     return redirect('/home')->with('success', 'Success. Group joined.');
   }

   function change(){
     $user = new User();
    $loggedInUserId = auth()->user()->id;
     $userInstance = $user->findOrFail($loggedInUserId);
     $userInstance->group_id =  request('group_id');
     $userInstance->save();
     $group = Group::findOrFail(request('group_id'));
     $groupName = $group->name;




     return redirect('/home')->with('success', 'Success. Group Changed.');
   }
}
