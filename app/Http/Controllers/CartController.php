<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Orders;
use yajra\Datatables\Datatables;
use App\User;

class CartController extends Controller
{
    public  function  index(Request $request) {
        if (session('cart')) {
            $items = $request->session()->get('cart');
        } else {
            $items = [];
        }

        $totalqty = 0;
        $total = 0;
            foreach ( $items as $item ) {
                $totalqty += $item['qty'];
                $total += $item['price']*$item['qty'];
            }

        return view('frontend.pages.shopping-bag', compact('items','total'));
    }

    public function bag(Request $request, $slug)
    {
        $products = Product::where('slug',$slug)->get();
        $colors = [];
        $sizes = [];
        foreach($products[0]->color as $color){
            $colors[] = $color->code;
        }
        foreach($products[0]->size as $size){
            $sizes[] = $size->size_name;
        }

            $product = array(
                'id'    => $products[0]->id,
                'slug'  => $products[0]->slug,
                'name'  => $products[0]->product_name,
                'image' => $products[0]->image_name,
                'price' => $products[0]->price,
                'color' => $colors,
                'size'  => $sizes,
                'qty'   => 1
            );
        if(!session('cart')){

            $request->session()->put("cart.$slug", $product);
        } else {

                if($request->session()->has("cart.$slug")){

                    $a = session('cart')[$slug]['qty'] += 1;

                    $request->session()->put("cart.$slug.qty", $a);

                } else {

                    $request->session()->put("cart.$slug", $product);
                }
            }



        $items = $request->session()->get('cart');

        return view('frontend.pages.shopping-bag', compact('items'));
    }

    public function delete(Request $request, $slug ) {

        $request->session()->forget("cart.$slug");
        return redirect('/cart');
    }

    public function getcartitems( Request $request ) {
        if (session('cart')) {
            $items = $request->session()->get('cart');
        } else {
            $items = [];
        }

        $data = [];

        foreach ($items as $item){
            $data[] = [
                'name' => $item['name'],
                'slug' => $item['slug'],
                'price' => $item['price'],
                'image' => $item['image'],
                'qty'   => $item['qty']
            ];
        }

        return response()->json($data);
    }

    public function getproduct( $id ) {
        return "asdasd";
    }

    public function getlist() {
        $order_list = Orders::all();
        return Datatables::of($order_list)
            ->addColumn('action', 'action here')
            ->addColumn('fullname', function($order_list) {
                $fullname = $order_list->firstname." ".$order_list->lastname;
                return $fullname;
            })
            ->addColumn('address', function($order_list) {
                $address = $order_list->street1.", ".$order_list->province.", ".$order_list->sity;
                return $address;
            })
            ->make(true);

    }
}
