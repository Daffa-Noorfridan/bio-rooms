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
   .container {
    width: 100%;
    overflow-x: auto;
    position: relative;
    left:5%;
    top:25%;
  }

  table {
    width: 90%;
    border-collapse: collapse;
  }

  th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  td{
    color: #414048;
    font-family: Roboto;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }

  th {
    color: #7B9AAF;
    font-family: Roboto;
    font-size: 18px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .status {
    display: inline-block;
    padding: 4px 8px;
    border-radius: 8px;
    color: white;
  }

  .selesai {
    background-color: #4CAF50;
  }

  .berjalan {
    background-color: #FFA500;
  }

  .dibatalkan {
    background-color: #FF4D4D;
  }

  a {
    color: #38AECA;
    font-family: Roboto;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: normal;
  }
   </style>
  <title>Bio Room | Booking List</title>
</head>
<body>
  <div class="rectangle-1">
    <div class="text-h2">Booking List</div>
      <section class="container">
        <table>
          <thead>
            <tr>
              <th>Topik</th>
              <th>Tanggal</th>
              <th>Nama Ruangan</th>
              <th>Status Rapat</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><a href="#notulen">Rapat Progress Bulanan</a><br><small>(16 Peserta)</small></td>
              <td>03-Feb-2025<br>10:00 - 10:30</td>
              <td>The Sun<br>Lantai 5</td>
              <td><span class="status selesai">Selesai</span></td>
              <td><a href="#notulen">Buka Notulen</a></td>
            </tr>
            <tr>
              <td><a href="#notulen">Rapat Progress Bulanan</a><br><small>(16 Peserta)</small></td>
              <td>03-Feb-2025<br>10:00 - 10:30</td>
              <td>The Sun<br>Lantai 5</td>
              <td><span class="status berjalan">Sedang Berjalan</span></td>
              <td><a href="#notulen">Buka Notulen</a></td>
            </tr>
            <tr>
              <td><a href="#notulen">Rapat Progress Bulanan</a><br><small>(16 Peserta)</small></td>
              <td>03-Feb-2025<br>10:00 - 10:30</td>
              <td>The Sun<br>Lantai 5</td>
              <td><span class="status dibatalkan">Dibatalkan</span></td>
              <td><a href="#notulen">Buka Notulen</a></td>
            </tr>
            <tr>
              <td><a href="#notulen">Rapat Progress Bulanan</a><br><small>(16 Peserta)</small></td>
              <td>03-Feb-2025<br>10:00 - 10:30</td>
              <td>The Sun<br>Lantai 5</td>
              <td><span class="status berjalan">Sedang Berjalan</span></td>
              <td><a href="#notulen">Buka Notulen</a></td>
            </tr>
          </tbody>
        </table>
      </section>
  </div>
</body>
</html>
</x-app-layout>