<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas 1 PHP</title>
</head>

<body>

<div class="container px-3 my-5">
<div class="p-3 bg-primary d-grid text-center text-light">
<h4>FORM DATA PEGAWAI</h4>
</div>
    <form class="pt-5" id="contactForm" method="POST">
        <div class="form-floating mb-3">
            <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="nama"/>
            <label for="namaPegawai">Nama Pegawai</label>
            <div class="invalid-feedback" data-sb-feedback="namaPegawai:required">Nama Pegawai is required.</div>
        </div>
        <div class="form-floating mb-3">
            <select class="form-select" id="agama" aria-label="Agama" name="agama">
                <option value="Pilih Agama">Pilih Agama</option>
                <label for="agama">Agama</label>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Katolik">Katolik</option>
            </select>
            <label for="agama">Agama</label>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Jabatan</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="manager" type="radio" name="jabatan" data-sb-validations="" value="Manager" />
                <label class="form-check-label" for="manager">Manager</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="asisten" type="radio" name="jabatan" data-sb-validations="" value="Asisten" />
                <label class="form-check-label" for="asisten">Asisten</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="kabag" type="radio" name="jabatan" data-sb-validations="" value="Kabag" />
                <label class="form-check-label" for="kabag">Kabag</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" id="staff" type="radio" name="jabatan" data-sb-validations="" value="Staff" />
                <label class="form-check-label" for="staff">Staff</label>
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label d-block">Status</label>
            <div class="form-check">
                <input class="form-check-input" id="menikah" type="radio" name="status" data-sb-validations="required" value="Sudah_Menikah" />
                <label class="form-check-label" for="menikah">Menikah</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" id="belumMenikah" type="radio" name="status" data-sb-validations="required" value="Belom_Menikah" />
                <label class="form-check-label" for="belumMenikah">Belum Menikah</label>
            </div>
        </div>
        <div class="form-floating mb-3">
            <input class="form-control" id="namaPegawai" type="text" placeholder="Nama Pegawai" data-sb-validations="required" name="jml_anak"/>
            <label for="namaPegawai">Jumlah Anak</label>
        </div>
        <div class="d-grid">
            <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Simpan</button>
        </div>
    </form>

    <?php
    //Tangkap request
    $nama = $_POST['nama'];
    $agama = $_POST['agama'];
    $jabatan = $_POST['jabatan'];
    $status = $_POST['status'];
    $jmlanak = $_POST['jml_anak'];
    $tombol = $_POST['proses'];
    ?>
        <div class="table-responsive">
        <table align="center" cellpadding="10" border="1" width="100%" >
            <thead>
                <tr class=" bg-primary text-light">
                    <th>No.</th>
                    <th>Nama Pegawai</th>
                    <th>Agama</th>
                    <th>Jabatan</th>
                    <th>Status</th>
                    <th>Jumlah Anak</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Jabatan</th>
                    <th>Tunjangan Keluarga</th>
                    <th>Gaji Kotor</th>
                    <th>Zakat Profesi</th>
                    <th>Take Home Pay</th>
                </tr>
            </thead>
    <?php

    //tentukan gapok
    switch($jabatan){
        case 'Manager': $gaji = 20000000; break;
        case 'Asisten': $gaji = 15000000; break;
        case 'Kabag'  : $gaji = 10000000; break;
        case 'Staff'  : $gaji = 4000000; break;
        default: $gaji = 0;
    }

    //tentukan tunjab
    $tunjab = $gaji * 0.2;

    //tentukan tunkel
    if ($status == 'Sudah Menikah' && $jml_anak <= 2) $tunkel = $gaji * 0.05;
        else if ($status == 'Sudah_Menikah' && $jml_anak >3 && $jml_anak <=5) $tunkel = $gaji * 0.1;
        else if ($status == 'Sudah_Menikah' && $jml_anak <= 2) $tunkel = $gaji * 0.05;
        else if ($status == 'Sudah_Menikah' && $jml_anak >5) $tunkel = $gaji * 0.15;
        else if ($status == 'Belom_Menikah') $tunkel = 0;
        else $status = '';

    //tentukan gator
    $gator = $gaji + $tunjab + $tunkel;

    //tentukan zaprof
    $zakat = ($agama == "Islam" && $gator >= 6000000) ? 0.025 * $gator : 0;

    //tentukan take home pay
    $thpay = $gator - $zakat;

    ?>
            <tbody>
            <tr align='center'>
                <td>1</td>
                <td><?php echo $nama ?></td>
                <td><?php echo $agama ?></td>
                <td><?php echo $jabatan ?></td>
                <td><?php echo $status ?></td>
                <td><?php echo $jmlanak ?></td>
                <td><?php echo 'Rp.', number_format($gaji, 2, ',', '.'); ?></td>
                <td><?php echo 'Rp.', number_format($tunjab, 2, ',', '.'); ?></td>
                <td><?php echo 'Rp.', number_format($tunkel, 2, ',', '.'); ?></td>
                <td><?php echo 'Rp.', number_format($gator, 2, ',', '.'); ?></td>
                <td><?php echo 'Rp.', number_format($zakat, 2, ',', '.'); ?></td>
                <td><?php echo 'Rp.', number_format($thpay, 2, ',', '.'); ?></td>
            </tr>
        </tbody>
        </table>
        </div>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
</body>

</html>
