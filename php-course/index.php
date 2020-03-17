<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="sqlinsert.php" method="post">
      <table>
        <tr>
          <td>NIM : </td>
          <td><input type="text" name="nim" value=""></td>
        </tr>
        <tr>
          <td>Nama : </td>
          <td><input type="text" name="nama" value=""></td>
        </tr>
        <tr>
          <td>Tgl Lahir (dd-mm-yyyy) :</td>
          <td><input type="text" name="tanggal" value=""></td>
        </tr>
        <tr>
          <td>Jenis Kelamin :</td>
          <td>Laki-Laki<input type="radio" name="laki" value="laki">
              Perempuan<input type="radio" name="per" value="perempuan"></td>
        </tr>
        <tr>
          <td>Alamat di Bandung : </td>
          <td> <textarea name="alamat" rows="10" cols="40"></textarea></td>
        </tr>
        <tr>
          <td>Tinggal di : </td>
          <td><select class="" name="opsi">
              <option value="kos">Kos/Kontrakan</option> <br>
              <option value="rmsaudara">Rumah Saudara</option> <br>
              <option value="rmorangtua">Rumah Orang Tua</option> <br>
          </select></td>
        </tr>
        <tr>
          <td>Pilih Hobi yang disukai : </td>
          <td><input type="checkbox" name="radio1" value="science"> Science <br>
              <input type="checkbox" name="radio1" value="tech"> Technology <br>
              <input type="checkbox" name="radio1" value="art"> Art <br>
              <input type="checkbox" name="radio1" value="sport"> Sport <br></td>
        </tr>
        <tr>
          <td><input type="submit" name="submit" value="submit">
              <input type="submit" name="reset" value="reset"></td>
        </tr>
      </table>

    </form>
  </body>
</html>
