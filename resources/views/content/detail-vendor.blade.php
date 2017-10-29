@extends('layouts.index')

@section('title', 'Detail Vendor')

@section('Breadcrumbs')
    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="{{ route('home') }}">Love Story</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{ route('vendor') }}">Vendor</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="{{ route('detail-vendor', ['id'=>$vendor->vend_id, 'params'=>str_slug($vendor->vend_nama, '-')]) }}">{{ $vendor->vend_nama }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="push-up top-equal blocks-spacer">

            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">

                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <img src="{{url('images/dummy/products/shirt-1.jpg')}}" alt="" width="940" height="940" id="mainPreviewImg" />
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="{{url('images/dummy/products/shirt-1.jpg')}}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{url('images/dummy/products/shirt-2.jpg')}}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{url('images/dummy/products/shirt-3.jpg')}}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{url('images/dummy/products/shirt-3.jpg')}}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{url('images/dummy/products/shirt-3.jpg')}}" alt="" width="940" height="940" /></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">
                        <h1 class="name">{{ $vendor->vend_nama }}</h1>
                    </div>
                    <div class="product-description">
                        <p>{{ $vendor->vend_deskripsi}}</p>
                        <hr />

                        <h4>Rp.1000.000,-</h4>
                        <hr />
                        <a href="#" class="btn btn-success btn-block">Pilih</a>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

@endsection

