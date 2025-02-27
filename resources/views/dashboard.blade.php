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
  <script src="/bio-room/jquery-3.6.0.min.js"></script>
  
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
  <title>Bio Room | Dashboard</title>
</head>
<body>
  <div class="beranda">
    <div class="rectangle-96"></div>
    <div class="rectangle-2865"></div>
    <div class="rectangle-2864"></div>
    <div class="rectangle-2877"></div>
    <a href="#"><div class="beranda2">Beranda</div>
    <img
      class="material-symbols-dashboard-outline-rounded"
      src="material-symbols-dashboard-outline-rounded0.svg"
    /></a>
    <a href="./ruangan">
    <div class="ruangan">Ruangan</div>
    <img
      class="material-symbols-meeting-room-rounded"
      src="material-symbols-meeting-room-rounded0.svg"
    /></a>
    <a href="./booking-list">
    <div class="booking-list">Booking List</div>
    <img
      class="material-symbols-list-rounded"
      src="material-symbols-list-rounded0.svg"
    /></a>
    <div class="bio-room">
      <span>
        <span class="bio-room-span">Bio</span>
        <span class="bio-room-span2">Room</span>
      </span>
    </div>
    <img class="group-10" src="group-100.svg" />
    <div class="rectangle-2866"></div>
    <div class="rectangle-2903"></div>
    <a href="#tambah-rapat">
    <div class="group-50">
      <div class="jadwalkan-rapat">Jadwalkan Rapat</div>
      <img class="ic-round-plus" src="ic-round-plus0.svg" />
    </div></a>
    <div class="rectangle-2882"></div>
    <div class="rapat-progress-bulanan">Rapat Progress Bulanan</div>
    <div class="_10-00">10.00</div>
    <div class="the-sun">The Sun</div>
    <div class="_03-feb-2025">03-Feb-2025</div>
    <div class="_10-30">10.30</div>
    <div class="_30-menit">30 Menit</div>
    <div class="_16">16</div>
    <div class="_03-feb-20252">03-Feb-2025</div>
    <div class="lantai-5">Lantai 5</div>
    <div class="nama-ruangan">Nama Ruangan</div>
    <div class="mulai">Mulai</div>
    <div class="selesai">Selesai</div>
    <div class="jumlah-peserta">Jumlah Peserta</div>
    <div class="add-on">Add On</div>
    <div class="aksi">Aksi</div>
    <div class="durasi">Durasi</div>
    <div class="uraian">Uraian</div>
    <div class="line-9"></div>
    <div class="beranda3">Beranda</div>
    <a href="logout.php">
    <img class="carbon-user-avatar-filled" src="carbon-user-avatar-filled0.svg" /></a>
    <?php
    if ($result->num_rows >0){
      while ($row=$result->fetch_assoc()){
        echo "<div class='user'>". $row['name']."</div>";
      }
    }
    $conn->close();
    ?>
    <a href="#notification"><img class="tabler-bell-filled" src="tabler-bell-filled0.svg" /></a>
    <a href="#serach" onclick="searchFunction()"><img class="fa-search" src="fa-search0.svg" /></a>
  </div>
  <script>
        function searchFunction() {
            let query = document.getElementById("search-input").value;
            let content = document.getElementById("beranda");
            let paragraphs = content.getElementsByTagName("div");
            
            for (let p of paragraphs) {
                p.innerHTML = p.innerHTML.replace(/<span class="highlight">(.*?)<\/span>/g, "$1");
            }
            
            if (query) {
                let found = false;
                for (let p of paragraphs) {
                    if (p.innerHTML.includes(query)) {
                        p.innerHTML = p.innerHTML.replace(new RegExp(query, "gi"), match => `<span class="highlight">${match}</span>`);
                        p.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        found = true;
                        break;
                    }
                }
                if (!found) {
                    alert("Teks tidak ditemukan");
                }
            } else {
                alert("Masukkan kata kunci pencarian!");
            }
        }
    </script>
</body>
</html>
</x-app-layout>
