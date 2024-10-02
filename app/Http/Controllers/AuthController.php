<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Product;
use App\Models\Testimony;
use App\Models\Distribution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function validates()
    {

        $validate = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validate)) {
            request()->session()->regenerate();

            Alert::success('Success', 'you are logged in successfully');
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function register()
    {
        return view('auth.register');
    }

    public function store_user()
    {

        $validate = request()->validate([
            'name' => 'string|required',
            'email' => 'required|unique:users,email',
            'password' => 'required'
        ]);

        User::create([
            'name' => $validate['name'],
            'email' => $validate['email'],
            'password' => Hash::make($validate['password']),
        ]);

        Alert::success('Success', 'user is successfully registered');

        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::success('Success', 'user is logged out successfully');
        return redirect('/login');
    }

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




    public function testimony()
    {
        $testimonys = Testimony::orderByDesc('created_at')->get();
        if($testimonys){
        return view('backend.testimony.index', compact('testimonys'));
    }
     return view('backend.testimony.index');
    }

    public function create_testimony()
    {
        return view('backend.testimony.create');
    }
    public function store_testimony()
    {
        $validate = request()->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);

        Testimony::create($validate);

Alert::success('Success', 'testimony is successfully created');
        return redirect()->route('admin.testimony');
    }


    public function edit_testimony($id)
    {
        $testimony = Testimony::where('id', $id)->first();
        return view('backend.testimony.edit', compact('testimony'));
    }
    public function update_testimony($id)
    {
        $validate = request()->validate([
            'name' => 'string',
            'description' => 'string',
        ]);

        $testimony = Testimony::where('id', $id)->first();

        $testimony->update($validate);

        Alert::success('Success', 'testimony is successfully updated');
        return redirect()->route('admin.testimony');
    }


    public function delete_testimony(Testimony $testimony)
    {
        $testimony->delete();
        Alert::success('Success', 'testimony is successfully deleted');
        return redirect()->back();
    }

}
