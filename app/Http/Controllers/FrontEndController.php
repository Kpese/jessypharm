<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Blog;
use App\Models\Distribution;
use App\Models\Testimony;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        $products = Product::orderByDesc('created_at')->limit(5)->get();
        $testimonys = Testimony::orderByDesc('created_at')->get();

        return view('frontend.home.index', compact('products', 'testimonys'));
    }

    public function about(){

        return view('frontend.about');
    }

    public function product(){
        $products = Product::orderByDesc('created_at')->get();
        return view('frontend.product', compact('products'));
    }
    public function media(){
   $blog = Blog::orderByDesc('created_at')->paginate(5);
        return view('frontend.media', compact('blog'));
    }

    public function product_single($slug){
        $product = Product::where('slug', $slug)->first();
        return view('frontend.single-product', compact('product'));
    }

    public function media_single($slug){
$blog = Blog::where('slug', $slug)->first();
        return view('frontend.single-media', compact('blog'));
    }

    public function distribution(){
        $distribute = Distribution::paginate(10);
        return view('frontend.distribution', compact('distribute'));
    }

    public function contact(){
        return view('frontend.contact');
    }

}
