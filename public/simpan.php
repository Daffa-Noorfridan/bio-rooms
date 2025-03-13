<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'bio-room';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$tanggal = $conn->real_escape_string($_POST['tanggal']);
$jam_mulai = $conn->real_escape_string($_POST['jam_mulai']);
$jam_selesai = $conn->real_escape_string($_POST['jam_selesai']);
$topik = $conn->real_escape_string($_POST['topik']);
$ruangan = $conn->real_escape_string($_POST['ruangan']);;
$jumlah=$conn->real_escape_string($_POST['angka']);
$addon = isset($_POST['addons']) ? $conn->real_escape_string($_POST['addons']) : null;
$addon = !empty($addon) ? "'$addon'" : "NULL";
$pic = isset($_POST['pic']) ? $conn->real_escape_string($_POST['pic']) : "NULL";


if (empty($tanggal) || empty($jam_mulai) || empty($jam_selesai) || empty($topik) || empty($ruangan)) {
    die("Semua bidang wajib diisi.");
}

$query = "INSERT INTO bookings(id, id_ruangan, id_addons, pic, tanggal, jam_mulai, jam_akhir, jumlah_peserta,topik) 
VALUES ('','$ruangan',$addon,$pic,'$tanggal','$jam_mulai','$jam_selesai','$jumlah','$topik')";


if ($conn->query($query)) {
    echo "<script>
        alert('Jadwal rapat baru berhasil disimpan!');
        window.location.href = '/dashboard';
    </script>";
} else {
    echo "<script>
        alert('" .$conn->error."');
        window.location.href = '/dashboard';
    </script>";
}

$conn->close();
?>
