let app = new Vue({

  el : '#app',
  data:{

    arrAlbum:[],
  
  },
  methods:{
  },  
  created(){
    axios.get("http://localhost/PHP%20dischi/php-ajax-dischi/data/db.php")
    .then(res=>{
      this.arrAlbum = res.data;
    })
    .catch(err=>{
      console.log(err);
    })
  }

})
