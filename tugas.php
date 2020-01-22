<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengecekan Berat Badan Ideal</title>
</head>
<body>
<form action="rumus.php" method="POST">
    <table>
        <tr>
            <td>Nama Lengkap : </td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Berat Badan : </td>
            <td><input type="number" name="bb"> Kg</td>
        </tr>
        <tr>
            <td>Tinggi Badan : </td>
            <td><input type="number" name="tb"> Cm</td>
        </tr>
        <tr>
            <td>Jenis Kelamin : </td>
            <td><input type="radio" name="jk" value="Laki-laki"> Laki-laki</td>
            <td><input type="radio" name="jk" value="Perempuan"> Perempuan</td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Lihat Kueri">
</form>
    <?php 
    
    ?>
</body>
</html>