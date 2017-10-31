@extends('layouts.index')

@section('title', 'Tentang Kami')

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
                            <a href="{{ route('tentang') }}">@yield('title')</a>
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
                        <h1 class="inline"><span class="light">Love</span> Story</h1>
                        <h2 class="inline tagline">- A Great Family Starts Hear</h2>
                    </div>
                </div>

                <div class="span12">
                            <iframe width="100%" height="400" src="https://www.youtube.com/embed/mSCgp8HxE1M" frameborder="0" gesture="media" allowfullscreen></iframe>
                           
                </div>

                <section class="span2">
                <img src="images/lg.jpg" alt="featured image" width="1540" height="746" />
                </section>
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span7">

                    <!--  ==========  -->
                    <!--  = Post with Image =  -->
                    <!--  ==========  -->
                    <article class="post format-image">
                        
                            <div class="post-title">
                                <h2><span class="light">About</span> Love Story</h2>
                                <hr/>
                                 <p class="push-down-25" align="justify">
                                Love Story adalah sebuah socio-based preneur yang dikembangkan untuk meningkatkan kebahagiaan serta kesuksesan pernikahan setiap pasangan.
                            </p>
                            <p class="push-down-25" align="justify">
                                Tidak hanya membantu menyiapkan perayaan pesta pernikahan, Love Story juga melayani jasa konsultasi pra-nikah hingga pasca-nikah. Hal ini dengan senang hati Kami lakukan agar setiap pasangan dapat menciptakan kisah cinta terbaik untuk mereka miliki selamanya
                            </p>
                        </div>
                    </article>
                </section> <!-- /main content -->

                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 right-sidebar">



                    <!--  ==========  -->
                    <!--  = Twitter Widget =  -->
                    <!--  ==========  -->
                    <div class="sidebar-item widget_twitter">
                     
                        

                    </div>


                </aside> <!-- /sidebar -->
            </div>
        </div>
    </div> <!-- /container -->

	
@endsection