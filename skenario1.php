<?php
$grade = "";
if (isset($_POST["nilai"])) { //nilai yg dimasukkan kena proses
    $nilai = $_POST["nilai"] + 0;
    if ($nilai >= 90) $grade = "A";
    else if ($nilai >= 80) $grade = "B";
    else if ($nilai >= 70) $grade = "C";
    else $grade = "D"; //dapet d kocak si
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKENArio 1</title>
</head>
<body>
    <form method="post">
        <label for="nilai">Masukkan nilai (0-100):</label>
        <input type="number" name="nilai" id="nilai" min="0" max="100" required> <!--input nilai-->
        <button type="submit">Submit</button> <!--tombol submit-->
    </form>
    
    <?php if ($grade !== "") { ?>
        <p>Nilai <?php echo $nilai; ?> = <?php echo $grade; ?></p> <!--konfrensinya yh-->
    <?php } ?>
</body>
</html>
