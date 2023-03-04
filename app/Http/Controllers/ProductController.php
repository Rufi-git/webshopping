<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Ramsey\Uuid\Type\Decimal;

class ProductController extends Controller
{
    public function index(){
        $user = User::where('name', 'Rufi')->first();
        
        return view('welcome', ["products"=>$user->products]);
    }

    public function default(){
        $user = User::where('name', 'Rufi')->first();
        // $product = new Product;
        // $product->name="Gta 6";
        // $product->price=3000;
        // $product->type="size";
        // $product->value="14000";
        // $product->productable_type="App\Models\User";
        // $product->productable_id=$user->id;
        // $product->save();
        return view('welcome', ["products"=>$user->products]);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $user = User::where('name', 'Rufi')->first();
        $product = new Product();
        $product->name = request("name");
        $product->price = request("price");
        $product->type = request("type");
        $product->value = request("typevalue");
        $product->productable_type = "App\Models\User";
        $product->productable_id = $user->id;


        $product->save();
        return redirect("/");
    }

    public function destroy(){
        $ids = request("delete_id");
        if($ids!=null)
            
            Product::whereIn("id",$ids)->delete();
        // $product = Product::where("id",$id);
        // $product->delete();
        return redirect("/");
    }
}
