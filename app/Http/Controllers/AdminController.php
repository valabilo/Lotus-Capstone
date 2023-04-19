<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Products;

use App\Models\Carousel;

use App\Models\Stores;

use App\Models\Contact;

class AdminController extends Controller
{
    //category
    public function view_category($id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $data = category::all();
            return view('admin.category', compact('data'));
        } else {
            return redirect('login');
        }

    }
    //add category
    public function add_category(Request $request)
    {
        $data = new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    //delete category
    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }
    public function view_products()
    {
        $category = category::all();
        return view('admin.products', compact('category'));
    }
    //add products
    public function add_product(Request $request)
    {
        $product = new products;
        $product->name = $request->name;
        $product->code = $request->code;
        $product->status = $request->status;
        //add image
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('products', $imagename);
        $product->image = $imagename;
        //end of adding image
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->dis_price;
        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    //show products
    public function show_products()
    {
        $product = products::all();
        return view('admin.show_products', compact('product'));
    }
    public function delete_product($id)
    {
        $product = products::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }
    public function update_product($id)
    {
        $product = products::find($id);
        $category = category::all();

        return view('admin.update_product', compact('product', 'category'));
    }
    //updating products
    public function update_product_confirm(Request $request, $id)
    {
        $product = products::find($id);
        $product->name = $request->name;
        $product->code = $request->code;
        $product->status = $request->status;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->dis_price;
        $image = $request->image;
        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('products', $imagename);
            $product->image = $imagename;
        }
        $product->save();
        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
    // carousel--------------
    public function add_carousel(Request $request)
    {
        $data = new carousel;
        $data->name = $request->carousel;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('data', $imagename);
        $data->image = $imagename;
        $data->save();
        return redirect()->back()->with('message', 'Carousel Added Successfully');
    }
    //view carousel--------------
    public function view_carousel()
    {
        $data = carousel::all();
        return view('admin.carousel', compact('data'));
    }
    //delete carousel---------------
    public function delete_carousel($id)
    {
        $data = carousel::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Carousel Deleted Successfully');
    }
    //add store------------
    public function add_store(Request $request)
    {
        $store = new Stores;
        $store->store_name = $request->name;
        $store->store_description = $request->description;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('store', $imagename);
        $store->store_link = $imagename;
        $store->save();
        return redirect()->back()->with('message', 'Carousel Added Successfully');
    }
    public function view_stores()
    {
        $store = Stores::all();
        return view('admin.stores', compact('store'));
    }
    public function delete_store($id)
    {
        $store = Stores::find($id);
        $store->delete();
        return redirect()->back()->with('message', 'Store Deleted Successfully');
    }
    //contact
    public function contacts()
    {
        $contact = Contact::all();
        return view('admin.contacts', compact('contact'));
    }
    //add contact
    public function add_contact(Request $request)
    {
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->number = $request->number;
        $contact->save();
        return redirect()->back()->with('message', 'Contact Added Successfully');
    }
    //delete contact
    public function delete_contact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('message', 'Contact Deleted Successfully');
    }
}