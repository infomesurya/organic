<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller {

 
     public function home(){
       
      return view( 'welcome');
     }

	 public function blog_details(){
       
      return view( 'blog_details');
     }

	 public function blog(){
       
      return view( 'blog');
     }

	 public function checkout(){
       
      return view( 'checkout');
     }

	 public function contact(){
       
      return view( 'contact');
     }

	 public function main(){
       
      return view( 'main');
     }

	 public function shop_details(){
       
      return view( 'shop_details');
     }

	 public function shop_grid(){
       
      return view( 'shop_grid');
     }

	 public function shoping_cart(){
       
      return view( 'shoping_cart');
     }
	 
	 
	 
	 
	
    
}
