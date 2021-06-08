<?php 
  include  "data/db.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="logo">
      <img src="images.png" alt="">
    </div>
    <div class="search">
      <label for="cars">Choose a genre:</label>
        <select 
          @change="changeFunction()"
          v-model="optionGenre"
          >
          <option 
            selected
            value="1">so tutti</option>
          <option
            v-for="(gen, index) in genere" :key='index'
            :value="gen">{{gen}}</option>
        </select>
      </div>
  </header>
  <main>
    <div class="container-album">
      <div class="album">
        <?php foreach($database as $album) : ?>
        <img 
          src="<?php echo $album['poster'] ?>" alt=""
        >
        <h5><?php echo $album['title'] ?></h5>
        <h6><?php echo $album['author'] ?></h6><br>
        <h6><?php echo $album['year'] ?></h6>
        <?php endforeach ?>
      </div>
    </div>
    
  </main>



      <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>    
</body>
</html>