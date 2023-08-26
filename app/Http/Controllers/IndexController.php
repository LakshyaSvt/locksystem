<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Product;
use App\Models\PurchaseLead;
use App\Models\ServiceLead;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class IndexController extends Controller
{

    public function index()
    {
        $states = State::get();
        $products = Product::get();
        return view('product-lead', compact('states', 'products'));
    }

    public function service()
    {
        $states = State::get();
        $products = Product::get();
        return view('service-lead', compact('states', 'products'));
    }

    public function fetchCitiesBySate($state_id)
    {
        $state = State::findOrFail($state_id);
        return $state->cities;
    }

    public function purchaseLeadEnquiry()
    {
        $purchase = new PurchaseLead;
        $purchase->name = request()->name;
        $purchase->email = request()->email;
        $purchase->mobile = request()->mobile;
        $purchase->state_id = request()->state;
        $purchase->city_id = request()->city;
        $purchase->price = request()->price;
        $purchase->zipcode = request()->zipcode;
        $purchase->address = request()->address;

        $products = [];
        $product = (object)[];
        $product->product_name = request()->product_name;
        $product->qty = request()->quantity;
        array_push($products, $product);

        if (isset(request()->add_more_product_name)) {
            $product->product_name = request()->add_more_product_name;
            $product->qty = request()->add_more_quantity;
            array_push($products, $product);
        }

        $purchase->products = json_encode($products);
        $purchase->save();

        return redirect()->back();
    }
    public function serviceLeadEnquiry(Request $request)
    {
        $service = new ServiceLead();
        $service->name = request()->name;
        $service->email = request()->email;
        $service->mobile = request()->mobile;
        $service->state_id = request()->state;
        $service->city_id = request()->city;
        $service->zipcode = request()->zipcode;
        $service->address = request()->address;

        $product = Product::findOrFail(request()->product_id);
        $service->product_id = $product->id;
        $service->product_code = $product->code;

        if ($request->hasFile('invoice')) {
            $file = $request->file('invoice');
            $name = time() . '-' . $file->getClientOriginalName();
            $path = public_path('/storage/uploads/invoice');

            if (!File::isDirectory($path)) {
                File::makeDirectory($path, 0777, true, true);
            }
            $file->move($path, $name);

            $fileObj = []; $files = [];
            $fileObj['download_link'] = 'uploads/invoice/'.$name;
            $fileObj['original_name'] = $file->getClientOriginalName();
            array_push($files, $fileObj);

            $service->invoice = json_encode($files);
            // dd($service->invoice);
        }
        $service->save();

        return redirect()->back();
    }
}
