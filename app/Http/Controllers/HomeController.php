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

use Session;
use Stripe;



class HomeController extends Controller
{
    public function index()
    {
        $product = products::all();
        $carousel = carousel::all();
        $contact = contact::all();
        $cart = Cart::all();
        $store = Stores::paginate(6);
        return view('home.userpage', compact('product', 'carousel', 'store', 'contact', 'cart'));
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
                $cart = Cart::all();
                $store = Stores::paginate(6);
                return view('home.userpage', compact('product', 'carousel', 'store', 'contact', 'cart'));
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
    }
    public function cart()
    {
        $id = Auth::user()->id;
        $cart = cart::where('user_id', '=', $id)->get();
        $contact = contact::all();
        return view('home.cart', compact('cart', 'contact'));
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
            $order->phone = $data->phone;
            $order->user_id = $data->user_id;
            $order->product_name = $data->product_name;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;
            $order->paymanet_status = 'cash on delivery';
            $order->delivery_status = 'On Process';
            $order->save();
            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('message', 'We have received your order. We will connect with you soon');
    }
    public function products(Request $request)
    {
        $contact = contact::all();
        $cart = cart::all();
        $data = $request['category'];
        if ($data !== null) {
            $product = Products::where('category', $data)->get();
        } else {
            $product = Products::all();
        }
        return view('home.all_products', compact('product', 'contact', 'cart'));
    }
    public function stripe($totalprice)
    {
        $contact = contact::all();
        return view('home.stripe', compact('totalprice', 'contact'));
    }
    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([
            "amount" => $totalprice * 100,
            "currency" => "php",
            "source" => $request->stripeToken,
            "description" => "Thank you for the payment."
        ]);
        $user = Auth::user();
        $userid = $user->id;
        $data = cart::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->phone = $data->phone;
            $order->product_name = $data->product_name;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;
            $order->paymanet_status = 'Paid';
            $order->delivery_status = 'On Process';
            $order->save();
            $cart_id = $data->id;
            $cart = cart::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');

        return redirect()->back();
    }
    public function cartcount()
    {
        // $cartcount = Cart::where('user_id', Auth::id())->where('status', 1)->count();
        $cartcount = Cart::where('user_id', Auth::id())->count();
        // return response()->json(['count' => $cartcount]);
        return $cartcount;
    }
}