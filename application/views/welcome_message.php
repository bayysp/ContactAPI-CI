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

        <table border="1px">
            <tr>
                <td>No</td>
                <td>ID</td>
                <td>Nama</td>
                <td>Nomor</td>
                <td>Action</td>
            </tr>
            <?php
            $no = 1;
            foreach ($kontak as $data) {
                ?>

                <tr>
                    <td><?php echo $no; $no++; ?></td>
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->nama; ?></td>
                    <td><?php echo $data->nomor; ?></td>
                    <td><a href="<?php echo base_url('index.php/kontak/index_delete?id=').$data->id; ?>">Hapus</a> <br> <br>
                    <a href="<?php echo base_url('index.php/kontak/index_put?id=').$data->id; ?>">Edit</a></td>
                </tr>

            <?php } ?>
        </table>

    </center>
</body>

</html>