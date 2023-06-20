<?php
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Studi</title>
</head>

<body>
    <h1>Halaman Prodi</h1>
    <form action="simpan_prodi.php" method="post">
        <table>
            <tr>
                <th>Nama Program Studi</th>
                <td>:</td>
                <td>
                    <input type="text" name="nama_prodi" id="">
                </td>
                <td><button type="submit" name="simpan_prodi" value="klik">Simpan</button></td>
            </tr>
        </table>
    </form>
    <table style="border-collapse: collapse;" border="1">
        <tr>
            <th>ID</th>
            <th>Nama Prodi</th>
            <th>Opsi</th>
        </tr>
        <?php
        foreach (prodi() as $p) : ?>
            <tr>
                <td><?php echo $p["id"] ?></td>
                <td><?php echo $p["nama_prodi"] ?></td>
                <td>
                    <a href="edit.php">Edit</a>
                    <a href="hapus.php?id=<?= $p["id"]; ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach;
        ?>
    </table>

</body>

</html>