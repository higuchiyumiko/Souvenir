<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;
use App\Http\Controllers\Controller;

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
}
