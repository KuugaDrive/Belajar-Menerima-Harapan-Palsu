<?php
$Taa=array("Ayah", "Mamak", "A.W", "Syukranda", "Yandi",);
// echo $Taa[2];

// for($i=0; $i<4; $i++){
//   echo $Taa[$i]." ";
// }

// foreach($i=0; $i.count(); $i++){
//   echo $Taa[i];
// }
?>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Array</title>
  <style>
    .APTX{
      width: 100px;
      height: 100px;
      background-color: red;
      text-align: center;
      line-height: 100px;
      margin: 3px;
      float:left ;
    }
    .clear{
      clear: both;
    }
  </style>
</head>
<body><?php for($i=0; $i<count($Taa); $i++){?>
  <div class="APTX">  <?php echo $Taa[$i];?>
  </div><?php }?>
<!-- 
<?php 
  echo "-------------------"
?>  -->

<!-- <br><br><br><br><br><br><br><br><?php echo "--------------------"?><br><br><br> -->
<div class="clear"></div>
  <?php foreach($Taa as $Apotoxien ){?>
  <div class="APTX">
    <?php echo $Apotoxien ?>
  </div><?php }?>

  <div class="clear"></div>
<?php foreach($Taa as $Apotoxien):?>
  <div class="APTX">
    <?= $Apotoxien; ?>
  </div><?php endforeach;?>


</body>
</html>
