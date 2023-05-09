<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'title',
        'body',
        'review_score',
        'updated_at',
        'created_at',
        'item_id'
        ];
        protected $table='reviews';
        
        public function item(){
            return $this->belongsTo(Review::class);
        }
}
