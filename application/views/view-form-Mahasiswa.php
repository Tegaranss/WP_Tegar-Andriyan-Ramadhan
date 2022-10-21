<html>

<head>
    <tittle>D-lemas</tittle>
</head>

<body>
    <center>
        <form action="<?= base_url('Mahasiswa/cetak'); ?>"
method="post"> 
            <table>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <th>Nama Mahasiswa</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>NIS</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <th>Kelas</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <th>Tanggal lahir</th>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <th>Tempat lahir</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>:</td>
                   <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki<br>
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="">PILIH</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                        </select>
                    </td>
                </tr>
                    <td colspan="3" align="center">
                        <button type="submit">SUBMIT</button>
                    </td>
                </tr>
            </table>
</form>
    </center>
</body>
</html>