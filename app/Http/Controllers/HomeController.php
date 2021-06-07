<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use PHPUnit\Util\Json;
use \stdClass;

class HomeController extends Controller
{
    private $products, $products_length, $productsObj;
    public function __construct()
    {
        $this->products = Http::get('http://128.199.140.179:5011/api/products')->json();
        $this->product_length = count($this->products);
        // $this->productsObj = new stdClass();
        // for ($i = 0; $i < $this->product_length; $i++) {
        //     $this->productsObj->name = $this->products[$i]['name'];
        //     $this->productsObj->desc = $this->products[$i]['detail'];
        //     $this->productsObj->price = $this->products[$i]['price'];
        // }
        // $this->productsObj = $this->products;
    }

    public function index()
    {
        // Get Data Product from JSON


        return view('home', [
            "product" =>  $this->products,
            "product_length" => $this->product_length
        ]);
    }
    public function searchProduct(Request $request)
    {

        $search_input = $request->input('search_product');
        $search_product = collect($this->products)->filter(function ($item) use ($search_input) {
            // replace stristr with your choice of matching function
            return false !== stristr($item['name'], $search_input);
        });

        if (!$search_product->isEmpty()) {

            return view('home', [
                "product" =>   $search_product,
                "product_length" => $this->product_length

            ]);
        }
        return view('home', [
            "product" =>  $this->products,
            "product_length" => $this->product_length

        ]);
    }
    public function sortByPrice(Request $request)
    {
        $sort_price = $request->input('sort_price');

        if ($sort_price == 'low') {
            $filter_products = collect($this->products)->sortBy('price')->values()->all();
        } else if ($sort_price == 'high') {
            $filter_products = collect($this->products)->sortByDesc('price')->values()->all();
        }


        return view('home', [
            "product" =>  $filter_products,
            "product_length" => $this->product_length

        ]);
    }
}
