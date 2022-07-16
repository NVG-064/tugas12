<?php

require "functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Pencarian</title>
</head>

<body>
  <table cellpadding="12" cellspacing="0" border="1" style="margin-left: auto; margin-right: auto;">
    <tr>
      <th>Hasil Pencarian</th>
    </tr>
    <tr>
      <td>
        <label for="strings">Nilai Max: </label>
        <label for="values" style="font-weight: bold;"><?= compare($_POST['nk1'], $_POST['nk2'], $_POST['nk3']); ?></label>
        <br><br>
        <button type="button" onclick="location.href = 'index.php';" style="margin-left: auto; margin-right: auto;">Kembali ke halaman utama</button>
      </td>
    </tr>
  </table>
</body>

</html>