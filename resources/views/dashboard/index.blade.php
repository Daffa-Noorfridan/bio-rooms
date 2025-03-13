
<x-app-layout>
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
                        <th>Nama Ruangan</th>
                        <th>Mulai</th>
                        <th>Selesai</th>
                        <th>Durasi</th>
                        <th>Uraian</th>
                        <th>Jumlah Peserta</th>
                        <th>Kapasitas Ruangan</th>
                        <th>Add On</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   <?php
                    function hitungDurasi($mulai, $akhir) {
                        $start = new DateTime($mulai);
                        $end = new DateTime($akhir);
                        $diff = $start->diff($end);
                        return $diff->h . " Jam " . $diff->i . " Menit";
                    }
                   ?>
                    @foreach ($booking as $bkg)
                            <div id="edit-data" class="overlay" onclick="closeEditData()"></div>
                            <form id="jadwalkan-rapat" action="/update.php" method="post">
                                <div id="popup-edit" class="popup">
                                    <h2>Edit Info Rapat</h2><br>
                                    <label class="label-popup" for="tanggal">Pesan Untuk Tanggal <span style="color: red;">*</span></label>
                                    <input type="date" id="tanggal" name="tanggal"  value="{{ $bkg->tanggal }}" required><br>
                                    <label class="label-popup" for="jam_mulai">Jam Mulai <span style="color: red;">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam Selesai <span style="color: red;">*</span></label>
                                    <input type="time" id="jam_mulai" name="jam_mulai" required value="{{ $bkg->jam_mulai }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" id="jam_selesai" name="jam_selesai"required value="{{ $bkg->jam_akhir }}">
                                    <label class="label-popup" for="topik">Topik yang Akan Dibahas <span style="color: red;">*</span></label>
                                    <input type="text" id="topik" name="topik" value="{{$bkg->topik}}" required><br>
                                    <label class="label-popup" for="ruangan">Lokasi Ruangan <span style="color: red;">*</span></label>
                                    <select name="ruangan" id="ruangan" required>
                                        @foreach ($ruangan as $rgn)
                                            <option value="{{ $rgn->id }}">{{$rgn->id ." | ". $rgn->nama_ruangan ." | ".$rgn->lokasi}}</option>
                                        @endforeach
                                    </select><br><br>
                                    <label class="label-popup" for="angka">Jumlah peserta  <span style="color: red;">*</span></label>
                                    <input type="number" id="angka" name="angka" min="1" value="{{ $bkg->jumlah_peserta }}" required oninput="updateMax()"><br>
                                    <label class="label-popup" for="pic">PIC <span style="color: red;">*</span></label>
                                    <select name="pic" id="pic" required>
                                        @foreach ($users as $pic)
                                            <option value="{{ $pic->id }}">{{$pic->id ." | ". $pic->name ." | ". $pic->email}}</option>
                                        @endforeach
                                    </select><br><br>
                                    <label class="label-popup" for="addon">Add-On (Optional)</label>
                                    <select name="addons" id="addons" required>
                                        <option value="">{{ $bkg->id_addons }}</option>
                                        @foreach ($addons as $ao)
                                            <option value="{{ $ao->id }}">{{$ao->id ." | ". $ao->nama_addons}}</option>
                                        @endforeach
                                    </select><br><br>
                                    <div class="button-container">
                                        <button class="btn cancel" onclick="closeEditData()">Batal</button>
                                        <button class="btn check" type="submit">Cek Ketersediaan</button>
                                    </div>
                                </div>
                            </form>
                            <tr>
                                <?php
                                        $nama_ruangan = "-";
                                        $kapasitas = 0;
                                        $lokasi="-";
                                        foreach ($ruangan as $r) {
                                            if ($r['id'] == $bkg['id_ruangan']) {
                                                $nama_ruangan = $r['nama_ruangan'];
                                                $kapasitas = $r['kapasitas'];
                                                $lokasi=$r['lokasi'];
                                                break;
                                            }
                                        
                                    }
                                ?>
                                <td>{{ htmlspecialchars($nama_ruangan) }}<br><small>{{ htmlspecialchars($lokasi) }}</small></td>
                                <td>{{ htmlspecialchars($bkg->jam_mulai) }}<br>{{ htmlspecialchars($bkg->tanggal) }}</td>
                                <td>{{ htmlspecialchars($bkg->jam_akhir )}}<br>{{ htmlspecialchars($bkg->tanggal) }}</td>
                                <td>{{ htmlspecialchars( hitungDurasi($bkg->jam_mulai, $bkg->jam_akhir)) }}</td>
                                <td>{{ htmlspecialchars($bkg->topik) }}</td>
                                <td>{{ $bkg->jumlah_peserta }}</td>
                                <td>{{ htmlspecialchars($kapasitas) }}</td>
                                <?php
                                foreach ($addons as $a){
                                    if ($a['id'] == $bkg['id_addons']) {
                                        $nama_addons = $a['nama_addons'];
                                        break;
                                    }
                                }
                                ?>
                                <td>{{ htmlspecialchars($nama_addons) }}</td>
                                <td><a href="#edit-data" class="view-link" onclick="openEditData()">edit</a></td>
                            </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div id="overlay" class="overlay" onclick="closePopup()"></div>
        <form id="jadwalkan-rapat" action="/simpan.php" method="post">
            <div id="popup" class="popup">
                <h2>Pesan Ruang Rapat</h2><br>
                <label class="label-popup" for="tanggal">Pesan Untuk Tanggal <span style="color: red;">*</span></label>
                <input type="date" id="tanggal" name="tanggal"  value="2020-03-20" required><br>
                <label class="label-popup" for="jam_mulai">Jam Mulai <span style="color: red;">*</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jam Selesai <span style="color: red;">*</span></label>
                <input type="time" id="jam_mulai" name="jam_mulai" required value="09:00">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" id="jam_selesai" name="jam_selesai"required value="10:30">
                <label class="label-popup" for="topik">Topik yang Akan Dibahas <span style="color: red;">*</span></label>
                <input type="text" id="topik" name="topik" placeholder="Masukkan topik" required><br>
                <label class="label-popup" for="ruangan">Lokasi Ruangan <span style="color: red;">*</span></label>
                <select name="ruangan" id="ruangan" required>
                    @foreach ($ruangan as $rgn)
                        <option value="{{ $rgn->id }}">{{$rgn->id ." | ". $rgn->nama_ruangan ." | ".$rgn->lokasi}}</option>
                    @endforeach
                </select><br><br>
                <label class="label-popup" for="angka">Jumlah peserta  <span style="color: red;">*</span></label>
                <input type="number" id="angka" name="angka" min="1" value="10" required oninput="updateMax()"><br>
                <label class="label-popup" for="pic">PIC <span style="color: red;">*</span></label>
                <select name="pic" id="pic" required>
                    @foreach ($users as $pic)
                        <option value="{{ $pic->id }}">{{$pic->id ." | ". $pic->name ." | ". $pic->email}}</option>
                    @endforeach
                </select><br><br>
                <label class="label-popup" for="addon">Add-On (Optional)</label>
                <select name="addons" id="addons" required>
                    <option value="">Tidak ada Addons</option>
                    @foreach ($addons as $ao)
                        <option value="{{ $ao->id }}">{{$ao->id ." | ". $ao->nama_addons}}</option>
                    @endforeach
                </select><br><br>
                <div class="button-container">
                    <button class="btn cancel" onclick="closePopup()">Batal</button>
                    <button class="btn check" type="submit">Cek Ketersediaan</button>
                </div>
            </div>
        </form>
        
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
        function updateMax() {
            const ipt = document.getElementById('ruangan');
            input.max = ipt.value;
        }
        function openEditData() {
            document.getElementById('popup-edit').style.display = 'block';
            document.getElementById('edit-data').style.display = 'block';
        }

        function closeEditData() {
            document.getElementById('popup-edit').style.display = 'none';
            document.getElementById('edit-data').style.display = 'none';
        }
        

        const editButtons = document.querySelectorAll('.view-link');
        const modal = document.getElementById('popup-edit');
        const closeModal = document.getElementById('closeModal');
        editButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const row = button.closest('tr');
                const cells = row.querySelectorAll('td');
                document.getElementById('edit-ruangan').textContent = cells[0].textContent;
                document.getElementById('edit-jam_mulai').textContent = cells[1].textContent;
                document.getElementById('edit-jam_selesai').textContent = cells[2].textContent;
               // document.getElementById('durasi').textContent = cells[3].textContent;
                document.getElementById('edit-topik').textContent = cells[4].textContent;
                document.getElementById('edit_angka').textContent = cells[5].textContent;
                //document.getElementById('kapasitas_Ruangan').textContent = cells[6].textContent;
                document.getElementById('edit-addon').textContent = cells[7].textContent;
            });
        });
    </script>
</body>
</html>
</x-app-layout>
