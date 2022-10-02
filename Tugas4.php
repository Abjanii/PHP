<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 4 PHP | Asep Sahrudin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body >

    <!-- first table -->
    <div class="table-responsive">
    <table class="table table-hover table-bordered text-center">
    <!-- header table -->
    <thead>
      <tr bgcolor="#06283D" class="text-light">
        <?php
        $table_title = ['NIP', 'NAMA', 'JABATAN', 'AGAMA', 'STATUS', 'GAJI POKOK', 'TUNJANGAN JABATAN', 'TUNJANGAN KELUARGA' , 'ZAKAT' , 'GAJI KOTOR', 'TAKE HOME PAY'];
        foreach($table_title as $tt){
            ?>
        <th><?= $tt?></th>
       <?php }
        ?>
      </tr>
    </thead>
    <!-- last header -->
    <tbody>

    <!-- my php script -->
<?php
    // class pegawai
    class Pegawai{
        public $nip;
        public $nama;
        public $jabatan;
        public $agama;
        public $status;

        static $total = 0;
        const PEGAWAI = 'PT NURUL FIKRI CIPTA INOVASI';

        // member constuctror
        public function __construct($nip, $nama, $jabatan, $agama, $status){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
            $this->brutto;
            self::$total++;
        }

        // fungsi perhitungan gaji pokok
        public function setGapok(){
            switch ($this->jabatan) {
                case 'Manager': $gapok = 15000000; break;
                case 'Asmen': $gapok = 10000000; break;
                case 'Kabag': $gapok = 7000000; break;
                case 'Staff': $gapok = 4000000; break;
                default: $gapok = 0; break;
            }
            return $gapok;
        }

        // fungsi tunjangan jabatan
        public function setTunjab(){
            return $tunjab = $this->setGapok() * 0.2;
        }

        // fungsi tunjangan keluarga
        public function setTunkel(){
            return $tunkel = $this->status == 'Menikah' ? $this->setGapok() * 0.1 : 0;
        }

        // fungsi gaji kotor
        public function brutto(){
            return $this->brutto = $this->setGapok() + $this->setTunjab() + $this->setTunkel();
        }

        // fungsi zakat profesi
        public function setZakatProfesi(){
            $zakat = 0;
            if ($this->agama == 'Islam' && $this->brutto() >= 6000000) {
                $zakat = $this->setGapok() * 0.025;
            } else {
                $zakat = 0;
            }
            return $zakat;
        }

        // fungsi take home pay / gaji bersih yang dibawa kerumah
        public function setThPay(){
            return  $tHPay = $this->setGapok() - $this->setZakatProfesi();
        }

        // fungsi cetak
        public function mencetak(){
            // data buat ditampilkan ke table
            $table_title = [
                'NIP'=>$this->nip,
                'NAMA'=>$this->nama,
                'JABATAN'=>$this->jabatan,
                'AGAMA'=>$this->agama,
                'STATUS'=>$this->status,
                'GAJI POKOK'=>'Rp. '.number_format($this->setGapok(), 2, ',', '. '),
                'TUNJANGAN JABATAN'=>'Rp. '.number_format($this->setTunjab(), 2, ',', '. '),
                'TUNJANGAN KELUARGA'=>'Rp. '.number_format($this->setTunkel(), 2, ',', '. '),
                'ZAKAT'=>'Rp. '.number_format($this->setZakatProfesi(), 2, ',', '. '),
                'GAJI KOTOR'=>'Rp. '.number_format($this->brutto(), 2, ',', '. '),
                'TAKE HOME PAY'=>'Rp. '.number_format($this->setThPay(), 2, ',', '. ')
            ];

            ?>
            <tr>
            <?php

            foreach($table_title as $tbt => $this->hasil){
                ?>
                    <th><?= $this->hasil ?></th>

                <?php
            }
           ?>
        <?php }
    }
?>
</tr>
</tbody>

</div>
<!-- last table -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
