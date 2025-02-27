<x-app-layout>
<?php
  include 'db.php';

  $sql="SELECT * FROM users";
  $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./vars.css">
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
  <title>Bio Room | Ruangan</title>
</head>
<body>
  <div class="ruangan">
    <div class="rectangle-96"></div>
    <div class="rectangle-2865"></div>
    <div class="rectangle-2866"></div>
    <div class="kembali">Kembali</div>
    <img class="vector" src="vector0.svg" />
    <div class="beranda">Beranda</div>
    <img class="vector2" src="vector1.svg" />
    <div class="ruangan2">Ruangan</div>
    <img class="line-18" src="line-180.svg" />
    <div class="rectangle-2864"></div>
    <div class="rectangle-2877"></div>
    <a href="/bio-room">
    <div class="beranda2">Beranda</div>
    <img
      class="material-symbols-dashboard-outline-rounded"
      src="material-symbols-dashboard-outline-rounded0.svg"
    /></a>
    <a href="#"><div class="ruangan3">Ruangan</div>
    <img
      class="material-symbols-meeting-room-rounded"
      src="material-symbols-meeting-room-rounded0.svg"
    /></a>
    <a href="/bio-room/booking-list">
    <div class="booking-list">Booking List</div>
    <img
      class="material-symbols-list-rounded"
      src="material-symbols-list-rounded0.svg"
    /></a>
    <div class="ruangan4">Ruangan</div>
    <div class="bio-room">
      <span>
        <span class="bio-room-span">Bio</span>
        <span class="bio-room-span2">Room</span>
      </span>
    </div>
    <img class="carbon-user-avatar-filled" src="carbon-user-avatar-filled0.svg" />
    <?php
    if ($result->num_rows >0){
      while ($row=$result->fetch_assoc()){
        echo "<div class='user'>". $row['name']."</div>";
      }
    }
    $conn->close();
    ?>
    <div class="rectangle-2869"></div>
    <img class="rectangle-2873" src="rectangle-28730.png" />
    <div class="group-15">
      <div class="lantai-5">Lantai 5</div>
      <div class="_08-00-17-00">08.00 - 17.00</div>
      <div class="maks-15-orang">Maks. 15 Orang</div>
      <div class="hugeicons-location-04">
        <img class="group" src="group0.svg" />
      </div>
      <div class="iconamoon-clock-light">
        <img class="group2" src="group1.svg" />
      </div>
      <div class="solar-user-circle-linear">
        <img class="group3" src="group2.svg" />
      </div>
    </div>
    <div class="the-sun">The Sun</div>
    <div class="fasilitas">Fasilitas</div>
    <div class="group-16">
      <div class="rectangle-2879"></div>
      <div class="proyektor">Proyektor</div>
    </div>
    <div class="group-17">
      <div class="rectangle-28792"></div>
      <div class="speaker">Speaker</div>
    </div>
    <div class="group-18">
      <div class="rectangle-28793"></div>
      <div class="kamera">Kamera</div>
    </div>
    <div class="group-19">
      <div class="rectangle-2878"></div>
      <div class="detail-ruangan">Detail Ruangan</div>
    </div>
    <div class="rectangle-28692"></div>
    <img class="rectangle-28732" src="rectangle-28731.png" />
    <div class="group-152">
      <div class="lantai-6">Lantai 6</div>
      <div class="_08-00-17-002">08.00 - 17.00</div>
      <div class="maks-9-orang">Maks. 9 Orang</div>
      <div class="hugeicons-location-042">
        <img class="group4" src="group3.svg" />
      </div>
      <div class="iconamoon-clock-light2">
        <img class="group5" src="group4.svg" />
      </div>
      <div class="solar-user-circle-linear2">
        <img class="group6" src="group5.svg" />
      </div>
    </div>
    <div class="ruang-rapat-kecil">Ruang Rapat Kecil</div>
    <div class="fasilitas2">Fasilitas</div>
    <div class="group-16">
      <div class="rectangle-28794"></div>
      <div class="proyektor2">Proyektor</div>
    </div>
    <div class="group-19">
      <div class="rectangle-28782"></div>
      <div class="detail-ruangan2">Detail Ruangan</div>
    </div>
    <div class="group-25">
      <div class="rectangle-28693"></div>
    </div>
    <div class="group-25">
      <div class="rectangle-28694"></div>
    </div>
    <div class="group-25">
      <div class="rectangle-28695"></div>
    </div>
    <div class="rectangle-28696"></div>
    <img class="rectangle-28733" src="rectangle-28732.png" />
    <div class="group-15">
      <div class="lantai-62">Lantai 6</div>
      <div class="_08-00-17-003">08.00 - 17.00</div>
      <div class="maks-22-orang">Maks. 22 Orang</div>
      <div class="hugeicons-location-043">
        <img class="group7" src="group6.svg" />
      </div>
      <div class="iconamoon-clock-light3">
        <img class="group8" src="group7.svg" />
      </div>
      <div class="solar-user-circle-linear3">
        <img class="group9" src="group8.svg" />
      </div>
    </div>
    <div class="ruang-rapat-besar">Ruang Rapat Besar</div>
    <div class="fasilitas3">Fasilitas</div>
    <div class="group-16">
      <div class="rectangle-28795"></div>
      <div class="proyektor3">Proyektor</div>
    </div>
    <div class="group-17">
      <div class="rectangle-28796"></div>
      <div class="speaker2">Speaker</div>
    </div>
    <div class="group-18">
      <div class="rectangle-28797"></div>
      <div class="kamera2">Kamera</div>
    </div>
    <div class="group-19">
      <div class="rectangle-28783"></div>
      <div class="detail-ruangan3">Detail Ruangan</div>
    </div>
    <div class="group-27">
      <div class="group-202">
        <div class="rectangle-28798"></div>
      </div>
      <div class="ellipse-13"></div>
      <div class="ellipse-14"></div>
      <div class="ellipse-15"></div>
    </div>
    <img class="group-10" src="group-100.svg" />
    <div class="rectangle-2903"></div>
    <div class="group-50">
      <div class="tambah-ruangan">Tambah Ruangan</div>
      <img class="ic-round-plus" src="ic-round-plus0.svg" />
    </div>
  </div>
  
</body>
</html>
</x-app-layout>