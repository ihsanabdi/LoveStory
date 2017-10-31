<?php

namespace App\Http\Controllers;

use App\Models\DetailVendor;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart = Cart::content();
        if(request()->wantsJson()){

        }

        return view('content.checkout-step-1', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'id' => 'require'
        // ]);
        $id = $request->id;

        $detail =  DetailVendor::findOrFail($id);
        $data = Cart::add([
            'id' => $detail->dave_id,
            'name' => "Nama",
            'qty' => 1,
            'price' => $detail->dave_harga,
        ]);

        return response()
            ->json([
                'message'=> "Cart Berhasil Ditambahkan"
            ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        
        return redirect()->back();
    }

    public function clear()
    {
        # code...
    }

    public function total()
    {
        # code...
    }
}
