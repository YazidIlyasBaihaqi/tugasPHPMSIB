<!DOCTYPE html>

<html>

<head>

    <title>Daftar Nilai Mahasiswa</title>
    <style>
        table,
        tr,
        td,
        th {
            align-items: center;
            width: 40%;
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,
        th {
            padding: 5px;
        }
    </style>
</head>

<body>

    <h3>Daftar Mahasiswa</h3>

    <table align="center" width="40%">

        <thead>

            <tr>

                <?php
                $judul = ['no', 'nim', 'nama', 'nilai', 'keterangan', 'grade', 'predikat'];
                //looping array judul kolom: no, nim, nama, nilai, keterangan, grade, predikat	
                foreach ($judul as $kolom) {
                    echo "<th> $kolom </th>";
                }
                ?>

            </tr>

        </thead>

        <tbody>

            <?php

            /*

				1. cetak no urut menggunakan konsep increment dalam looping dikolom ke-1
				2. buat array scalar 5 buah:
                   nim, nama, nilai (data bebas)
				3. buat array associative untuk menghimpun ke-5 data mahasiswa di atas
				4. tentukan kelulusan dari mahasiswa dengan kriteria lulus minimal nilai 60
				   di kolom keterangan (gunakan ternary dan array column)
				5. tentukan grade dari nilai dengan kriteria:
				   A: 85 - 100, B: 75 - <85, C: 60 - <75, D: 30 - <60, E:0 - <30
				   (if multi kondisi & operator logic and) di kolom grade
				6. Tentukan predikat dari grade dengan kriteria:
				   A: Memuaskan, B: Bagus, C: Cukup, D: Kurang, E:Buruk
				   (switch case) di kolom Predikat
				7. Beri warna-warni untuk baris genap & ganjil
                8. Pada TFoot buat aggregrate function array untuk menentukan:
                   Jumlah Siswa, Nilai Tertinggi, Nilai Terendah, Nilai Rata2
				*/
            $data_mahasiswa = [
                ['nim' => 111, 'nama' => 'Ahmad', 'nilai' => 100],
                ['nim' => 112, 'nama' => 'Idan', 'nilai' => 70],
                ['nim' => 113, 'nama' => 'Selly', 'nilai' => 65],
                ['nim' => 114, 'nama' => 'Siti', 'nilai' => 88],
                ['nim' => 115, 'nama' => 'Nur', 'nilai' => 90],
                ['nim' => 116, 'nama' => 'Ilman', 'nilai' => 40],
                ['nim' => 117, 'nama' => 'Lutfi', 'nilai' => 25],
            ];
            $x = 0;
            foreach ($data_mahasiswa as $value) {
                $warna = (($x % 2) == 0) ? "blue" : "yellow";
                $x++;
                if ($value["nilai"] > 85 && $value["nilai"] <= 100) {
                    $grade = "A";
                } elseif ($value["nilai"] > 75 && $value["nilai"] <= 85) {
                    $grade = "B";
                } elseif ($value["nilai"] > 60 && $value["nilai"] <= 75) {
                    $grade = "C";
                } elseif ($value["nilai"] > 30 && $value["nilai"] <= 60) {
                    $grade = "D";
                } else {
                    $grade = "E";
                }
                switch ($grade) {
                    case "A":
                        $predikat = "Memuaskan";
                        break;
                    case "B":
                        $predikat = "Bagus";
                        break;
                    case "C":
                        $predikat = "Cukup";
                        break;
                    case "D":
                        $predikat = "Kurang";
                        break;
                    case "E":
                        $predikat = "Buruk";
                        break;
                }
            ?>
                <tr bgcolor=<?= $warna ?>>
                    <td><?= $x ?></td>
                    <td><?= $value['nim'] ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['nilai'] ?></td>
                    <td><?= ($value['nama'] >= 60) ? 'lulus' : 'tidak lulus' ?></td>
                    <td><?= $grade ?></td>
                    <td><?= $predikat ?></td>
                </tr>
            <?php
            }
            ?>

        </tbody>

    </table>

</body>

</html>