<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form tugas3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>

<body>
    <form method="POST" action="tugas2_process.php">
        <table align="center" border="0" cellspacing="0" cellpadding="10" width="100%">
            <thead bgcolor="grey">
                <tr>
                    <th colspan="2">Form Input Nilai</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <label>Nama :</label>
                    </td>
                    <td>
                        <input type="text" name="nama"></input>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Mata Pelajaran :</label>
                    </td>
                    <td>
                        <select name="matpel">
                            <option disabled>-- Kategori Produk --</option>
                            <option value="IPA">IPA</option>
                            <option value="IPS">IPS</option>
                            <option value="Matematika">Matematika</option>
                            <option value="Fisika">Fisika</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label>Nilai :</label>
                    </td>
                    <td>
                        <input type="number" name="nilai"></input>
                    </td>
                </tr>
            </tbody>

            <tfoot bgcolor="grey">
                <th colspan="2">
                    <input type="submit" name="proses" value="Simpan" align "center"></input>
                </th>
            </tfoot>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>