<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Review;

class ItemsController extends Controller
{
    public function index(Item $item,Category $category,Review $review){
        return view('items/index')->with(['items'=>$item->get()])->with(['categories'=>$category->getByLimit()])->with(['reviews'=>$review->get()]);
        //　　　　　　　　　　　　　　　　　↑blade内で使う変数名
    }
}
