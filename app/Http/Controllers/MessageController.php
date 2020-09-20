<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\GroupMember;

class MessageController extends Controller
{

    function sendMessage(){
      $messageElo = new Message();
      $desc = request('desc');
      $groupMember = new GroupMember;

      //Getting group admin. Needs refactoring for reuse
      $loggedInUserId = auth()->user()->id;

      $loggedInUserGroupDets = $groupMember->where('member_id', $loggedInUserId)->first();

      $userGroupId = $loggedInUserGroupDets->group_id;
      $groupMembers = $groupMember->find($userGroupId)
      ->join('users', 'group_members.member_id', '=', 'users.id')
      ->select('users.role', 'users.id')->get();
      //Get Admin user
      foreach($groupMembers as $groupMember) {
        //Set reciever_id to admin
        if ($groupMember->role == 'admin') {
          // code...
          $receiver_id = $groupMember->id;

          //Sending message
          $messageElo->msg_desc = $desc;
          $messageElo->receiver_id = $receiver_id;
          $messageElo->sender_id = auth()->user()->id;
          $messageElo->save();
        }

      }

      if ($messageElo->save()) {
        // code..
        return redirect()->back()->with('alert', 'Message sent succesfully');
      }
      else {
        return redirect()->back()->with('alert', 'Failed to send message');
      }


    }

    function retrieveMessages()
    {
      $messagesElo = new Message();
      $admin_id = auth()->user()->id;
      $messages = $messagesElo->where('receiver_id', $admin_id)
      ->join('users', 'messages.sender_id' , '=' , 'users.id')
      ->select('users.name', 'messages.msg_desc')
      ->get();
      return view('messages', ['messages' => $messages]);
    }
}
