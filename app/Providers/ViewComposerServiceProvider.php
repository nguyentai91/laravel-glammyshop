<?php

namespace App\Providers;

use App\Category;
use App\Http\Requests\Request;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        view()->composer( 'frontend.navigation', function ( $view ) {

            if (session('cart')) {

                $items = session('cart');
                $totalqty = 0;
                $totalprice = 0;
                foreach($items as $item){
                $totalqty += $item['qty'];
                    $totalprice += $item['qty']*$item['price'];
                }
                $view->with( [ 'cate' => Category::all(), 'cartqty' => $totalqty, 'items' => $items, 'totalprice' => $totalprice ] );

            } else {
                $items = [];
                $totalqty = 0;
                $totalprice = 0;
                $view->with( [ 'cate' => Category::all(), 'cartqty' => $totalqty, 'items' => $items, 'totalprice' => $totalprice ] );

            }

        });


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
