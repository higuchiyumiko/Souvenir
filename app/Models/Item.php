<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
   // use SoftDeletes;
    
    public function category(){
        return $this->belongsTo(Item::class);
    }
    public  function reviews(){
        return $this->hasMany(Item::class);
    }
    public function getByLimit(int $limit_count=5){
        return $this->orderBy('id','ASC')->limit($limit_count)->get();
    }
    protected $fillable = [
        'name',
        'item_image',
        'market_name',
        'allergy',
        //'created_at',
        //'updated_at',
        //'deleted_at',
        'category_id'
    ];
    protected $table = 'items';
}
