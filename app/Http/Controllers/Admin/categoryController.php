<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\SoftDeletes;



class categoryController extends Controller
{
    public function index()
    {
        $category=Category::all();
        return view('admin.category.index',compact('category'));
    }
    public function add()
    {
        return view('admin.category.add');
    }
    public function insert(Request $request)
    {
        $category= new Category();
       if($request->hasFile('image'))
       {
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assests/uploads/category',$filename);
        $category->image=$filename;
       }
       $category->name=$request->input('name');
       $category->gender=$request->input('gender');   
       $category->email=$request->input('email');
       $category->phone_number=$request->input('phone_number');
       $category->date=$request->input('date');
       $category->UserName=$request->input('UserName');
       $category->Password=$request->input('Password');
       $category->Address=$request->input('Address');
       $category->save();
        return redirect('/dashboard')->with('status','Category Added Successfully');
    }
      public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
    }
    public function update(Request $request,$id)
    {
        $category = Category::findOrFail($id);
        if($request->hasfile('image'))
        {
            $path='assests/uploads/category/'.$category->image;
            if(File::exists($path))
        {
                File::delete($path);
        }
        $file=$request->file('image');
        $ext=$file->getClientOriginalExtension();
        $filename=time().'.'.$ext;
        $file->move('assests/uploads/category',$filename);
        $category->image=$filename;
        }
        $category->name=$request->input('name');
       $category->gender=$request->input('gender');   
       $category->email=$request->input('email');
       $category->phone_number=$request->input('phone_number');
       $category->date=$request->input('date');
       $category->UserName=$request->input('UserName');
       $category->Password=$request->input('Password');
       $category->Address=$request->input('Address');
       $category->update();
       return redirect('dashboard')->with('status','User Updated Successfully');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if($category->image)
        {
            $path='assests/uploads/category'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
         $category->delete();
        return redirect('categories')->with('status','User Deleted Successfully');
    }
}
  
