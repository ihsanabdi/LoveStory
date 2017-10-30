require('./../bootstrap');

window.Vue = require('vue');

// Vue.component('sidebar', require('./components/sidebar'));
Vue.component('product', require('./components/product'))

const app = new Vue({
	el: '#list-detail-vendor',
	data(){
		return {
			product: [],
            input: {
                start: 0,
                length: 9,
                columns: [
                    { data: 'id', name: 'id', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'jenis', name: 'jenis', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'deskripsi', name: 'deskripsi', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'gambar', name: 'gambar', searchable: false, orderable: false, search: {value:'', regex: false}},
                    { data: 'harga', name: 'harga', searchable: true, orderable: false, search: {value:'', regex: false}},
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
            jenis: [],
            data_jenis: [],
		}
	},
	methods:{
		getData(){
			var that = this
			axios.get(that.buildUrl(), {params: {jenis:this.jenis}})
				.then(res => {
					Vue.set(that.$data, 'product', res.data.data)
				})
				.catch(e => {
					console.log(e)
				})
		},
		getJenis(){
			var that = this
			axios.get('/jenis-vendor')
				.then(res => {
					Vue.set(that.$data, 'data_jenis', res.data)
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

			var url = window.location.pathname;
			var id = url.split('/');//id[2]

            return `/detail-vendor/${id[2]}?start=${this.input.start}&length=${this.input.length}${url_column}${url_search}${this.params.value}`;
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
	},
	beforeMount(){
		this.getData()
		this.getJenis()
	},
	watch:{
		jenis(){
			this.getData()
		}
	}
})