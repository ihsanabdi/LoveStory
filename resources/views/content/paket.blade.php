@extends('layouts.index')

@section('title', 'Home')

@section('content')

    
    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Love Story</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="">Paket Gold</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

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
                            <img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" id="mainPreviewImg" />
                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg"><img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" /></a>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg"><img src="{{ url('images/gold.jpg') }}" alt="" width="940" height="940" /></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <div class="span7">
                    <div class="product-title">
                        <h1 class="name"><span class="light">Paket</span> Gold</h1>
                    </div>
                    <div class="product-description">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Konsumsi (Makan Utama, Snack dan Stall Prasmanan) /600 pax</td>
                                    <td>Rp.45.000.000,-</td>
                                </tr>
                                <tr>
                                    <td>Dekor Full (Indoor dan Outdoor)</td>
                                    <td>Rp.43.750.000,-</td>
                                </tr>
                                <tr>
                                    <td>Gedung kapasitas 300 undangan</td>
                                    <td>Rp.20.000.000,-</td>
                                </tr>
                                <tr>
                                    <td>Dokumentasi (Foto 2+ Vidio 1)</td>
                                    <td>Rp.18.125.000,-</td>
                                </tr>
                                <tr>
                                    <td>Make Up (Pengantin Wanita+ 2ibu)</td>
                                    <td>Rp.10.625.000,-</td>
                                </tr>
                                <tr>
                                    <td>Sewa Pakaian (3-4 pakaian adat dan modern)</td>
                                    <td>Rp.10.000.000,-</td>
                                </tr>
                                <tr>
                                    <td>Souvenir + Undangan</td>
                                    <td>Rp.6.250.000,-</td>
                                </tr>
                                <tr>
                                    <td>Organizer Hari H</td>
                                    <td>Rp.8.500.000,-</td>
                                </tr>
                                <tr>
                                    <td>MC</td>
                                    <td>Rp.2.500.000,-</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Total</th>
                                    <th>Rp.164.750.000,-</th>
                                </tr>
                            </tfoot>
                        </table>
                        <hr />
                        
                        <a href="#" class="btn btn-block btn-warning">Pilih</a>
                        <a href="{{ url('budget') }}" class="btn btn-block btn-success">Budget Helper</a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /container -->

@endsection