@extends('layouts.index')
@section('title', 'Budget Helper')

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
                            <a href="{{ route('budget-helper') }}">@yield('title')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
	<div class="container">
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
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat mauris eget magna egestas porta. Curabitur sagittis sagittis neque rutrum congue. Donec lobortis dui sagittis, ultrices nunc ornare, ultricies elit. Curabitur tristique felis pulvinar nibh porta, sit amet interdum ligula placerat. Maecenas auctor, sem nec eleifend blandit...
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
                            <hr style="width: 100%">
                            <section class="span3">
                            &nbsp;
                            </section>
                            <section class="span1">
                                <h3><b>Total</b></h3> 
                            </section>  
                          	<section class="span3">
                                <input type="text" aria-required="true" tabindex="1" size="30" style="width: 100%" value="" id="author" name="author" placeholder="Rp." required>
                            </section>
                            <section class="span2">
                                <butto style="margin-top: 4px;margin-left: 40px" class="btn btn-warning bold" type="submit" tabindex="5" id="submit">Save Budget</button>
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
@endsection