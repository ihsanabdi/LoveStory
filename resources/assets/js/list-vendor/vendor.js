require('./../bootstrap');

window.Vue = require('vue');

// Vue.component('sidebar', require('./components/sidebar'));
Vue.component('vendor', require('./components/vendor'))


const app = new Vue({
    el: '#list-vendor',
    data(){
    	return {
    		vendor: [
    			{id: 1}
    		],
            input: {
                start: 0,
                length: 9,
                columns: [
                    { data: 'nama', name: 'nama', searchable: true, orderable: false, search: {value:'', regex: false}},
                    { data: 'kategori', name: 'id', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'kategori', name: 'kategori', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'kategori', name: 'foto', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'kategori', name: 'filter', searchable: false, orderable: false, search: {value:'', regex: false}},
                ],
                search:{
                    value: '',
                    regex: false
                },
            },
            params: {
                key: '',
                value: ''
            },
            recordsTotal: '',
            categories: [],
            categori: [],
            min_max_harga: [],
            harga_max: 0,
    	}
    },
    methods:{
    	getData(){
    		var vm = this
    		axios.get(this.buildUrl(), {params: {categori: this.categori}})
    			.then(res => {
                    Vue.set(vm.$data, 'vendor', res.data.data)
    				Vue.set(vm.$data, 'recordsTotal', res.data.recordsTotal)
    			})
    			.catch(e => {
    				console.log(e.response)
    			})
    	},
        buildUrl(){
            var _columns = this.input.columns;
            var url_column ='';
            _columns.forEach((val, index)=>{
                Object.keys(val).forEach((key) => {
                    if(typeof val[key] === 'object'){
                        Object.keys(val[key]).forEach((_key)=>{
                            url_column += `&columns[${index}][${key}][${_key}]=${(!val[key][_key])?'': val[key][_key]}`;
                        });
                    }
                    else
                        url_column += `&columns[${index}][${key}]=${val[key]}`
                })
            })

            var _search = this.input.search;
            var url_search ='';
            Object.keys(_search).forEach((key) => {
                url_search += `&search[${key}]=${(!_search[key])?'':_search[key]}`;
            })

            return `vendor?start=${this.input.start}&length=${this.input.length}${url_column}${url_search}${this.params.value}`;
        },
        prev(){
            if(parseInt(this.input.start) > 0){
                this.input.start = parseInt(this.input.start) - parseInt(this.input.length);
                this.getData();
            }
        },
        next(){
            if((parseInt(this.input.start) + parseInt(this.input.length)) < parseInt(this.recordsTotal)){                this.input.start = parseInt(this.input.start) + parseInt(this.input.length);
                this.getData();
            }
        },
        getKategori(){
            var vm = this
            axios.get('kategori')
                .then(res => {
                    Vue.set(vm.$data, 'categories', res.data)
                })
                .catch(e => {
                    console.log(e.response)
                })
        },
        getHarga(){
            var that = this
            axios.get('max-min-harga').then(res => {
                Vue.set(that.$data, 'min_max_harga', res.data)
                // console.log(that.min_max_harga)
            }).catch(e => {
                console.log(e)
            })
        }
    },
    beforeMount(){
        this.getData()
    	this.getKategori()
        this.getHarga();
    },
    watch:{
        categori(){
            this.getData();
        }
    },
});