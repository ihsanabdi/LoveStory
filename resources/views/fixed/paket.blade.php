 <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <div class="boxed-area blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">Our</span> Packages</h2>
                         <div class="arrows">
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                    </div>
                    </div>
                </div>
            </div> <!-- /title -->


<<<<<<< HEAD
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="row popup-products">
                                              
                <div class="span1">
                </div>

                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span2">
                    <div class="product">
                       <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="{{ url('paket-eksekutif') }}"><img src="{{ url('images/eksekutif.jpg') }}" alt="" width="540" height="374" /></a>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <center><h5 class="no-margin">Eksekutif</h5></center>
                            </div>
                            
                            </div>
                    </div>
                </div> <!-- /product -->

                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span2">
                    <div class="product">
                       <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="{{ url('paket') }}"><img src="{{ url('images/gold.jpg') }}" alt="" width="540" height="374" /></a>
                                </div>  
                            </div>
                            <div class="main-titles no-margin">
                                <center><h5 class="no-margin">Gold</h5></center>
                            </div>
                            
                            </div>
                    </div>
                </div> <!-- /product -->

                                                                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span2">
                    <div class="product">
                       <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="{{ url('paket-silver') }}"><img src="{{ url('images/silver.jpg') }}" alt="" width="540" height="374" /></a>
=======
            <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">

                        
                @php($paket = App\Models\Paket::limit(3))
                
                <div class="slide">
                    <div class="row popup-products">
                        @foreach($paket->get() as $p)
                        <!--  ==========  -->
                        <!--  = Product =  -->
                        <!--  ==========  -->
                        <div class="span4">
                            <div class="product">
                               <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="{{route('paket.show', ['params'=>strtolower($p->pkt_nama)])}}"><img src="{{url($p->pkt_foto)}}" alt="" width="540" height="374" /></a>
                                            <div class="img-overlay">
                                                <a href="{{route('paket.show', ['params'=>$p->pkt_nama])}}" class="btn more btn-primary">More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <center><h5 class="no-margin">{{ $p->pkt_nama }}</h5></center>
                                    </div>
                                    
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc
                                </div>
                            </div>
                        </div> <!-- /product -->
                        @endforeach
                    </div>
<<<<<<< HEAD
                </div> <!-- /product -->


     <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span2">
                    <div class="product">
                       <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="{{ url('paket-bronze') }}"><img src="{{ url('images/bronze.jpg') }}" alt="" width="540" height="374" /></a>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <center><h5 class="no-margin">Bronze</h5></center>
                            </div>
                            </div>
                    </div>
                </div> <!-- /product -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span2">
                    <div class="product">
                       <div class="product-inner">
                            <div class="product-img">
                                <div class="picture">
                                    <a href="{{ url('paket-medium') }}"><img src="{{ url('images/medium.jpg') }}" alt="" width="540" height="374" /></a>
                                </div>
                            </div>
                            <div class="main-titles no-margin">
                                <center><h5 class="no-margin">Medium</h5></center>
                            </div>
                            
                            </div>
                    </div>
                </div> <!-- /product -->  
                
=======
                </div>
                
                <div class="slide">
                    <div class="row popup-products blocks-spacer">
                        @foreach($paket->offset(3)->get() as $p)
                        <!--  ==========  -->
                        <!--  = Product =  -->
                        <!--  ==========  -->
                        <div class="span4">
                            <div class="product">
                               <div class="product-inner">
                                    <div class="product-img">
                                        <div class="picture">
                                            <a href="{{route('paket.show', ['params'=>strtolower($p->pkt_nama)])}}"><img src="{{url($p->pkt_foto)}}" alt="" width="540" height="374" /></a>
                                            <div class="img-overlay">
                                                <a href="{{route('paket.show', ['params'=>$p->pkt_nama])}}" class="btn more btn-primary">More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">
                                        <center><h5 class="no-margin">{{ $p->pkt_nama }}</h5></center>
                                    </div>
                                    
                                </div>
                            </div>
                        </div> <!-- /product -->
                        @endforeach
                    </div>
                </div>
            </div> <!-- /new products -->
>>>>>>> d7e7c63ddbf7cb3e17c24007824f478501bf47cc

        </div>
    </div>

