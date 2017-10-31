<<<<<<< HEAD

@extends('layouts.index')

@section('title', 'Kontak')

@section('Breadcrumbs')

=======
@extends('layouts.index')
@section('title', 'Budget Helper')

@section('Breadcrumbs')
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
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
<<<<<<< HEAD
                            <a href="#">Budget Helper</a>
=======
                            <a href="{{ route('budget-helper') }}">@yield('title')</a>
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<<<<<<< HEAD
    <div class="container">
=======
	<div class="container">
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
        <div class="push-up top-equal blocks-spacer">
            <div class="row">

                <!--  ==========  -->
                <!--  = Main Title =  -->
                <!--  ==========  -->

                <div class="span12">
                    <div class="title-area">
                        <h1 class="inline"><span class="light">Budget</span> Helper</h1>
                    </div>
                </div>

                <div class="span12">
                          
                                 <p class="push-down-25" align="justify">
<<<<<<< HEAD
                               Budget Helper merupakan fitur Love Story yang akan memudahkan anda untuk mengatur pengeluaran budget secara sendiri. Tidak Hanya itu, anda juga dapat memilih vendor sesuai dengan yang anda inginkan. Adapun persyaratan fitur Budget Helper yaitu jumlah total tidak boleh kurang dari harga paket yang ditawarkan.
=======
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit...
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
                            </p>
                </div>
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->

                    <!--  ==========  -->
                    <!--  = Post with Image =  -->
                    <!--  ==========  -->
                    <form id="" method="post" action="#" class="">
                
                    		<section class="span2">
                                <p><b>Gedung</b></p> 
                            </section> 
<<<<<<< HEAD
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button></a>
                            </section> 
                            <section class="span2">
                                <p><b>Konsumsi</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Make Up</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Dekorasi</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Dokumentasi</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Sewa Pakaian</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Souvenir</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>Organize Hari H</b></p> 
                            </section> 
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
                            <section class="span2">
                                <p><b>MC</b></p> 
                            </section>  
                          	<section class="span3">
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span1">
                                <button class="btn btn-warning" disabled style="margin-top: 4px;color: #fff">Vendor</button>
                            </section> 
=======
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Konsumsi</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Make Up</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Dekorasi</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Dokumentasi</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Sewa Pakaian</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Souvenir</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>Organize Hari H</b></p> 
                            </section> 
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <p><b>MC</b></p> 
                            </section>  
                          	<section class="span4">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 80%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
                            <hr style="width: 100%">
                            <section class="span3">
                            &nbsp;
                            </section>
                            <section class="span1">
                                <h3><b>Total</b></h3> 
                            </section>  
                          	<section class="span3">
<<<<<<< HEAD
                                <input disabled type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">

                        <a href="{{ route('home') }}" class="btn btn-block btn-warning" style="margin-top: 3px;width: 70%">Save Budget</a>
=======
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <butto style="margin-top: 4px;margin-left: 40px" class="btn btn-warning bold" type="submit" tabindex="5" id="submit">Save Budget</button>
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
                            </section>

                            <section class="span3">
                            &nbsp;
                            </section>
                        </form>
                        <br><br><br><br>

                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
               
            </div>
        </div>
    </div> <!-- /container -->
<<<<<<< HEAD

     <!--  = Login =  -->
    <div id="vendor"  class="modalKu hide " tabindex="3" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="loginModalLabel"><span class="light">Login</span> Love Story</h3>
        </div>
        <div class="modal-body">
           <div class="span3 isotope--target filter--vests" data-price="1379" data-popularity="4" data-size="s|xl|xxl" data-color="blue" data-brand="nike">
                                <div class="product">
                                    <div class="product-inner">
                                                                                <div class="product-img">
                                            <div class="picture">
                                                <a href="product.html"><img width="540" height="374" alt="" src="images/dummy/products/product-24.jpg" /></a>
                                                <div class="img-overlay">
                                                    <a class="btn more btn-primary" href="product.html">More</a>
                                                    <a class="btn buy btn-danger" href="#">Add to Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="main-titles no-margin">
                                                                                        <h4 class="title">$1379</h4>
                                                                                        <h5 class="no-margin isotope--title">Ipsum Adipiscing Tincidunt Vulputate Condimentum</h5>
                                        </div>
                                        <div class="row-fluid hidden-line">
                                            <div class="span6">
                                                <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                                                <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                                            </div>
                                            <div class="span6 align-right">
                                                <span class="icon-star stars-clr"></span>
                                                <span class="icon-star stars-clr"></span>
                                                <span class="icon-star stars-clr"></span>
                                                <span class="icon-star stars-clr"></span>
                                                <span class="icon-star"></span>
                                                                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- /single product -->        </div>
    </div>
    @endsection
    
=======
@endsection
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
