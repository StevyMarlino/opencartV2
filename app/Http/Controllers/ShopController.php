<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopRequest;
use App\Http\Requests\UpdateShopRequest;
use App\Mail\ShopRequestForActivation;
use App\Models\Product;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('shops.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreShopRequest $request
     * @return Response
     */
    public function store(StoreShopRequest $request)
    {
        //Create Shop for the auth user
        $shop = auth()->user()->shop()->create([
            'name' => $request['name'],
            'slug' => Str::slug($request['name']),
            'description' => $request['description'],
        ]);

        //send mail to admin

        $admins = User::whereHas('role', function ($q) {
            $q->where('name', 'admin');
        })->get();

        Mail::to($admins)->send(new ShopRequestForActivation($shop));

        return redirect()->route('home')->withMessage('Create shop request sent');
    }

    /**
     * Display the specified resource.
     *
     * @param $slug
     * @return Application|Factory|View
     */
    public function show($slug)
    {

        $shop = Shop::findShopBySlug($slug)[0];
        $datas = [
            'products' => $products = Product::getProductShop($shop->id),
            'slug' => $slug,
            'categories' => Category::whereNull('parent_id')->get(),
        ];


        return view('shops.index', $datas);
    }

    public function details($slug, $product_id)
    {
        return view('shops.details', ['product' => Product::find($product_id), 'slug' => $slug]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Shop $shop
     * @return void
     */
    public function edit(Shop $shop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateShopRequest $request
     * @param Shop $shop
     * @return void
     */
    public function update(UpdateShopRequest $request, Shop $shop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Shop $shop
     * @return Response
     */
    public function destroy(Shop $shop)
    {
        //
    }
}
