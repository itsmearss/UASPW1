<?php 
$conn = mysqli_connect("localhost", "root", "", "uaspw");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function registrasi($data){
    global $conn;

    $longname = $data["longname"];
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["confirm"]);

    //cek duplicate username
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah terdaftar');
                </script>";
        return false;
    }

    //cek konfirmasi password
    if ($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai');
                </script>";
        return false;
    }

    //enkripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO user VALUES('', '$longname', '$username', '$password')");

    return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM komentar WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function komentar($komentar) {
    global $conn;

    $nama = $komentar["nama"];
    $deskripsi = $komentar["desk"];

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO komentar VALUES('', '$nama', '$deskripsi', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['foto']['name'];
    $tmpName = $_FILES['foto']['tmp_name'];
    $error = $_FILES['foto']['error'];
    

    //cek aakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
        alert('tidak ada gambar yang diupload');
        document.location.href = 'smart.php';
        </script>";
        return false;
    }

    //cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('upload file gambar!');
                document.location.href = 'smart.php';
                </script>";
        return false;
    }

    move_uploaded_file($tmpName, 'moment/'.$namaFile);

    return $namaFile;

    
}

function tambah($data){
    global $conn;

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];

    $query = "INSERT INTO contactme(nama,email,pesan)
                VALUES('$nama', '$email', '$pesan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"]; 
    $nama = $data["nama"];
    $deskripsi = $data["desk"];

    $query = "UPDATE komentar SET nama = '$nama', deskripsi='$deskripsi' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>