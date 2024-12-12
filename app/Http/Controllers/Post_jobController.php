<?php

namespace App\Http\Controllers;

use App\approval;
use App\approved;
use App\Review;
use Carbon\Carbon;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\JobApplication;
use App\post_job;

class Post_jobController extends Controller
{

    public function Credentials(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|min:0',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $_approval = new approval();
        $_approval->name = $request->input('name');
        $_approval->email = $request->input('email');
        $_approval->address = $request->input('address');
        $_approval->phone = $request->input('phone');

        // if ($request->hasFile('image')) {
        //     $image = $request->file('image');
        // }

        // dd($validated);


        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('uploads/post_job/');
            if (!File::exists($destinationPath)) {
                File::makeDirectory($destinationPath, 0755, true);
            }


            $image->move($destinationPath, $imageName);


            $_approval->image = 'uploads/post_job/' . $imageName;
        }

        $_approval->save();

        return redirect()->route('home')->with('success', 'Data has been saved successfully!');
    }


    public function product_destroy($id)
    {
        $_approval = approval::findOrFail($id);

        if ($_approval->image && File::exists(public_path($_approval->image))) {
            File::delete(public_path($_approval->image));
        }
        $_approval->delete();

        return redirect()->route('approval')->with('success', 'User Request Rejected!');
    }


    public function approved(Request $request, $id)
    {

        // return $request;
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric|min:0',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $approved = approved::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($approved->image && File::exists(public_path($approved->image))) {
                File::delete(public_path($approved->image));
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/approval/'), $imageName);
            $approved->image = 'uploads/approval/' . $imageName;
        }


        $approved->name = $request->input('name');
        $approved->email = $request->input('email');
        $approved->address = $request->input('address');
        $approved->phone = $request->input('phone');
        $approved->save();

        return redirect()->route('home', compact('approved'))->with('success');

        // Retrieve the job by ID
        // $approved = approved::findOrFail($id);

        // // Validate the input data
        // $validated = $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'address' => 'required',
        //     'phone' => 'required|numeric|min:0',
        //     'image' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048', // Image is optional
        // ]);

        // // Handle image upload if exists
        // if ($request->hasFile('image')) {
        //     // Delete the old image if exists
        //     if ($approved->image && File::exists(public_path($approved->image))) {
        //         File::delete(public_path($approved->image));
        //     }

        //     // Upload new image
        //     $image = $request->file('image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('uploads/approval/'), $imageName);
        //     $approved->image = 'uploads/approval/' . $imageName;
        // }

        // // Update the job with validated data
        // $approved->name = $request->input('name');
        // $approved->email = $request->input('email');
        // $approved->address = $request->input('address');
        // $approved->phone = $request->input('phone');

        // // Save the changes to the database
        // $approved->save();

        // // Redirect with success message
        // return redirect()->route('home', $approved->id)->with('success', 'Job approved successfully!');


    }

    public function approval()
    {
        $job = DB::table('_approval')->get();

        return view('approval', ['job' => $job]);
    }


    public function applyJob(Request $request, $id)
    {
        // return 123;
        if (!Auth::check()) {
            return redirect()->route('home')->with('success You need to be logged in to apply.');
        }
    
        $post_job = post_job::findOrFail($id);
        $userId = Auth::id();
        
        JobApplication::create([
            'post_job_id' => $post_job->id,
            'user_id' => $userId,
        ]);
    
        return redirect()->route('home')->with('success Job applied successfully!.');
    }



    
    // public function applyJob(Request $request , $id)
    // {
    //     dd($request->all(), $id);
    //     // return $request;
    //     // Validate the request
    //     $validated = $request->validate([
    //         'job_id' => 'required|exists:post_jobs,id', // Ensure the job ID exists
    //     ]);

    //     // Get the authenticated user ID
    //     $userId = Auth::id();

    //     // Store the job ID and user ID in the database
    //     $jobApplication = new JobApplication();
    //     $jobApplication->job_id = $validated['job_id'];
    //     $jobApplication->user_id = $userId;
    //     $jobApplication->save();

    //     // Return a success response
    //     return response()->json(['success' => true, 'message' => 'Job applied successfully!']);
    // }
}
