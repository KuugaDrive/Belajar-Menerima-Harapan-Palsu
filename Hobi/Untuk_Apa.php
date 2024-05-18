<?php 
$laguku=[
  ["lagu"=> "Untuk Apa/Untuk Apa?",
   "penyanyi"=>"Hindia",
   "album"=>"Menari Dengan Bayangan", 
   "lirik"=>"Rute pagi yang dahulu ceria...", 
   "gambar"=>"Untuk_Apa.jpg"
],
  ["lagu"=> "Before", 
  "penyanyi"=>"Niki", 
  "album"=>"Nicole", 
  "lirik"=>"Ooh, I don't know where to go", 
  "gambar"=>"Before.jpg"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lagu Favorit</title>
  
<style>
  .APTX{
    margin: 5px;
    float: left;
  }
  .clear{
    clear: both;
  }
</style>

</head>
<body>

  <h1>Lagu Favorit</h1>
  <div class="APTX"> 
<ul class="clear">

  <?php foreach($laguku as $musik): ?>
  <li> 
    <img src="img/<?php echo $musik["gambar"] ?> ">
  </li>
  <li>Lagu : <?php echo $musik["lagu"]; ?></li>
  <li>Album : <?php echo $musik["album"]; ?></li>
  <li>Penyanyi :<?php echo $musik["penyanyi"]; ?> </li>
  <li>L irik : <?php  echo $musik["lirik"]; ?></li>
  <br><br><br><br>  
  <?php endforeach ?>
</ul>
</div>

</body>
</html>