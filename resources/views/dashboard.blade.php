<x-app-layout>
<?php
  include 'db.php';
  $sql="SELECT * FROM users";
  $result=$conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bio Room | Dashboard</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
   body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            height: 100vh;
            justify-content: center; 
            align-items: center; 
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .view-link {
            color: orange;
            text-decoration: none;
        }
        .description-link {
            color: #2196F3;
            text-decoration: none;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            z-index: 10;
        }

        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 5;
        }
   </style>
</head>
<body>
    <div class="rectangle-1">
        <button class="btn-add" type="submit" onclick="openPopup()"><div class="svg-plus"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
        <path d="M18 12.998H13V17.998C13 18.2632 12.8946 18.5176 12.7071 18.7051C12.5196 18.8926 12.2652 18.998 12 18.998C11.7348 18.998 11.4804 18.8926 11.2929 18.7051C11.1054 18.5176 11 18.2632 11 17.998V12.998H6C5.73478 12.998 5.48043 12.8926 5.29289 12.7051C5.10536 12.5176 5 12.2632 5 11.998C5 11.7328 5.10536 11.4784 5.29289 11.2909C5.48043 11.1033 5.73478 10.998 6 10.998H11V5.99799C11 5.73277 11.1054 5.47842 11.2929 5.29088C11.4804 5.10334 11.7348 4.99799 12 4.99799C12.2652 4.99799 12.5196 5.10334 12.7071 5.29088C12.8946 5.47842 13 5.73277 13 5.99799V10.998H18C18.2652 10.998 18.5196 11.1033 18.7071 11.2909C18.8946 11.4784 19 11.7328 19 11.998C19 12.2632 18.8946 12.5176 18.7071 12.7051C18.5196 12.8926 18.2652 12.998 18 12.998Z" fill="white"/>
        </svg></div><font class="jadwalkan-rapat">Jadwalkan Rapat</font></button>
        <div class="text-h2">Beranda</div>
        <div class="border-table">
            <table>
                <thead>
                    <tr>
                        <th>Aksi</th>
                        <th>Nama Ruangan</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Durasi</th>
                        <th>Uraian</th>
                        <th>Jumlah Peserta</th>
                        <th>Add On</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="#" class="view-link">View</a></td>
                        <td>The Sun<br><small>Lantai 5</small></td>
                        <td>10.00<br>03-Feb-2025</td>
                        <td>10.30<br>03-Feb-2025</td>
                        <td>30 Menit</td>
                        <td>Rapat Progress Bulanan</td>
                        <td>16</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div id="overlay" class="overlay" onclick="closePopup()"></div>
        <div id="popup" class="popup">
            <h2>Pesan Ruang Rapat</h2><br>
            <label class="label-popup" for="tanggal">Pesan Untuk Tanggal <span style="color: red;">*</span></label>
            <input type="date" id="tanggal" value="2025-03-20" required>
            <br><br><br>
            <label class="label-popup" for="addon">Add-On (Optional)</label>
            <input type="text" id="addon" placeholder="Tambahkan kebutuhan tambahan">
            <div class="button-container">
                <button class="btn cancel" onclick="closePopup()">Batal</button>
                <a href="#ketersediaan"><button class="btn check" type="submit">Cek Ketersediaan</button></a>
            </div>
        </div>
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
        function openPopup() {
            document.getElementById('popup').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('overlay').style.display = 'none';
        }
    </script>
</body>
</html>
</x-app-layout>
