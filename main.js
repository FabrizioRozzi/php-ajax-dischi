const app = new Vue({
  el: '#app',
  data:{
    albums:[],
    genres:[],
    genreToSearch: 'all',
    apiURL: 'http://localhost/PHP%20dischi/php-ajax-dischi/api.php'

  },
  methods:{

    getAPI(){
      axios.get('http://localhost/PHP%20dischi/php-ajax-dischi/api.php',{
        params:{
          genre: this.genreToSearch,
        }
      })
      .then(res => {
        this.albums = res.data.albums;
    
        this.genres = res.data.genres;
        console.log(res.data.genres);
      }).catch(err => {
        console.log(err);
      })
    },
  },
  created(){
    this.getAPI();
    
  }

});
