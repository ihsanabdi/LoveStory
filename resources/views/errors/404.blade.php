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
                            <a href="index.html">Webmarket</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="404.html">404 Error</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">
                
                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span12">
                    
                    <p class="container-404">
                        <img src="images/404.png" alt="404 Error" width="394" height="161" />
                    </p>
                	
                	<hr />
                	
                	<p class="center-align size-16">
                	    Looks like something went wrong! The page you were looking for is not here. 
                	</p>
                	<p class="center-align size-16 push-down-50">
                	    Go <a href="index.html">Home</a> or try to search: 
                	</p>
                	
                	<div class="row">
                	    <div class="span4 offset4">
                	        <div class="sidebar-item widget_search">
                                <form role="search" method="get" id="searchform" action="#" class="form">
                                    <input type="text" placeholder="Search for content ..." name="s" class="input-block-level" id="appendedInputButton">
                                    <button type="submit">
                                        <i class="icon-search"></i>
                                    </button>
                                </form>
                            </div>
                	    </div>
                	</div>
                	
                </section> <!-- /main content -->
            </div>
        </div>
    </div> <!-- /container -->
    
    
	
@endsection