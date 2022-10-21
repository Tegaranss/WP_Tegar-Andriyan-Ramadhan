<html>

<head>
<title>Tampil Data Mahasiswa</title>
</head>
<body>
 <center>
 <table>
 <tr>
 <th colspan="3">
 Tampil Data Mahasiswa
 </th>
 </tr>
 <tr>
 <td colspan="3">
 <hr>
 </td>
 </tr>
 <tr>
 <th>Nama Mahasiswa</th>
 <th>:</th>
 <td>
 <?= $nama; ?>
 </td>
 </tr>
 <tr>
 <td>NIS</td>
 <td>:</td>
 <td>
 <?= $nis; ?>
 </td>
 </tr>
 <tr>
 <td>Kelas</td>
 <td>:</td>
 <td>
 <?= $kelas; ?>
 </td>
 </tr>
 <tr>
 <th>Tanggal lahir</th>
 <th>:</th>
 <td>
 <?= $tgl; ?>
 </td>
 </tr>
 <tr>
 <th>Tempat lahir</th>
 <th>:</th>
 <td>
 <?= $tempat; ?>
 </td>
 </tr>
 <tr>
 <th>Alamat</th>
 <th>:</th>
 <td>
 <?= $alamat; ?>
 </td>
 </tr>
 <tr>
 <th>Jenis Kelamin</th>
 <th>:</th>
 <td>
 <?= $jenis_kelamin; ?>
 </td>
 </tr>
 <tr>
 <th>Agama</th>
 <th>:</th>
 <td>
 <?= $agama; ?> 
 </td>
 </tr>
 <td colspan="3" align="center">
 <a href="<?= base_url('Mahasiswa'); 
?>">Kembali</a>
 </td>

</head>
</html>