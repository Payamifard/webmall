<?php

namespace App\Models;

use App\Models\ProductColor;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $table='products' ;

    protected $fillable=[
        'category_id',
        'name',
        'slug',
        'brand_id' ,
        'description' ,
        'small_description' ,
        'original_price',
        'selling_price' ,
        'quantity' ,
        'trending' ,
        'meta_title' ,
        'meta_keyword' ,
        'meta_description' ,
        'status' ,

    ];

    public function productImages(){


        return $this->hasmany(ProductImage::class,'product_id','id') ;

    }


    public function Category() {

        return $this->belongsto(Category::class,'category_id' , 'id') ;

    }

    public function productColors(){


        return $this->hasmany(ProductColor::class,'product_id','id') ;

    }

    public function brands(){

        return $this->belongsto(Brand::class,'brand_id','id') ;

    }

}
