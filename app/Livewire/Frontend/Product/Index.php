<?php

namespace App\Livewire\Frontend\Product;
use Livewire\Livewire;
use App\Models\Brand;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\color;
use App\Models\ProductColor;

class Index extends Component
{
   public $category,$brandInputs=[],$colorInputs=[],$min_value,$max_value,$sortOption ;
    protected $queryString=[
        'brandInputs'=>['exept'=>'','as'=>'brand'],
        'colorInputs'=>['exept'=>'','as'=>'color'],
    ];

    protected $listeners=[

        'priceFilter'=>'priceFilter'

    ];

        public function mount($category){

        $this->category=$category ;
        $this->sortOption="0";



        $catProducts=$this->category->products->where('status','0')->all() ;



        $prices= array_column($catProducts, 'selling_price') ;

        if($prices){

        $minPrice=min($prices) ;

        $maxPrice=max($prices) ;

        $this->min_value=$minPrice;
        $this->max_value=$maxPrice;
       // $this->priceRange=[ $minPrice, $maxPrice] ;

        }

        else {
            $minPrice=0 ;

        $maxPrice=0 ;

       // $this->priceRange=[ 0,0];

        }


    }
    public function render()
    {

        // dump($this->priceRange) ;

        $category_id=$this->category->id ;

        $categories=Category::where('status','0')->get() ;



        $catProducts=$this->category->products->where('status','0')->all() ;

        $productIds=array_column($catProducts, 'id') ;

        $prices= array_column($catProducts, 'selling_price') ;

        if($prices){

        $minPrice=min($prices) ;

        $maxPrice=max($prices) ;

       // $this->priceRange=[ $minPrice, $maxPrice];

        }

        else {
            $minPrice=0 ;

        $maxPrice=0 ;

     //   $this->priceRange=[ 0,0];

        }


        //get product brands with specific categorty
        $brands_id= array_unique(array_column($catProducts,'brand_id')) ;

        if($brands_id){
            foreach($brands_id as $id){
            $brands[]=Brand::find($id);

            }
        }
        else {

            $brands[]=Null ;

        }


        //getting this category product colors



        foreach($productIds as $pid){

         $colorIds[]=ProductColor::where('product_id',$pid)->pluck('color_id')->toArray() ;



        }

        $count=count($colorIds)-1;

        $productColorIds[]=null ;

        for ($i=0;$i<=$count;$i++){

         $productColorIds= array_merge_recursive($colorIds[$i],$productColorIds) ;



        }

        $productColorIds=array_filter(array_unique($productColorIds)) ;



        foreach($productColorIds as $id){

         $colors[]=Color::findOrFail($id) ;


        }


       // dump($this->priceSort) ;

      // dump($this->brandInputs,$this->colorInputs);

        $catProducts=Product::where('category_id',$category_id)->when($this->brandInputs,function($q){

            $q->whereIn('brand_id',$this->brandInputs) ;

          })->when($this->colorInputs,function($q){

             $q2=productColor::whereIn('color_id',$this->colorInputs)->pluck('product_id')->toArray() ;
             $q->whereIn('id',$q2) ;
        //
        })->when($this->sortOption=="0",function($q){

            $q->orderBy('selling_price','asc') ;

        })->when($this->sortOption=="1",function($q){

            $q->latest()->get() ;


        })->when($this->sortOption=="2",function($q){

            $q->orderBy('selling_price','asc') ;

        })->when($this->sortOption=="3",function($q){

            $q->orderBy('selling_price','desc') ;

        })->where('status','0')->wherebetween('selling_price',[$this->min_value,$this->max_value])->get() ;
       //  dump($catProducts);

        return view('livewire.frontend.product.index',[

            'catProducts' =>$catProducts ,
           'categories'=>$categories,
           'minPrice'=>$minPrice,
            'maxPrice'=>$maxPrice,
           'brands'=>$brands,
            'category_id'=>$category_id,
            'colors'=>$colors,
            'category'=>$this->category,
          //  'priceRange'=>$this->priceRange ,
         'min_value'=>$this->min_value ,
          'max_value'=>$this->max_value
        ]);



    }


}


