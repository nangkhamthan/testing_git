<?php



namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Brand;
use Illuminate\Http\Request;
use App\Item;
// use App\Category;
// use App\Subcategory;
// use App\Brands;

//use Illuminate\Support\Facades\Route;

class pageController extends Controller
{
    public function mainfun($value='')
    {
    	$items=Item::all();
        $brands=Brand::all();
        $categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('main',compact('items','categories','subcategories','brands'));
    }
    public function brandfun($value='')
    {
    	$brands=Brand::all();
    	return view('brand',compact('brands'));
    }
    public function itemdetailfun($id)
    {
    	$categories=Category::all();
        $subcategories=Subcategory::all();
        $items=Item::find($id);
    	return view('itemdetail',compact('categories','subcategories','items'));
    }
    public function loginfun($value='')
    {
    	$categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('login',compact('categories','subcategories'));
    }
    public function promotionfun($value='')
    {
    	$categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('promotion',compact('categories','subcategories'));
    }
    public function registerfun($value='')
    {
    	$categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('register',compact('categories','subcategories'));
    }
    public function shoppingcartfun($value='')
    {
    	$categories=Category::all();
        $subcategories=Subcategory::all();
    	return view('shoppingcart',compact('categories','subcategories'));
    }
    public function subcategoryfun($value='')
    {
    	
    	return view('subcategory');
    }
    public function filteritems($value='')
    {
        
        return view('filteritems');
    }
    public function itembybrand($id)
    {   
        $categories=Category::all();
        $subcategories=Subcategory::all();
        $brands=Brand::find($id);
        return view('brand',compact('brands','categories','subcategories'));
    }
    

}
