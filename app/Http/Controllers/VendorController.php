<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->wantsJson()){
            $data = [];
            if(request()->categori){
                $vendor = Vendor::with('kategori')//->select('vend_id', 'vend_nama', 'vend_foto')
                    ->whereIn('vend_ktgr_id', request()->categori)
                    ->get();
            }else{
                $vendor = Vendor::with('kategori')//->select('vend_id', 'vend_nama', 'vend_foto')
                    ->get();
            }
            foreach ($vendor as $value) {
                $row = [];

                $row['id'] = $value->vend_id;
                $row['nama'] = $value->vend_nama;
                $row['kategori'] = $value->kategori->ktgr_nama;//['ktgr_nama'];
                $row['foto'] = (file_exists( public_path() .$value->vend_foto))? $value->vend_foto: 'images/vendor/default.jpg';
                // $row['url'] = route('detail-vendor', ['params'=>str_slug($value->vend_nama, '-')]);
                $row['url'] = action('VendorController@show', ['params'=>str_slug($value->vend_nama, '-'),'id'=>$value->vend_id]);

                $data[] = $row;
            }
            return DataTables::of($data)->make(true);
        }

        return view('content.list-vendor');
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
    public function show($id, $params)
    {
        $vendor = Vendor::find($id);
        return view('content.list-detail-vendor');
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
