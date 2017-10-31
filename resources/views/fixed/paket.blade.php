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
                                    
                                </div>
                            </div>
                        </div> <!-- /product -->
                        @endforeach
                    </div>
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

        </div>
    </div>

