<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Laporan</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
</head>
<body>
 <img src="assets/img/icon.png" style="position: absolute; width: 60px; height: auto;">
  <table style="width: 100%;">
    <tr>
      <td align="center">
        <span style="line-height: 1.6; font-weight: bold;">
          DINAS PERIKANAN DAN KELAUTAN KOTA PEKALONGAN
          <br>SENTRA KULINER KOTA PEKALONGAN
        </span>
        <p style="line-height: 1.0; font: 12px;">Jln. Wr. Supratman No.18, Karangsarirejo, Panjang Wetan, Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51141</p>
      </td>
    </tr>
  </table>

  <hr class="line-title"> 
  <p align="center">
    LAPORAN SLIP PENDAPATAN BULANAN<br>
    <b><?= date('d F Y', $user['tahun']); ?></b>
  </p>
  <table class="table table-bordered">
    <tr>
      <th>Nama</th>
      <th>No Kios</th>
      <th>No Hp</th>
      <th>Pendapatan</th>
    </tr>
      <tr>
        <td><?= $user['nama'];?></td>
        <td><?= $user['nokios'];?></td>
        <td><?= $user['telpon'];?></td>
        <td><?= $user['pendapatan'];?></td>
      </tr>
  </table>

</body>
</html>
