<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Feedback;

class AdminController extends Controller
{
    public function adminhome(){
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        $totalFeedback = Feedback::count();
        return view('admin.adminhome', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins, 'totalFeedback' => $totalFeedback]);
    }

    public function feedback(){
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        return view('admin.feedback', ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins,]);
    }

    public function feedbacksubmit(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'message' => 'required|max:255', // adjust max length as needed
        ]);
    
        try {
            // Attempt to save the feedback
            $data = new Feedback;
            $data->message = $validatedData['message'];
            $data->save();
    
            // Check if save was successful
            if ($data) {
                return redirect()->back()->with('success', 'Feedback submitted successfully.');
            } else {
                return redirect()->back()->with('error', 'Failed to submit feedback.');
            }
        } catch (\Exception $e) {
            // Handle any exceptions (e.g., database connection issues)
            return redirect()->back()->with('error', 'An error occurred while submitting feedback.');
        }
    }
}
