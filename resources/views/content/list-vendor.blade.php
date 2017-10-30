@extends('layouts.index')

@section('title', 'Home')

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
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container" id="list-vendor">
        <div class="push-up blocks-spacer">
            <div class="row">


                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                            <h3><span class="light">Shop</span> by filters</h3>
                            {{-- @{{ categori }} --}}
                        </div>

                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filter-kategori">Categories <b class="caret"></b></a>
                            </div>
                            <div id="filter-kategori" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <label v-for="(kategori, idx) in categories" :for="`kategori_${kategori.id}`">
                                        <input type="checkbox" :id="`kategori_${kategori.id}`" v-model="categori"  :value="kategori.id" >@{{ kategori.title }}    
                                    </label>
                                    {{-- <a href="#" v-for="kategori in categories" :data-target="kategori.target" :data-value="kategori.id" class="selectable" @click.stop="select($event)"><i class="box"></i> @{{ kategori.title }}</a> --}}
                                </div>
                            </div>
                        </div> <!-- /categories -->

                        <!--  ==========  -->
                        <!--  = Prices slider =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                                @{{ harga_max }}
                            </div>
                            <div id="filterPrices" class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" v-model="harga_max" data-initial="432" class="max-val pull-right" disabled />
                                    <input type="text" data-initial="99" class="min-val" readonly="" />
                                </div>
                            </div>
                        </div> <!-- /prices slider -->

                        <a href="#" class="remove-filter" id="removeFilters"><span class="fa fa-ban-circle"></span> Remove All Filters</a>

                    </div>
                </aside> <!-- /sidebar -->

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">

                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span4">
                                <h3><span class="light">All</span> Vendor</h3>
                            </div>
                            <div class="span5 align-right sm-align-left">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">Sort:</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value='{"sortBy":"price", "sortAscending":"true"}'>By Price (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"price", "sortAscending":"false"}'>By Price (High to Low) &darr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"true"}'>By Name (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"false"}'>By Name (High to Low) &darr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"true"}'>By Popularity (Low to High) &uarr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"false"}'>By Popularity (High to Low) &darr;</option>
                                    </select>
                                </div>
                                {{-- <div class="view-switch">
                                    <a href="#" class="btn btn-primary"><i class="icon-th"></i></a>
                                    <a href="#" class="btn"><i class="icon-list"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div> <!-- /title -->

                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <div class="row popup-products">
                        <div id="" class="isotope-container">
                            
                            <vendor v-for="value in vendor" :key="value.id" v-bind:vendor="value"></vendor>
                    	    
                    	</div>
                	</div>
                	<hr />

                                        <!--  ==========  -->
                    <!--  = Pagination =  -->
                    <!--  ==========  -->
                    <div class="pagination pagination-centered">
                        <ul>
                            <li><a v-on:click="prev" class="btn btn-primary"><span class="icon-chevron-left"></span></a></li>
                            <li><a v-on:click="next" class="btn btn-primary"><span class="icon-chevron-right"></span></a></li>
                        </ul>
                    </div> <!-- /pagination -->
                </section> <!-- /main content -->


            </div>
        </div>
    </div> <!-- /container -->
	
@endsection

@push('js')
    <script src="{{ url('js/vendor.js') }}" type="text/javascript"></script>
@endpush