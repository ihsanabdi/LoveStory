@extends('layouts.index')

@section('title', 'Kontak')

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
                            <a href="{{ route('contact') }}">@yield('title')</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="push-up top-equal blocks-spacer-last">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Main Title =  -->
                <!--  ==========  -->
                
                <div class="span12">
                    <div class="title-area">
                        <h1 class="inline"><span class="light">Contact</span> Us</h1>
                    </div>
                </div>

                <div class="span12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6225968143085!2d107.65765541431787!3d-6.935629394988921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e80527521cdb%3A0x7ff2c5b31375bb20!2sJl.+Kawaluyaan+Indah+VII+No.24%2C+Jatisari%2C+Buahbatu%2C+Kota+Bandung%2C+Jawa+Barat+40286!5e0!3m2!1sid!2sid!4v1509259773662" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span8 single single-page">
                    <!--  ==========  -->
                    <!--  = Contact Form =  -->
                    <!--  ==========  -->
                    <section class="contact-form-container">
                        
                        <h3 class="push-down-25"><span class="light">Send</span> a Message</h3>

                        <form action="#" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Nama</label>
                                <div class="controls">
                                    <input type="text" class="input-block-level" id="nama" placeholder="Nama">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Email</label>
                                <div class="controls">
                                    <input type="text" class="input-block-level" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Subjek</label>
                                <div class="controls">
                                    <input type="text" class="input-block-level" id="subjek" placeholder="subjek">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputEmail">Message</label>
                                <div class="controls">
                                    <textarea  class="input-block-level"></textarea>
                                </div>
                            </div>
                            <button class="btn btn-warning pull-right">Send</button>
                        </form>
                    </section>
    
                    </article>

                </section> <!-- /main content -->
                
                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span4">
                    <!--  ==========  -->
                    <!--  = Company Info with Google Maps =  -->
                    <!--  ==========  -->
                    <article class="company-info">
                        <div class="row">
                            <div class="span3">
                                <h3 class="push-down-30"><span class="light">Company</span> Info</h3>
                                    
                                <p>
                                    <strong class="opensans dark-clr">Address.</strong>
                                    <br />
                                    Jl. Kawaluyaan Indah VII. No. 24
                                </p>
                                    
                                <p>
                                    <strong class="opensans dark-clr">Phone number:</strong> 0896-3767-9168
                                    <br />
                                    <strong class="opensans dark-clr">Email:</strong> <a href="#">info@lovestory.com</a>
                                </p>
                            </div>
                        </div>
                </aside> <!-- /sidebar -->

            </div>
        </div>
    </div> <!-- /container -->
@endsection