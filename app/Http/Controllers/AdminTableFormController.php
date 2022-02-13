<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class AdminTableFormController extends Controller
{
    public function index() {
        return view('adminform', [
            'page_substitle' => 'Admin Form'
        ]);
    }

    public function submit(Request $request) {
        $accountData = $request->except(["_token"]);
        $account = new Account($accountData);
        $account->save();
        return redirect('/admin-table');
    }
      
}
