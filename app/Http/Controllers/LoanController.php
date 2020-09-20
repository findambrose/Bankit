<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loan;
use App\GroupMember;

class LoanController extends Controller
{
    function requestLoan(){
      $loans = new Loan();
      $groupMember = new GroupMember();
      $desc = request('desc');
      $period = request('period');
      $loan_amount = request('amount');
      $interest_amount = 10/100 * $loan_amount * $period;
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
          $grp_admin_id = $groupMember->id;

          //Sending message
          $loans->admin_id = $grp_admin_id;
          $loans->description = $desc;
          $loans->period = $period;
          $loans->loan_amount = $loan_amount;
          $loans->loan_status = $pending;
          $loans->interest_amount = $interest_amount;
          $loans->user_id = $loggedInUserId;
          $loans->save();
        }

      }

      if ($loans->save()) {
        // code..
        return redirect()->back()->with('alert', 'Loan Application sent. The admin will get back to you shortly');
      }
      else {
        return redirect()->back()->with('alert', 'There was a problem with your loan application');
      }

    }

    function payLoan(){
      $loans = new Loan();
      $amount = request('amount');
      $loggedInUserId = auth()->user()->id;
      $active_loan = $loans->findOrFail($loggedInUserId)->first();
      $active_loan_id = $active_loan->id;

      $loans->loan_status = 'paid';
      $loans->payment_amount = $amount;
      $loans->save();



      //Getting group admin. Needs refactoring for reuse



      if ($loans->save()) {
        // code..
        return redirect()->back()->with('alert', 'Loan payment successful');
      }
      else {
        return redirect()->back()->with('alert', 'Failed to repay loan');
      }

    }

    function getRequestedLoans()
    {

      $loans = new Loan();
      $admin_id = auth()->user()->id;
      $loanRequest = $loans->where('admin_id', $admin_id) ->where('loan_status', 'pending')
      ->join('users', 'loans.user_id' , '=' , 'users.id')
      ->select('users.name', 'loans.description', 'loans.loan_amount')
      ->get();
      return view('loan_requests', ['loanRequests' => $loanRequest]);
    }
}
