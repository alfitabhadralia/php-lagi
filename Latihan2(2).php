<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style=margin-top:50px;>
<form action="proses_get.php" method="" name="">
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama"></td>
    </tr>
    <tr>
        <td>Umur</td>
        <td>:</td>
        <td><input type="text" name="umur"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="textarea" name="alamat"></td>
    </tr>
    <tr>
        <td colspan="3"><input name="tombol" type="submit" value="Simpan" class="btn btn-primary"></td>
    </tr>
</table>
</form>
</div> 
</body>
</html>