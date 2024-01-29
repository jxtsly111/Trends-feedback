<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Feedback;

class AdminController extends Controller
{
    public function deletefeedback($id){
        $data = Feedback::find($id);
        $data ->delete();
        return redirect()->back()->with('success', 'Feedback deleted successfully.');
    }

    public function deleteuser($id){
        $data = User::find($id);
        $data ->delete();
        return redirect()->back()->with('success', 'User deleted successfully.');
    }
    public function adminhome(){
        $data = User::all();
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        $totalVolunteer = User::where('usertype','0')->count();
        $totalFeedback = Feedback::count();
        return view('admin.adminhome', compact('data'), ['username' => $username, 'totalVolunteer' => $totalVolunteer, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins, 'totalFeedback' => $totalFeedback]);
    }

    public function feedback(){
        $username = Auth::user()->name;
        $totalUsers = User::count();
        $totalAdmins = User::where('usertype', '1')->count();
        $data = Feedback::all();
        return view('admin.feedback',compact("data"), ['username' => $username, 'totalUsers' => $totalUsers,'totalAdmins' => $totalAdmins,]);
    }

    public function feedbacksubmit(Request $request)
    {
        // Validation rules
        $validatedData = $request->validate([
            'message' => 'required|max:5000', // adjust max length as needed
        ]);
    
        try {
            // Attempt to save the feedback
            $data = new Feedback;
            $data->message = $request->message; // Use $request->message instead of $validatedData['message']
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
