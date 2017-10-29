@extends('layouts.index')

@section('title', 'Home')

{{-- @section('Breadcrumbs')
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
                            <a href="{{ route('galeri') }}">galeri</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection --}}

@section('content')
<br><br>
                    <section class="container">
      <div class="row-fluid">
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-1.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-1.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-3.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-3.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-4.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-4.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-5.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-5.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                            </div>

      <div class="row-fluid">

                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-6.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-6.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-9.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-9.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-10.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-10.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-11.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-11.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                            </div>


                             
      <div class="row-fluid">
                             <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-12.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-12.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-13.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-13.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-14.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-14.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                             
                            <div class="span3 push-down-20">
                                <div class="picture">
                                    <a href="images/galeri-15.jpg" class="add-prettyphoto"><img class="rounded" src="images/galeri-15.jpg" alt="" width="128" height="128" /></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
        @include('fixed.quote')
	
@endsection