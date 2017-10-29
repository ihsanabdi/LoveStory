<template>
	<!--  ==========  -->
    <!--  = Single Product =  -->
    <!--  ==========  -->
    <div :class="['span3 isotope--target filter', vendor.filter]" data-price="1719" data-popularity="2">
        <div class="product">
            <div class="product-inner">
	            <!-- <div class="stamp red">Sold</div> -->
                <div class="product-img">
	                <div class="picture">
	                    <a href="product.html"><img width="540" height="374" :alt="vendor.nama" src="images/dummy/products/product-1.jpg" /></a>
	                    <div class="img-overlay">
	                        <a class="btn more btn-primary" :href="vendor.url">More</a>
	                        <a class="btn buy btn-danger" href="javascript:void(0)">Add to Cart</a>
	                    </div>
	                </div>
	            </div>
	            <div class="main-titles no-margin">
	                <h4 class="title">{{ vendor.nama }}</h4>
	                <h5 class="no-margin isotope--title">{{ vendor.kategori}}</h5>
	            </div>
	            <div class="row-fluid hidden-line">
                    <div class="span6">
                        <a href="#" class="btn btn-small"><i class="icon-heart"></i></a>
                        <a href="#" class="btn btn-small"><i class="icon-exchange"></i></a>
                    </div>
                    <div class="span6 align-right">
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star stars-clr"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                        <span class="icon-star"></span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- /single product -->
</template>

<script>
	export default{
		name: 'Vendor',
		props: ['vendor'],
	}
</script>