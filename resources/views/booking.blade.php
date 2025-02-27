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
  <title>Bio Room | Booking List</title>
</head>
<body>
  <div class="booking-list">
    <div class="rectangle-96"></div>
    <div class="rectangle-2865"></div>
    <div class="rectangle-2864"></div>
    <div class="rectangle-2877"></div>
    <div class="rectangle-2866"></div>
    <div class="kembali">Kembali</div>
    <img class="vector" src="vector0.svg" />
    <div class="beranda">Beranda</div>
    <img class="vector2" src="vector1.svg" />
    <div class="booking-list2">Booking List</div>
    <img class="line-18" src="line-180.svg" />
    <div class="topik">Topik</div>
    <div class="tanggal">Tanggal</div>
    <div class="nama-ruangan">Nama Ruangan</div>
    <div class="aksi">Aksi</div>
    <div class="status-rapat">Status Rapat</div>
    <a href="/bio-room">
    <div class="beranda2">Beranda</div>
    <img
      class="material-symbols-dashboard-outline-rounded"
      src="material-symbols-dashboard-outline-rounded0.svg"
    /></a>
    <a href="/bio-room/ruangan">
    <div class="ruangan">Ruangan</div>
    <img
      class="material-symbols-meeting-room-rounded"
      src="material-symbols-meeting-room-rounded0.svg"
    /></a>
    <a href="#">
    <div class="booking-list3">Booking List</div>
    <img
      class="material-symbols-list-rounded"
      src="material-symbols-list-rounded0.svg"
    /></a>
    <div class="booking-list4">Booking List</div>
    <div class="meet-up">MeetUp</div>
    <img class="carbon-user-avatar-filled" src="carbon-user-avatar-filled0.svg" />
    <?php
    if ($result->num_rows >0){
      while ($row=$result->fetch_assoc()){
        echo "<div class='user'>". $row['name']."</div>";
      }
    }
    $conn->close();
    ?>
    <img class="group-10" src="group-100.svg" />
    <div class="buka-notulen">Buka Notulen</div>
    <div class="rapat-progress-bulanan">Rapat Progress Bulanan</div>
    <div class="_16-peserta">(16 Peserta)</div>
    <div class="_03-feb-2025">03-Feb-2025</div>
    <div class="the-sun">The Sun</div>
    <div class="_10-00-10-30">10:00 - 10:30</div>
    <div class="group-60">
      <div class="rectangle-2888"></div>
      <div class="selesai">Selesai</div>
    </div>
    <div class="lantai-5">Lantai 5</div>
    <div class="buka-notulen2">Buka Notulen</div>
    <div class="rapat-progress-bulanan2">Rapat Progress Bulanan</div>
    <div class="_16-peserta2">(16 Peserta)</div>
    <div class="_03-feb-20252">03-Feb-2025</div>
    <div class="the-sun2">The Sun</div>
    <div class="_10-00-10-302">10:00 - 10:30</div>
    <div class="group-60">
      <div class="rectangle-28882"></div>
      <div class="dibatalkan">Dibatalkan</div>
    </div>
    <div class="lantai-52">Lantai 5</div>
    <div class="buka-notulen3">Buka Notulen</div>
    <div class="rapat-progress-bulanan3">Rapat Progress Bulanan</div>
    <div class="_16-peserta3">(16 Peserta)</div>
    <div class="_03-feb-20253">03-Feb-2025</div>
    <div class="the-sun3">The Sun</div>
    <div class="_10-00-10-303">10:00 - 10:30</div>
    <div class="group-61">
      <div class="rectangle-28883"></div>
      <div class="sedang-berjalan">Sedang Berjalan</div>
    </div>
    <div class="lantai-53">Lantai 5</div>
    <div class="buka-notulen4">Buka Notulen</div>
    <div class="rapat-progress-bulanan4">Rapat Progress Bulanan</div>
    <div class="_16-peserta4">(16 Peserta)</div>
    <div class="_03-feb-20254">03-Feb-2025</div>
    <div class="the-sun4">The Sun</div>
    <div class="_10-00-10-304">10:00 - 10:30</div>
    <div class="group-61">
      <div class="rectangle-28884"></div>
      <div class="sedang-berjalan2">Sedang Berjalan</div>
    </div>
    <div class="lantai-54">Lantai 5</div>
    <img class="uil-arrow" src="uil-arrow0.svg" />
    <img class="uil-arrow2" src="uil-arrow1.svg" />
    <img class="uil-arrow3" src="uil-arrow2.svg" />
    <img class="uil-arrow4" src="uil-arrow3.svg" />
    <div class="line-9"></div>
    <div class="line-10"></div>
    <div class="line-11"></div>
    <div class="line-12"></div>
    <div class="line-13"></div>
  </div>
  
</body>
</html>
</x-app-layout>