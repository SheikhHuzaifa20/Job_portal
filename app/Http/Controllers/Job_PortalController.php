<?php

namespace App\Http\Controllers;
use App\Job;
use App\post_job;
use Carbon\Carbon;
use FontLib\Table\Type\post;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class Job_PortalController extends Controller
{

	public function add_product()
    {

		return view( 'crud.addproduct');

	}

	public function view_product()
    {

        $job = DB::table('job')->get();

        return view('crud.view_product' , ['job' => $job]);

	}


    public function store_product(Request $request)
    {
    $validated = $request->validate([
        'job_title' => 'required|string|max:255',
        'feature_job' => 'required|string',
        'categery' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
        'description' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


    $product = new Job();
    $product->job_title = $request->input('job_title');
    $product->feature_job = $request->input('feature_job');
    $product->categery = $request->input('categery');
    $product->salary = $request->input('salary');
    $product->description = $request->input('description');

    // if ($request->hasFile('image')) {
    //     $image = $request->file('image');
    // }

    if ($request->hasFile('image')) {
        $image = $request->file('image');

        $imageName = time() . '.' . $image->getClientOriginalExtension();

        $destinationPath = public_path('uploads/product/');
        if (!File::exists($destinationPath)) {
            File::makeDirectory($destinationPath, 0755, true);
        }


        $image->move($destinationPath, $imageName);


        $product->image = 'uploads/product/' . $imageName;
    }

    $product->save();

        return redirect()->route('view_product')->with('success', 'Data has been saved successfully!');
    }


    public function product_destroy($id)    {
        $product = Job::findOrFail($id);

        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }
        $product->delete();

        return redirect()->route('view_product')->with('success', 'Product deleted successfully!');
    }



    public function edit($id)
{
    $job = DB::table('job')->where('id' , $id)->get();
 
    return view('crud.edit_product', compact('job'));
}


public function searchJobs(Request $request)
{
    $query = $request->input('query');
    $location = $request->input('location');
    

// Check which input is provided and search accordingly
if ($query && $location) {
    // If both job title and location are provided
    $post = DB::table('post_job')
        ->orderBy('id', 'asc')
        ->where('job_title', 'like', '%' . $query . '%')
        ->orWhere('location', 'like', '%' . $location . '%')
        ->get();
} elseif ($query) {
    // If only job title is provided
    $post = DB::table('post_job')
        ->orderBy('id', 'asc')
        ->where('job_title', 'like', '%' . $query . '%')
        ->get();
} elseif ($location) {
    // If only location is provided
    $post = DB::table('post_job')
        ->orderBy('id', 'asc')
        ->where('location', 'like', '%' . $location . '%')
        ->get();
} else {
    // If neither job title nor location is provided, return all jobs
    $post = DB::table('post_job')
        ->orderBy('id', 'desc')
        ->get();
}


    return  view( 'job.job' , compact('post'));

}


public function update(Request $request, $id)
{
    $validated = $request->validate([
        'job_title' => 'required|string|max:255',
        'feature_job' => 'required|string',
        'categery' => 'required|string|max:255',
        'salary' => 'required|numeric|min:0',
        'description' => 'required|string|max:255',
        'logo_image' => 'nullable|mimes:jpeg,jpg,png,gif,webp|max:2048',
    ]);

    $product = Job::findOrFail($id);

    if ($request->hasFile('image')) {
        if ($product->image && File::exists(public_path($product->image))) {
            File::delete(public_path($product->image));
        }

        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/products/'), $imageName);
        $product->image = 'uploads/products/' . $imageName;
    }


    $product->job_title = $request->input('job_title');
    $product->feature_job = $request->input('feature_job');
    $product->categery = $request->input('categery');
    $product->salary = $request->input('salary');
    $product->description = $request->input('description');
    $product->save();

    return redirect()->route('view_product', compact('product'))->with('success');
}

public function post_job(){

    return view('post.post_job');
}

public function jobs(Request $request){
    // return $request;

    $validated = $request->validate([
        'job_title' => 'required',
        'location' => 'required',
        'employment' => 'required',
        'company_name' => 'required',
        'salary' => 'required|numeric|min:0',
        'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
    ]);


    $post_job = new post_job();
    $post_job->job_title = $request->input('job_title');
    $post_job->location = $request->input('location');
    $post_job->employment = $request->input('employment');
    $post_job->company_name = $request->input('company_name');
    $post_job->salary = $request->input('salary');

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


        $post_job->image = 'uploads/post_job/' . $imageName;
    }

    $post_job->save();

        return redirect()->route('home')->with('success', 'Data has been saved successfully!');
    }


}
