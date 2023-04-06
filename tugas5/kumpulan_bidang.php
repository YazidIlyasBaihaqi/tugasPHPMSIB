<table>
    <?php
    require_once 'lingkaran.php';
    require_once 'persegiPanjang.php';
    require_once 'segitiga.php';

    $b1 = new Lingkaran("Lingkaran", 5);
    $b2 = new Lingkaran("Lingkaran", 21);
    $b3 = new PersegiPanjang("Persegi Panjang", 10, 12);
    $b4 = new PersegiPanjang("Persegi Panjang", 5, 7);
    $b5 = new Segitiga("Segitiga", 3, 4);
    $b6 = new Segitiga("Segitiga", 6, 8);

    $judul = ["No", "Nama Bidang", "Keterangan", "Luas Bidang", "Keliling Bidang"];
    ?>
    <thead>
        <tr>
            <?php
            foreach ($judul as $kolom) {
                echo "<th> $kolom </th>";
            }
            ?>
        </tr>
    </thead>
    <tbody>
        <?php
        $data = [$b1, $b2, $b3, $b4, $b5, $b6];
        $x = 0;
        foreach ($data as $value) {
            $x++;
            echo ("<tr>
                    <td>" . $x . "</td>
                    <td>" . $value->namaBidang() . " </td>
                    <td>" . $value->keterangan . " </td>
                    <td>" . $value->luasBidang() . " </td>
                    <td>" . $value->kelilingBidang() . " </td>
                </tr>");
        }

        ?>
    </tbody>
</table>