<template>
	<!--  ==========  -->
    <!--  = Single Product =  -->
    <!--  ==========  -->
    <div class="span9">
        <div class="product">
            <div class="row">
                <div class="span3">
                    <div class="product-img">
                        <div class="picture">
                            <a href="javascript::void(0)"><img width="540" height="374" :alt="product.nama" :src="product.gambar" /></a>
                            <div class="img-overlay">
                                <!-- <a class="btn more btn-primary" href="javascript::void(0)">More</a> -->
                                <a class="btn buy btn-danger" @click="addCart">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="span6">
                    <div class="main-titles no-margin">
                        <h5 class="isotope--title"><a href="javascript::void(0)">{{ product.nama }}</a></h5>
                        <div class="meta-data">
                            <span class="price">{{product.harga}}</span>
                        </div>
                    </div>
                    <p class="desc">{{ product.deskripsi }}</p>
                </div>
            </div>
        </div>
    </div> <!-- /single product -->
</template>

<script>
	export default{
		name: 'product',
		props: ['product'],
        methods:{
            addCart(){
                axios.post('/cart/store', {
                        id: this.product.id
                    })
                    .then(res => {
                        console.log(res)
                    })
                    .catch(e => {
                        console.log(e.response)
                    })
            }
        }
	}
</script>