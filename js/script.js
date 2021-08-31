


new Vue(

    {
        el: '#app',
        data: {
          discs:[]
        },
        created(){
            axios.get('http://localhost:8888/php-ajax-dischi/api/api.php')
            .then((response) => { 
             console.log(response);
             this.discs = response.data;
            })

        }
    }
)

Vue.config.devtools = true;