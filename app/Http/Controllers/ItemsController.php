<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;
use App\Http\Controllers\Controller;
use Cloudinary;

class ItemsController extends Controller
{
    public function index(Item $item,Category $category,Review $review){
        return view('items/index')->with(['items'=>$item->get()])->with(['categories'=>$category->getByLimit()])->with(['reviews'=>$review->get()]);
        //　　　　　　　　　　　　　　　　　↑blade内で使う変数名
    }
    public function nav(Item $item){
        return view('items/navigation');
    }
    public function search(Request $request){
        $name=$request->input('name');
        $query=Item::query();
        
        if(!empty($name)){
            $query->where('name','LIKE',"%{$name}%");
        }
        $items=$query->get();
        
        return view('items.result',compact('items','name'));
    }
    public function register(Request $request){
        return view('items.register');
    }
    public function store(Request $request,Item $item){
        $image_url=Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input=$request['items'];
        $input+=['item_image'=>$image_url];
        $item->fill($input)->save();
        return redirect('/');
    }
    public function create(Request $request){
        $data=Item::where('id',$request->id)->first();
        return view('items.create',$data)->with(['data'=>$data]);
    }
}



