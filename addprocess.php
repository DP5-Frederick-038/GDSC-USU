<?php
if ($_POST) {
    include 'connect.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $stambuk = $_POST['stambuk'];
    $kom = $_POST['kom'];

    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama', '$kom', '$stambuk')";
    $execQuery = mysqli_query($conn, $query);

    if ($execQuery) {
        echo
        "<script>
        alert('Data berhasil disimpan');
        window.location.href = 'index.php';
        </script>";
    } else {
        echo
        "<script>
        alert('Data gagal disimpan');
        window.location.href = 'add.php';
        </script>";
    }
} else {
    echo "No Access";
}