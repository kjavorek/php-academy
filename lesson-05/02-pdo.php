<?php
header('Content-Type: text/plain');

if(!isset($_GET['id'])){}

$dsn='mysql:host=localhost;dbname=academy;charset=utf8';
$username='root';
$password='';

try{
    $conn=new PDO($dsn, $username, $password);
}catch(PDOException $e){
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}
$sql='SELECT * FROM `attendee`WHERE id= ' . $_GET ['id'];
echo 'SQL: ' . $sql . PHP_EOL;

$stmt=$conn->query($sql);

echo "Result: ";
print_r($stmt->fetchAll());

//while($row=$stmt->fetch()){
//    print $row['id']."\t";
//    print $row['name']."\t";
//    print $row['email']."\n";
//}


