
<?php

$dsn = 'pgsql:host=salt.db.elephantsql.com;port=5432;dbname=bimxhbpm';
$user = 'bimxhbpm';
$password = 'XmrTlAKoGxrJQoAmlI_kTl_TrvT9kbvd';

try {
    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die('Failed to connect to the database: ' . $e->getMessage());
}

$name = $_POST['name'];
$password = $_POST['password'];

$query = "SELECT * FROM userplataform WHERE name = :name AND password = :password ";
$stmt = $dbh->prepare($query);
$stmt->bindValue(':name', $name);
$stmt->bindValue(':password', $password);
$stmt->execute();

$result = $stmt->fetch();

if($result != null){
   header('Location: ../public/home/index.html');
}
else{
    echo "<h1>Erro ao fazer login</h1>";
}

?>
