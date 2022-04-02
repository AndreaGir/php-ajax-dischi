const app = new Vue({
    el: '#app',
    data: {
        dischi: []
    },
    methods: {
        fetchData() {

            axios.get('http://localhost/php-ajax-dischi/dischi.php')
            .then( res => {
               this.dischi = res.data 
            })

        }
    },
    created() {
        this.fetchData();
    },
})