<?php
  if (isset($_POST["send"])) {
    echo "NIM           : " . $_POST["student_id"] . "</br>";
    echo "Nama          : " . $_POST["name"] . "</br>";
    echo "Jenis Kelamin : " . $_POST["gender"] . "</br>";
    echo "TTL           : " . $_POST["date"] . " - " . $_POST["month"] . " - " . $_POST["year"] . "</br>";
    echo "Tempat Lahir  : " . $_POST["born_location"] . "</br>";
    echo "Jurusan       : " . $_POST["major"] . "</br>";
    echo "Tahun Masuk   : " . $_POST["year_in"] . "</br>";
  } else {
    echo "Nothing was being sent yet </br>";
  }
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h1>Form Mahasiswa</h1>

	<form method="POST">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="number" name="student_id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
          <label for="female">
            <input type="radio" id="female" name="gender" value="Perempuan">
            Perempuan
          </label>
          <label for="male">
            <input type="radio" id="male" name="gender" value="Laki - Laki">
            Laki - Laki
          </label>
				</td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
        <td>
          <select name="date">
           <?php
             for ($i=1;$i<=31;$i++) {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
          </select>
            
          <select name="month">
           <?php
             $bulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1; $i <=12; $i++) {
               echo "<option value=".$bulan[$i].">".$bulan[$i]."</option>";
             }
            ?>
          </select>
          <select name="year">
           <?php
             for ($i=1980; $i<=2000; $i++) {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?>
          </select>
        </td>
			</tr>
			<tr>
				<td>Tempat lahir</td>
				<td><input type="text" name="born_location"></td>
			</tr>
			<tr>
				<td>Jurusan</td>
        <td>
          <select name="major">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
        </select>
        </td>
			</tr>
			<tr >
				<td>Tahun Masuk</td>
        <td>
          <select name="year_in">
            <?php
             for ($i=2000;$i<=2020;$i++) {
               echo "<option value=".$i.">".$i."</option>";
             }
            ?> 
          </select>
        </td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="send"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
