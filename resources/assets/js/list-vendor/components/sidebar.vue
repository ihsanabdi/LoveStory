<template>
    <aside class="span3 left-sidebar" id="tourStep1">
        <div class="sidebar-item sidebar-filters" id="sidebarFilters">

            <!--  ==========  -->
            <!--  = Sidebar Title =  -->
            <!--  ==========  -->
            <div class="underlined">
            	<h3><span class="light">Shop</span> by filters</h3>
            </div>

            <!--  ==========  -->
            <!--  = Categories =  -->
            <!--  ==========  -->
            <div class="accordion-group" id="tourStep2">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">Categories <b class="caret"></b></a>
                </div>
                <div id="filterOne" class="accordion-body collapse in">
                    <div class="accordion-inner">
                        <a href="#" v-for="kategori in categories" :data-target="kategori.target" :data-value="kategori.id" class="selectable" ><i class="box"></i> {{ kategori.title }}</a>
                    </div>
                </div>
            </div> <!-- /categories -->

            <!--  ==========  -->
            <!--  = Prices slider =  -->
            <!--  ==========  -->
            <div class="accordion-group">
                <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">Price <b class="caret"></b></a>
                </div>
                <div id="filterPrices" class="accordion-body in collapse">
                    <div class="accordion-inner with-slider">
                        <div class="jqueryui-slider-container">
                            <div id="pricesRange"></div>
                        </div>
                        <input type="text" data-initial="432" class="max-val pull-right" disabled />
                        <input type="text" data-initial="99" class="min-val" disabled />
                    </div>
                </div>
            </div> <!-- /prices slider -->

            <a href="#" class="remove-filter" id="removeFilters"><span class="fa fa-ban-circle"></span> Remove All Filters</a>

        </div>
    </aside> <!-- /sidebar -->
</template>

<script>
    export default {
        name: 'Sidebar',
        data(){
            return {
                categories: []
            }
        },
        methods: {
            getData(){
                var vm = this
                axios.get('kategori')
                    .then(res => {
                        Vue.set(vm.$data, 'categories', res.data)
                    })
                    .catch(e => {
                        console.log(e.response)
                    })
            },
            select(event){
                console.log("selectable")
                console.log(event)
            }
        },
        beforeMount(){
            this.getData();
        }
    }
</script>