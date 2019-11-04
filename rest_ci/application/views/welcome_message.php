<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POST Contact</title>
</head>

<body>
    <center>
        <table>
            <form action="<?php echo base_url('index.php/kontak/index_post') ?>" method="post">
                <tr>
                    <td>ID</td>
                    <td>:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Nomor</td>
                    <td>:</td>
                    <td><input type="text" name="nomor"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="kirim" value="Simpan"></td>
                </tr>
            </form>
        </table>
        <br>
        <a href="<?php echo base_url('index.php/kontak/index_get') ?>" method="get">Show All Data as JSON</a>
        <a href="<?php echo base_url('index.php/kontak/view_data'); ?>">Show All Data as Tables</a>
    </center>
</body>

</html>