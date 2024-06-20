hello

<?php
echo "My first PHP script!";
?>
<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br>";

//phpinfo();


$servername = "db:3306";
$username = "mysql_user";
$password = "mysql_user1!";
$db="demo_db";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_STRINGIFY_FETCHES, false);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  echo "Connected successfully" . "<br>";

  $stmt = $conn->prepare("SELECT * from users;");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  //$data = $stmt->fetchAll();

  while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    var_dump($row);
    echo "<br>";

}
  //echo json_encode($data);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>

