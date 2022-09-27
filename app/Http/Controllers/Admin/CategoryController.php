<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //remmember to import the Auth if using any Auth user data
use App\HTTP\Requests\Admin\CategoryFormRequest;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all(); //fetching from controller to view 
        return view('admin.category.index' , compact('category'));
    }

    public function create()
    {
        return view('admin.category.create'); //in admin category folder create a 'create' blade file .php for front end view
    }
    public function store(CategoryFormRequest $request) //creates a request for validating the form submitted by the user from add category
    {
        $data = $request->validated();
        $category = new Category; //new model
        $category->name = $data['name']; //gets filled in fields from the Categoryfromrequests
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if($request->hasfile('image')){ //if there is an image then ( do not use $data it wont work applies to boolean as well)
            $file = $request->file('image'); 
            $filename = time() . ' . ' . $file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image = $filename; // saves filename ot db
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];

        $category->navbar_status = $request -> navbar_status == true ? '1':'0';
        $category->status = $request -> status == true ? '1':'0';
        $category->created_by = Auth::user()->id; // created by who storing the authenticated user
        $category->save();

        return redirect('admin/category')->with('message','Category Added Successfully');



    }

    public function edit($category_id)
    {
        $category = Category::find($category_id);
        return view('admin.category.edit',compact('category')); //return the view to the edit page
    }

    public function update(CategoryFormRequest $request , $category_id)
    {
        $data = $request->validated();
        $category = Category::find($category_id); //finds the designated category id
        $category->name = $data['name']; //gets filled in fields from the Categoryfromrequests
        $category->slug = $data['slug'];
        $category->description = $data['description'];

        if($request->hasfile('image')){ //if there is an image then ( do not use $data it wont work applies to boolean as well)

            $destination = 'uploads/category'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image'); 
            $filename = time() . ' . ' . $file->getClientOriginalExtension();
            $file->move('uploads/category/',$filename);
            $category->image = $filename; // saves filename ot db
        }
        $category->meta_title = $data['meta_title'];
        $category->meta_description = $data['meta_description'];
        $category->meta_keyword = $data['meta_keyword'];

        $category->navbar_status = $request -> navbar_status == true ? '1':'0';
        $category->status = $request -> status == true ? '1':'0';
        $category->created_by = Auth::user()->id; // created by who storing the authenticated user
        $category->update(); //updates the data

        return redirect('admin/category')->with('message','Category updated Successfully');
    }
    public function delete(Request $request)
    {
        $category = Category::find($request->category_delete_id);
        if($category)
        {
            $destination = 'uploads/category'.$category->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $category->delete();
            return redirect('admin/category')->with('message','Category deleted Successfully');
        }
        else
        {
            return redirect('admin/category')->with('message','No Category Id found');

        }
    }
}
