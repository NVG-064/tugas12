<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    table tr th {
      background-color: grey;
      color: white;
    }

    table caption {
      font-family: Arial, Helvetica, sans-serif;
      font-weight: bolder;
    }
  </style>

  <title>Nomor 1</title>
</head>

<body>
  <button type="button" onclick="location.href = 'http://tugas12.test/';">Kembali</button>
  <br><br>

  <form action="<?php echo htmlspecialchars("result.php"); ?>" method="POST">
    <table border="1" cellpadding="10" cellspacing="0" style="margin-left: auto; margin-right: auto;">
      <caption>Mencari Nilai Max dari 3 Buah Nilai</caption>
      <tr>
        <td>
          <label>
            Nilai ke-1
            <input type="text" name="nk1" required autocomplete="off" placeholder="contoh 16">
          </label>
          <br><br>
          <label>
            Nilai ke-2
            <input type="text" name="nk2" required autocomplete="off" placeholder="contoh 4">
          </label>
          <br><br>
          <label>
            Nilai ke-3
            <input type="text" name="nk3" required autocomplete="off" placeholder="contoh 69">
          </label>
          <br><br><br>
          <button type="submit" name="createnilai">Temukan</button>
          <button type="reset" name="resetnilai">Reset</button>
        </td>
      </tr>
    </table>
  </form>
</body>

</html>