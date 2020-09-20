<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Saving;

class SavingController extends Controller
{
    function addSaving()
    {
      $saving = new Saving();
      $amount = request('amount');
      $loggedInUserId = auth()->user()->id;

      $saving->user_id = $loggedInUserId;
      $saving->amount = $amount;
      $saving->save();

      if ($saving->save()) {
        // code..
        return redirect()->back()->with('alert', 'Saving made');
      }
      else {
        return redirect()->back()->with('alert', 'Failed to make saving');
      }



    }
}
