<html>

<head>
    <tittle>Form Input Matakuliah</tittle>
</head>

<body>
    <center>
        <form action="<?= base_url('mahasiswa/cetak'); ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        LOGIN
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <th>User ID</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>Mahasiswa/Dosen</th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">PILIH</option>
                            <option value="2">Mahasiswa</option>
                            <option value="3">Dosen</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>