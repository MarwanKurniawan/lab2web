<!DOCTYPE html>
<html lang="id">
<head>
    <title>form data</title>
</head>
<body>
    <h1>Form input data Karyawan</h1>
    <form method="POST" action="hasil.php">
        <table rules="rows">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"</td>
            </tr>
            <tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td><input type="date" name="tgllahir"</td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan"</td>
                </tr>
                
           
        </table>
        <br>
        <button type="submit" name="submit" value="Submit">Proses Data</button>
        <button type="reset" name="reset" value="reset">reset</button>

</body>
</html>