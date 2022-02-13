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

    public function edit($id, Request $request){
        $account = Account::find($id);
    
        return view('adminformedit',['account' => $account]);
    }

    public function update($id, Request $request){
        $account = Account::find($id);
        $account->name = $request->name;
        $account->occupation = $request->occupation;
        $account->date = $request->date;
        $account->type_of_vaccine = $request->type_of_vaccine;
        $account->dose= $request->dose;
        $account->save();
        return redirect('admin-table');
    }

    public function delete($id)
    {
        $account = Account::find($id);
        $account->delete();
        return redirect('admin-table');
    }
}
