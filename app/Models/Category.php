<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    
    public function items(){
        return $this->hasMany(Item::class);
    }
    public function getByLimit(int $limit_count=7){
        return $this->orderBy('id','ASC')->limit($limit_count)->get();
    }
    
     protected $fillable = [
        'id',
        'name',
    ];
    protected $table = 'categories';
}
