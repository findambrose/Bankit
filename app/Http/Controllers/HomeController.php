<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GroupMember;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      //Get GroupMembers from . We need to pass in a group Id for that.
      //Select from GroupMembers where group_id is supplied then join members table to get names
      //Get GroupMember Instance
      //get logged in users group_id
      $groupMember = new GroupMember;
      $loggedInUserId = auth()->user()->id;

      $loggedInUserGroupDets = $groupMember->where('member_id', $loggedInUserId)->first();

      $userGroupId = $loggedInUserGroupDets->group_id;
      $groupMembers = $groupMember->findOrFail($userGroupId)
      ->join('users', 'group_members.member_id', '=', 'users.id')
      ->select('users.name')->get();

        return view('home', ['groupMembers' => $groupMembers]);
    }

    public function admin()
    {
        return view('admindash');
    }
}
