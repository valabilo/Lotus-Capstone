<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Products;

use App\Models\Carousel;

use App\Models\Stores;

use App\Models\Contact;

use App\Models\Cart;

use App\Models\Order;



class HomeController extends Controller
{
    public function index()
    {
        $product = products::all();
        $carousel = carousel::all();
        $contact = contact::all();
        $store = Stores::paginate(6);
        return view('home.userpage', compact('product', 'carousel', 'store', 'contact'));
    }

    public function redirect()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == '1') {
                return view('admin.home');
            } else {
                $product = products::all();
                $carousel = carousel::all();
                $contact = contact::all();
                $store = Stores::paginate(6);
                return view('home.userpage', compact('product', 'carousel', 'store', 'contact'));
            }
        } else {
            return redirect('login');
        }

    }
    public function product_details($id)
    {
        $product = products::find($id);
        $contact = contact::all();
        return view('home.product_details', compact('product', 'contact'));
    }
    public function add_cart(Request $request, $id)
    {
        if (Auth::id()) {
            $user = Auth::user();
            $product = Products::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;
            $cart->product_name = $product->name;
            if ($product->discount_price != 0) {
                $cart->price = $product->discount_price;
            } else {
                $cart->price = $product->price;
            }

            $cart->image = $product->image;
            $cart->Product_id = $product->id;
            $cart->quantity = $request->quantity;
            $cart->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    public function cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
            $contact = contact::all();
            return view('home.cart', compact('cart', 'contact'));
        } else {
            return redirect('login');
        }
    }
    public function cancel($id)
    {
        $cart = cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_name = $data->product_name;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;
            $order->paymanet_status = 'cash on delivery';
            $order->delivery_status = 'processing';
            $order->save();
            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'We have received your order. We will connect with you soon');
    }
}