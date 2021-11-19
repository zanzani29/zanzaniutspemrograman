<html>
 <head>
     <title> Penjumlahan Dengan PHP</title>
</head> 
<body>
    <form method="post">
        <label>Masukan Angka 1</label><br>
        <input type="text"name="a" id="a"><br>
        <label>Masukan Angka 2</label><br>
        <input type="text"name="b" id="b"><br>
        <br>
        <input type="submit"  name="Jumlahkan" id="Jumlahkan" value="Jumlahkan"><br>
    <?php
    if(isset($_POST["Jumlahkan"]) && $_POST["Jumlahkan"]=="Jumlahkan"){
        $a=$_POST["a"];
        $b=$_POST["b"];
        $penjumlahan=$a+$b;
        echo"$penjumlahan";
}
?>
</form>
<body>
<html>