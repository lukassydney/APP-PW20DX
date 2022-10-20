<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Mahasiswa</title>

    <!-- import file "style.css" -->
    <link rel="stylesheet" href="<?php echo base_url("ext/style.css"); ?>">
</head>

<body>
    <!-- Bagian menu / Tombol -->
    <nav>

    </nav>
    <!-- Bagian Tabel -->
    <table>
        <!-- Judul Tabel -->
        <thead>
            <tr>
                <th style="width: 5%;">No.</th>
                <th style="width: 10%;">NPM</th>
                <th style="width: 30%;">Nama</th>
                <th style="width: 15%;">Telepon</th>
                <th style="width: 15%;">Jurusan</th>
                <th style="width: 15%;">Foto</th>
                <th style="width: 10%;">Status</th>
            </tr>
        </thead>
        <!-- Isi Tabel-->
        <tbody>
            <!-- Awal Looping -->
            <?php
            // Nilai awal "No."
            $no = 1;
            foreach ($hasil as $record) {
                // jika status = 1
                if ($record->status == "1") {
                    $status = "Aktif";
                }
                // jika status = 0
                else {
                    $status = "Pasif";
                }

            ?>
                <tr <?php if ($record->status == "1") { ?>class="bg_putih" <?php } else { ?> class="bg_ungu" <?php } ?>>
                    <td style="text-align: center;"><?php echo $no; ?></td>
                    <td style="text-align: justify;"><?php echo $record->npm ?></td>
                    <td style="text-align: justify;"><?php echo $record->nama ?></td>
                    <td style="text-align: justify;"><?php echo $record->telepon ?></td>
                    <td style="text-align: center;"><?php echo $record->jurusan ?></td>
                    <td style="text-align: center;"><?php echo $record->foto ?></td>
                    <td style="text-align: center;"><?php echo $status; ?></td>
                </tr>
                <!-- Akhir Looping -->
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>