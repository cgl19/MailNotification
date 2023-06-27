<?php

namespace App\Http\Controllers;
use App\Mail\LeadCreated;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Detail;
 

class LeadController extends Controller
{
    public  function saveLead(Request $request){
     
        $validatedData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            // Add validation rules for other fields
        ]);
    
        $detail = Detail::create($request->all());
        
         
        if ($detail) {
            // Redirect back with success message
            $leadinfo=$request->all();
            Mail::to('d87430276@gmail.com')->send(new LeadCreated($leadinfo));
            return redirect()->back()->with('success', 'Response submitted successfully!');
        } else {
            // Redirect back with error message
            return redirect()->back()->with('error', 'Failed to submit response. Please try again.');
        }
    }
}
