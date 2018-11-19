<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Auth;

class DonatorController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('Donator');
    }

    public function accountCredit(Request $request){
        if($request->isMethod('post')){
            $errors = array();
            $data = $request->all();
            $trans = new Transaction();
            if(!$trans->validate($data)){
                $trans_e = $trans->errors();
                foreach ($trans_e->messages() as $k => $v){
                    foreach ($v as $e){
                        $errors[] = $e;
                    }
                }
            }
            if(empty($errors)){
                $trans->user_id = $request->user_id;
                $trans->user_role = $request->user_role;
                $trans->medium = $request->medium;
                $trans->type = $request->type;
                $trans->amount = $request->amount;
                $trans->mobile_no = $request->mobile_no;
                $trans->reference = $request->reference;
                $trans->status = $request->status;
                if($trans->save()){
                    $trans->transaction_id = 'Trans'.sprintf('%05d', $trans->id);
                    $trans->save();
                    return redirect()
                        ->to('/donator/account-credit')
                        ->with('success','You have successfully Donated '.$request->amount);
                }else{
                    return redirect()
                        ->to('/donator/account-credit')
                        ->with('error','You Request Can not be processed At This Time ');
                }
            }else{
                return redirect()
                    ->to('/donator/account-credit')
                    ->with('errors', $errors)
                    ->withInput();
            }
        }
        return view('pages.donator.dashboard');
    }
}
