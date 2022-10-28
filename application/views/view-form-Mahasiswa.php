<html>

<head>
    <title>D-lemas</title>
    <style>
        .con{
            border: 1px solid rgba(0, 0, 0, 0.5);
            border-radius: 20px;
            
            padding: 12px;
            width: fit-content;
            margin: 20px auto;
            background-color: #fff;
        }

        .con:hover{
            transform: translateX(5px) translateY(-5px);
            
            box-shadow: -5px 5px 5px rgba(0, 0,0,0.5);
        }
        body{
            background-color: cyan;
        }
        .footer{
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="con">
        <h1>D-LEMAS</h1>
        <form action="<?= base_url('Mahasiswa/cetak'); ?>" method="post"> 
            <table>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="kelas">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal lahir</td>
                    <td>:</td>
                    <td>
                        <input type="date" name="tgl" id="tgl">
                    </td>
                </tr>
                <tr>
                    <td>Tempat lahir</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="tempat" id="tempat">
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                   <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="katolik">Katolik</option>
                            <option value="budha">Budha</option>
                            <option value="hindu">Hindu</option>
                            <option value="protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="" selected>PILIH</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><button type="reset">Reset</button></td>
                    <td></td>
                    <td align="right">
                        <button type="submit">Confirm</button>
                    </td>
                </tr>
            </table>
</form>
    </div>
    <div class="footer">Copyright &copy; 1999. TegarAndryn</div>
    
</body>
</html>