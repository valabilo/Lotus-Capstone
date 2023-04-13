<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Products;

class AdminController extends Controller
{
    public function view_category() 
    {
        $data=category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request) 
    {
        $data=new category;
        $data->category_name=$request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }
    
    public function delete_category($id)
    {
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function view_products()
    {
        $category=category::all();
        return view('admin.products',compact('category'));
    }
    public function add_product(Request $request)
    {
        $product=new products;
        $product->name=$request->name;
        $product->code=$request->code;
        //add image
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('products',$imagename);
        $product->image=$imagename;
        //end of adding image
        $product->category=$request->category;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->dis_price;
        $product->save();

        return redirect()->back()->with('message','Product Added Successfully');
    }
    public function show_products()
    {
        $product=products::all();
        return view('admin.show_products',compact('product'));
    }
}
