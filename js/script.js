


new Vue(

    {
        el: '#app',
        data: {
          discs:[],
          genres:[],
          findGenre:'',
        },
        created(){
            axios.get('http://localhost:8888/php-ajax-dischi/api/api.php')
            .then((response) => { 
             console.log(response);
             this.discs = response.data;
            }),
            axios.get('http://localhost:8888/php-ajax-dischi/api/bonus1.php')
            .then((result)=>{
                console.log(result);
                this.genres = result.data

            })

        }
    }
)

Vue.config.devtools = true;