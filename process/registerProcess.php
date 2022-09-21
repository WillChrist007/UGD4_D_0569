<?php
// untuk ngecek tombol yang namenya 'register' sudah di pencet atau belum
// $_POST itu method di formnya
if (isset($_POST['register'])) {
    // untuk mengoneksikan dengan database dengan memanggil file db.php
    include('../db.php');
    // tampung nilai yang ada di from ke variabel
    // sesuaikan variabel name yang ada di registerPage.php disetiap input
    $testEmail = $_POST['email'];
    $testPhone = $_POST['phonenum'];
    $result = mysqli_query($con, "SELECT id FROM users WHERE email = '$testEmail' OR phonenum = '$testPhone'") or die (mysqli_error($con));
    if($result->num_rows == 0) {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $name = $_POST['name'];
        $phonenum = $_POST['phonenum'];
        $membership = $_POST['membership'];
    } else {
        //jika ditemukan email yang sama
        echo '
        <script>
        alert("Register Failed (email / phone number already taken)");
        window.location = "../index.php"
        </script>';
    }    
    // Melakukan insert ke databse dengan query dibawah ini
    $query = mysqli_query($con, "INSERT INTO users(email, password, name, phonenum, membership)
    VALUES ('$email', '$password', '$name', '$phonenum', '$membership')")
    or die(mysqli_error($con));
    // perintah mysql yang gagal dijalankan ditangani oleh perintah “or die”
    if ($query) {
        echo
        '<script>
        alert("Register Success");
        window.location = "../index.php"
        </script>';
    } else {
        echo
        '<script>
        alert("Register Failed");
        </script>';
    }
} else {
    echo
    '<script>
    window.history.back()
    </script>';
}
?>