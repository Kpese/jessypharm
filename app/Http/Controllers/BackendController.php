<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Blog;
use App\Models\Distribution;


class BackendController extends Controller
{
    public function index()
    {
        $product = Product::all()->count();
        $blog = Blog::all()->count();
        $distributor = Distribution::all()->count();
        if($product && $blog && $distributor){
            return view('backend.index', compact('product', 'blog', 'distributor'));
        }
    }


    public function product()
    {
        $products = Product::orderByDesc('created_at')->get();
        if ($products) {
            return view('backend.products.index', compact('products'));
        }
        return view('backend.products.index');
    }

    public function create_product()
    {
        return view('backend.products.create');
    }

    public function store_product()
    {
        $validate = request()->validate([
            'name' => 'required|string',
            'image' => 'required|image',
            'description' => 'required|string',
            'dosage' => 'required|string',
            'storage' => 'required|string',
            'composition' => 'required|string',
        ]);

        $product = new Product;
        $product->name = $validate['name'];
        $product->image = $validate['image'];
        $product->description = $validate['description'];
        $product->dosage = $validate['dosage'];
        $product->composition = $validate['composition'];
        $product->storage = $validate['storage'];

        if (!empty(request('image'))) {
            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('products/', $filename);
            $product->image = $filename;
        }

        $product->save();

        Alert::success('Success', 'product is successfully created');
        return redirect()->route('admin.product');
    }
    public function edit_product($slug)
    {
        $products = Product::where('slug', $slug)->first();
        return view('backend.products.edit', compact('products'));
    }
    public function update_product($slug)
    {
        $validate = request()->validate([
            'name' => 'string',
            'image' => 'image',
            'description' => 'string',
            'dosage' => 'string',
            'storage' => 'string',
            'composition' => 'string',
        ]);

        $product = Product::where('slug', $slug)->first();

        $product->name = $validate['name'];
        $product->description = $validate['description'];
        $product->dosage = $validate['dosage'];
        $product->storage = $validate['storage'];
        $product->composition = $validate['composition'];

        if (!empty(request('image'))) {

            if (!empty($product->image)) {
                unlink('products/' . $product->image);
            }

            $file = request()->file('image');
            $filename = time() . '.' . $file->getClientOriginalName();
            $file->move('products/', $filename);

            $product->image = $filename;
        }

        $product->save();
        Alert::success('Success', 'product is successfully updated');
        return redirect()->route('admin.product');

    }

    public function delete_product(Product $product)
    {
        $product->delete();
        Alert::success('Success', 'product is successfully deleted');
        return redirect()->route('admin.product');
    }






    public function distributor()
    {
        $distributors = Distribution::orderByDesc('created_at')->get();
        if ($distributors) {
            return view('backend.distributors.index', compact('distributors'));
        }
        return view('backend.distributors.index');
    }

    public function create_distributor()
    {
        return view('backend.distributors.create');
    }

    public function store_distributor()
    {
        $validate = request()->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'contact' => 'required|string',
        ]);

        $distributor = new Distribution;
        $distributor->name = $validate['name'];
        $distributor->address = $validate['address'];
        $distributor->contact = $validate['contact'];
        $distributor->save();

        Alert::success('Success', 'distributor is successfully created');
        return redirect()->route('admin.distributor');
    }
    public function edit_distributor($id)
    {
        $distributors = Distribution::where('id', $id)->first();
        return view('backend.distributors.edit', compact('distributors'));
    }
    public function update_distributor($id)
    {
        $validate = request()->validate([
            'name' => 'string',
            'address' => 'string',
            'contact' => 'string',
        ]);

        $distributor = Distribution::where('id', $id)->first();

        $distributor->name = $validate['name'];
        $distributor->address = $validate['address'];
        $distributor->contact = $validate['contact'];
        $distributor->save();

        Alert::success('Success', 'distributor is successfully updated');
        return redirect()->route('admin.distributor');

    }

    public function delete_distributor(distribution $distribution)
    {
        $distribution->delete();
        Alert::success('Success', 'distributor is successfully deleted');
        return redirect()->route('admin.distributor');
    }



}

