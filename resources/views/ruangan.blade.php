<x-app-layout>
<?php
  include 'db.php';

  $sql="SELECT * FROM users";
  $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio Room | Ruangan</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">  
  <style>
   a,
   button,
   input,
   select,
   h1,
   h2,
   h3,
   h4,
   h5,
   * {
       box-sizing: border-box;
       margin: 0;
       padding: 0;
       border: none;
       text-decoration: none;
       background: none;
   
       -webkit-font-smoothing: antialiased;
   }
   
   menu, ol, ul {
       list-style-type: none;
       margin: 0;
       padding: 0;
   }
   </style>
</head>
<body>
  <div class="rectangle-1">
    <div class="text-h2">Ruangan</div>
    <div class="container">
        <div class="card">
            <div class="box-img"></div><br>
            <h3>The Sun</h3>
            <p>📍 Jakarta</p>
            <p>👤 Maks. 15 Orang</p>
            <p>⏰ 08.00 - 17.00</p>
            <div class="facilities">
                <span class="facility">Proyektor</span>
                <span class="facility">Speaker</span>
                <span class="facility">Kamera</span>
            </div>
            <a href="#" class="btn">Detail Ruangan</a>
        </div>

        <div class="card">
            <div class="box-img"></div><br>
            <h3>Ruang Rapat Kecil</h3>
            <p>📍 Bandung</p>
            <p>👤 Maks. 9 Orang</p>
            <p>⏰ 08.00 - 17.00</p>
            <div class="facilities">
                <span class="facility">Proyektor</span>
            </div>
            <a href="#" class="btn">Detail Ruangan</a>
        </div>

        <div class="card">
            <div class="box-img"></div><br>
            <h3>Ruang Rapat Besar</h3>
            <p>📍 Lantai 6</p>
            <p>👤 Maks. 22 Orang</p>
            <p>⏰ 08.00 - 17.00</p>
            <div class="facilities">
                <span class="facility">Proyektor</span>
                <span class="facility">Speaker</span>
                <span class="facility">Kamera</span>
                <span class="facility">...</span>
            </div>
            <a href="#" class="btn" >Detail Ruangan</a>
        </div>
    </div>
  </div>
</body>
</html>
</x-app-layout>