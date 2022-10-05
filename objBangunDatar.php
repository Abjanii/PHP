<?php
require_once 'lingkaran.php';
require_once 'segitiga.php';
require_once 'persegiPanjang.php';

$ar_judul = ['No', 'Nama Bidang', 'Keterangan', 'Luas Bidang', 'Keliling Bidang'];

$lingkaran1 = new Lingkaran(9);
$lingkaran2 = new Lingkaran(17);
$lingkaran3 = new Lingkaran(23);
$lingkaran4 = new Lingkaran(13);
$persegipanjang1 = new PersegiPanjang(10, 5);
$persegipanjang2 = new PersegiPanjang(20, 11);
$persegipanjang3 = new PersegiPanjang(20, 11);
$persegipanjang4 = new PersegiPanjang(20, 11);
$segitiga1 = new Segitiga(12, 19);
$segitiga2 = new Segitiga(9, 13);
$segitiga3 = new Segitiga(9, 13);
$segitiga4 = new Segitiga(9, 13);

$kumpulan_bidang = [$lingkaran1, $lingkaran2, $lingkaran3, $lingkaran4,
$persegipanjang1, $persegipanjang2, $persegipanjang3, $persegipanjang4,
 $segitiga1, $segitiga2, $segitiga3, $segitiga4];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 5 php</title>
</head>

<body>

    <div class="box">
        <span>Tugas 5 PHP</span>
        <br/>
        <br/>
        <h3>Bangun Datar</h3>
        <br/>
        <table>
            <thead>
                <tr>
                    <?php
                    foreach ($ar_judul as $jdl) {
                    ?>
                        <th><?= $jdl ?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($kumpulan_bidang as $b) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $b->namaBidang(); ?></td>
                        <td><?= $b->keterangan(); ?></td>
                        <td><?= $b->luasBidang(); ?></td>
                        <td><?= $b->kelilingBidang(); ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <style>
*{
    margin: 0;
    padding: 0;
    text-align: center;
    justify-content: center;
    font-family: sans-serif;
}

body{
    color: whitesmoke;
    background-color: #2C3639;
}
table {
    font-family: Arial, sans-serif;
    border-collapse: collapse;
    color: #fff;
    width: 100%;
}
th, td {
    font-size: 20px;
    border: 2px solid #fff;
    text-align: center;
    padding: 8px;
    color: #A5C9CA;
}
tr:nth-child(even){
    background-color: var(--bg);
}
th{
    font-size: 25px;
    color: aqua;
}
h3{
    text-align: center;
    font-size: 1.5rem;
}
span{
    font-size: 2.5rem;
}
</style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
