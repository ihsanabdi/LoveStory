<?php

namespace App\Http\Controllers;

use App\Models\DetailVendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DetailVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        if(request()->wantsJson()){
            $data = [];
            if(request()->jenis){
                $detail = DetailVendor::with('jenis')
                    ->whereIn('dave_jenis', request()->jenis)
                    ->where('dave_vend_id', $id)
                    ->get();
            }else{
                $detail = DetailVendor::with('jenis')
                    ->where('dave_vend_id', $id)
                    ->get();
            }
            
            foreach ($detail as $key => $value) {
                $row = [];
                $row['id'] = $value->dave_id;
                $row['nama'] = $value->jenis->jenvend_nama;//'Nama';//$value->vendor;
                $row['jenis'] = $value->jenis->jenvend_id;
                $row['deskripsi'] = $value->dave_deskripsi;
                $row['harga'] = 'Rp.'.number_format($value->dave_harga, 2, ',', '.');
                $row['gambar'] = (file_exists( public_path() .$value->dave_foto))? url($value->dave_foto): url('images/vendor/default.jpg');
                //$row['foto'] = (file_exists( public_path() .$value->vend_foto))? $value->vend_foto: 'images/vendor/default.jpg';
                $data[] = $row;
            }

            return DataTables::of($data)->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
