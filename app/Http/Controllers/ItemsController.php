<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
class ItemsController extends Controller
{
    public function index(Item $item){
        return $item->get();
    }
}
