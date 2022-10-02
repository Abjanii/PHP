<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 PHP | Asep Sahrudin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center py-4">Daftar Pegawai</h1>
    <!-- first table -->
  <table>
  <tbody>
<?php
require 'Tugas4.php';

// ciptakan object
$data1 = new Pegawai('202010011', 'Muhammad Afjani', 'Manager', 'Islam', 'Menikah');
$data2 = new Pegawai('202010012', 'Nadia', 'Asmen', 'Islam', 'Menikah');
$data3 = new Pegawai('202010013', 'Albertus', 'Kabag', 'Khatolik', 'Menikah');
$data4 = new Pegawai('202010031', 'Dita', 'Kabag', 'Hindu', 'Lajang');
$data5 = new Pegawai('202010045', 'Ardhian', 'Staff', 'Islam', 'Menikah');

$data_pegawai = [$data1, $data2, $data3, $data4, $data5];

echo '<b><u>'.Pegawai::PEGAWAI.'</u></b>';
?>
<?php
foreach($data_pegawai as $dp){
    ?>

      <tr><th><?= $dp->mencetak()?></th></tr>
    <?php
}
echo '<br /><p class="mb-3">Jumlah Pegawai: '.Pegawai::$total.'</p>';
?>
</tbody>
 <!-- last table -->
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
