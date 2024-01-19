<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function store(Request $request){
        // dd($request);
        $formdata =$request->validate([
            'card_holder'=>'string',
            'card_number'=>'string',
            'expiry_date'=>'string',
            'cvv'=>'string',
        ]);
            Payment::create( 
                $formdata
                // 'card_holder' => $request->input('card-holder'),
                // 'card_number' => $request->input('card-number'),
                // 'expiry_date' => $request->input('expiry-date'),
                // 'cvv' => $request->input('cvv'),
            );

            $Payment=new Payment($formdata);
           if($Payment->save()){
            return redirect('/payment')->withErrors('success','data stored in database successfully');
           }else{
            return redirect('/payment')->with('error', 'Failed to insert payment data. Please try again.');

           } ;
            
}}