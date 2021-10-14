<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$negeri = $_POST['negeri'];
$jantina = $_POST['jantina'];

#hobi
if (isset($_POST['membaca'])){
    $membaca = $_POST['membaca'];
} else {
    $membaca = '';
}

if (isset($_POST['berenang'])){
    $berenang = $_POST['berenang'];
} else{
    $berenang = '';
}

if (isset($_POST['melancong'])){
    $melancong = $_POST['melancong'];
} else{
    $melancong = '';
}
/*$membaca = $_POST['membaca'];
$berenang = $_POST['berenang'];
$melancong = $_POST['melancong'];
*/
$gagal = false;
if ($nama == '') {
    $gagal = true;
}

if ($gagal) {
?>
    <script>
        alert('Sila isi lengkap butiran terdahulu');
        window.location = './';
    </script>
<?php
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borang Pendaftaran</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-size: small;
        }
    </style>
</head>

<body>
    <h1>Maklumat Pendaftaran</h1>

    <table>
        <tr>
            <td>Nama:</td>
            <td><?php echo $nama ?></td>
        </tr>
        <tr>
            <td>Alamat:</td>
            <td><?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Negeri:</td>
            <td><?php echo $negeri ?></td>
        </tr>
        <tr>
            <td>Hobi:</td>
            <td><?php echo $membaca, ', ' ,$berenang,', ', $melancong ?></td>
        </tr>
        <tr>
            <td>Jantina:</td>
            <td><?php echo $jantina ?></td>
        </tr>
    </table>

    <a href="index.php">Borang</a>
</body>

</html>
</body>
</html>