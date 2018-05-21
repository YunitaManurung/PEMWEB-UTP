<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style type="text/css">
	@import  "style.css"
</style>
</head>
<body>
<div class="container">

<header>
   <title>Order - Shiny Shop</title>
   <h1>Shiny Shop</h1>
</header>
<ul>
  <li><a href="main.html">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Jenis Sepatu</a>
    <div class="dropdown-content">
      <a href="adidas.html">Adidas</a>
      <a href="nike.html">Nike</a>
    </div>
  </li>
  <li><a href="order.html" class="active">Order</a></li>
</ul>

<article>
  <h1>Order Barang</h1>
  <form id="form1" name="form1" method="post">
  <table>
  <tr>
    <td>Silakan masukkan form dibawah ini :</td>
  </tr>
  <tr>
    <td>nama lengkap anda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= </td>
	<td><input type="text" name="nama" placeholder="Nama Lengkap Anda..."/></td>
  </tr>
  <tr>
    <td>Alamat anda &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= </td>
	<td><input type="textarea" name="alamat" placeholder="Alamat anda"/></td>
  </tr>
  <tr>
    <td>Nomor Handphone anda yang bisa dihubungi &nbsp;= </td>
	<td><input type="text" name="nope" placeholder="Nomor Telepon Anda"/></td>
  </tr>
  <tr>
    <td>Sepatu yang anda ingin order &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;= </td>
	<td>
      <select name="sepatu">
        <option value="Adidas Zero Knite 2.0">Adidas Zero Knite 2.0</option>
        <option value="Adidas Superstar">Adidas Superstar</option>
        <option value="Adidas Neo Cacity ART AW4974">Adidas Neo Cacity ART AW4974</option>
        <option value="Adidas CC Cosmic Boost">Adidas CC Cosmic Boost</option>
        <option value="Adidas Leather Brown">Adidas Leather Brown</option>
        <option value="Nike Flyknit Racer">Nike Flyknit Racer</option>
        <option value="Nike Airmax High">Nike Airmax High</option>
        <option value="Nike MAG MCFly">Nike MAG MCFly</option>
        <option value="Nike Air Force 1">Nike Air Force 1</option>
        <option value="Nike Zoom Vapor">Nike Zoom Vapor</option>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><button type="submit" name = "submit" value="submit">ORDER NOW!</button></td>
  </tr>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "shinyshop";
  
  if (isset($_POST['submit'])){
    try {
	  $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $nope = $_POST['nope'];
      $sepatu = $_POST['sepatu'];
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "INSERT INTO pesanan VALUES ('$nama', '$alamat', '$nope', '$sepatu')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "Data telah Tersimpan";
    }
    catch(PDOException $e)
    {
      echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
  }
?>
  </table>
  </form>
</article>

<footer></footer>

</div>
</body>
</html>