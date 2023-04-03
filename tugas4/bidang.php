<?php
class Bidang
{
    public $nama;
    public $nilai1;
    public $nilai2;
    public $luas;

    function __construct($nama, $nilai1, $nilai2)
    {
        $this->nama = $nama;
        $this->nilai1 = $nilai1;
        $this->nilai2 = $nilai2;
    }
    function luas($nama)
    {
        switch ($nama) {
            case "segitiga":
                $luas = $this->nilai1 * $this->nilai2 / 2;
                break;
            case "persegi panjang":
                $luas = $this->nilai1 * $this->nilai2;
                break;
            case "lingkaran":
                $luas = pow($this->nilai1, 2) * 3.14;
                break;
        }
        return $luas;
    }
    function cetak()
    {
        print_r("<tr>  
                    <td>" . $this->nama . "</td>
                    <td>" . $this->luas($this->nama) . "</td>
                </tr>");
    }
}

?>
<table>
    <thead>
        <tr>
            <th>Nama Bidang</th>
            <th>Luas</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $b1 = new Bidang("lingkaran", 15, 15);
        $b2 = new Bidang("lingkaran", 7, 7);
        $b3 = new Bidang("persegi panjang", 25, 30);
        $b4 = new Bidang("persegi panjang", 20, 20);
        $b5 = new Bidang("segitiga", 9, 8);
        $b6 = new Bidang("segitiga", 12, 23);

        $b1->cetak();
        $b2->cetak();
        $b3->cetak();
        $b4->cetak();
        $b5->cetak();
        $b6->cetak();
        ?>
    </tbody>
</table>