<?php
//array scalar mahasiswa
$m1 = ['nim' => '202010011','nama' => 'Afjani','nilai' => '90'];
$m2 = ['nim' => '202010012','nama' => 'Nadia','nilai' => '89'];
$m3 = ['nim' => '202010013','nama' => 'Shakilla','nilai' => '80'];
$m4 = ['nim' => '202010014','nama' => 'Dafi','nilai' => '78'];
$m5 = ['nim' => '202010015','nama' => 'Fatih','nilai' => '81'];
$m6 = ['nim' => '202010016','nama' => 'Dendy','nilai' => '40'];
$m7 = ['nim' => '202010017','nama' => 'Vika','nilai' => '87'];
$m8 = ['nim' => '202010018','nama' => 'Icha','nilai' => '84'];
$m9 = ['nim' => '202010019','nama' => 'Husein','nilai' => '79'];
$m10 = ['nim' => '202010020','nama' => 'Hassan','nilai' => '68'];
$m11 = ['nim' => '202010021','nama' => 'Haifa','nilai' => '88'];
$m12 = ['nim' => '202010022','nama' => 'Maulana','nilai' => '48'];
$m13 = ['nim' => '202010023','nama' => 'Somad','nilai' => '69'];
$m14 = ['nim' => '202010024','nama' => 'Umar','nilai' => '55'];
$m15 = ['nim' => '202010025','nama' => 'Ali','nilai' => '20'];

//array mahasiswa
$mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10,$m11,$m12,$m13,$m14,$m15];
//array judul
$ar_nilai = ['No','Nim','Nama','Nilai','Keterangan','Grade','Predikat'];
//keterangan
$keterangan = ($mahasiswa ['nilai'] >= 60)? "Lulus":"Gagal";
//menentukan grade nilai
if($mahasiswa ['nilai'] >= 85 && $mahasiswa['nilai'] <= 100) $grade = 'A';
else if($mahasiswa ['nilai'] >= 75 && $mahasiswa['nilai'] <= 85) $grade = 'B';
else if($mahasiswa ['nilai'] >= 60 && $mahasiswa['nilai'] <= 75) $grade = 'C';
else if($mahasiswa ['nilai'] >= 30 && $mahasiswa['nilai'] <= 60) $grade = 'D';
else if($mahasiswa ['nilai'] >= 0 && $mahasiswa['nilai'] <= 30) $grade = 'E';
else $grade = '';
//menentukan predikat
switch ($grade) {
    case 'A': $predikat = 'Memuaskan'; break;
    case 'B': $predikat = 'Baik'; break;
    case 'C': $predikat = 'Cukup'; break;
    case 'D': $predikat = 'Kurang Baik'; break;
    case 'E': $predikat = 'Buruk'; break;
    default: $predikat = '';
}
//aggregate function in array
$jumlah_mahasiswa = count($mahasiswa);
$jumlah_nilai = array_column($mahasiswa, 'nilai');
$total_nilai = array_sum($jumlah_nilai);
$nilai_tertinggi = max($jumlah_nilai);
$nilai_terrendah = min($jumlah_nilai);
$rata2 = $total_nilai / $jumlah_mahasiswa;
//result
$result = ['Jumlah Mahasiswa' => $jumlah_mahasiswa,
'Jumlah Nilai' => $jumlah_nilai,
'Nilai Tertinggi' => $nilai_tertinggi,
'Nilai Terendah' => $nilai_terrendah,
'Rata-Rata Nilai' => $rata2
];
?>


<!doctype html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Belajar Array</title>
        <!-- LINK CSS -->
        <link rel="stylesheet" href="tugas3.css"
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <h3>Nilai Mahasiswa</h3>
    <table class="tabel">
        <thead>
            <tr>
                <?php
                foreach($ar_nilai as $nilai){
                ?>
                <th><?= $nilai ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach($mahasiswa as $mhs){
            ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $mhs['nim'] ?></td>
                <td><?= $mhs['nama'] ?></td>
                <td><?= $mhs['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
            </tr>
            <?php $no++; } ?>
        </tbody>
        <tfoot>
            <?php
            foreach($result as $rest => $hasil){
            ?>
            <tr>
                <th colspan="7"><?= $rest ?></th>
                <th><?= $hasil ?></th>
            </tr>
            <?php } ?>
        </tfoot>
    </table>
</body>
</html>
