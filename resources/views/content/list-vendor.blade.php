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


                <sidebar></sidebar>

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
                                <div class="view-switch">
                                    <a href="#" class="btn btn-primary"><i class="icon-th"></i></a>
                                    <a href="#" class="btn"><i class="icon-list"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /title -->

                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container">
                            
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