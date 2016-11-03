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
$id=1; //not trusted user input
$sql='SELECT * FROM `attendee`WHERE id= :id';
// 1 $sql='SELECT * FROM `attendee`WHERE id=?';

$stmt=$conn->prepare($sql);
$stmt->execute([
    'id'=>$id //, $_GET['id']
        //'ime'=>'nesto'
]); 
// 1 $stmt->execute([$id]); //$stm->execute([$id, $name]);

while($row=$stmt->fetch()){
    print $row['id']."\t";
    print $row['name']."\t";
    print $row['email']."\n";
}



