<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pdopost';
$port = 3308;

//set DSN

$dsn = 'mysql:host=' . $host . ';port=' . $port . ';dbname=' . $dbname;
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//unsafe mode
//$author =5;
//$sql = "select * from posts where author= '$author'";

$author = "Clifford";
$is_published = true;
$id = 1;
//Positional parameter

//echo "Fetch multiple posts (Positional parameters)".'<br>';
//
//$sql = "SELECT * FROM POSTS WHERE author = ? && is_published = ? ";
//$stmt = $pdo->prepare($sql);
//$stmt->execute([$author, $is_published]);
//$posts= $stmt->fetchAll();
//foreach ($posts as $post) echo $post->title ."<br>";
//
//echo '<br>';
//echo '<br>';
//
//echo "Fetch multiple posts (named parameters)".'<br>';
//
//$sql = "SELECT * FROM POSTS WHERE author = :author && is_published = :is_published";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(["author" => $author, "is_published"=>$is_published]);
//$posts= $stmt->fetchAll();
//
//foreach ($posts as $post) echo $post->title;
//
//echo '<br>';
//echo '<br>';
//
//echo "Fetch single post (Positional parameters)".'<br>';
//$sql = "SELECT * FROM POSTS WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(["id" => $id]);
//$posts= $stmt->fetch();
//
//echo $posts->body;
//
//echo '<br>';
//echo '<br>';
//
//echo "Get row count".'<br>';
//$sql = "SELECT * FROM POSTS";
//$stmt = $pdo->prepare($sql);
//$stmt->execute();
//$postcount = $stmt->rowCount();
//echo $postcount;

//Insert data
//$title = "C++";
//$body = "C++ Sharp is hard";
//$author = "Matt";
//
//$sql = "INSERT INTO POST (title, body, author) values ( :title, :body, :author)";
//$stmt = $pdo->prepare($sql);
//$proof = $stmt->execute(["title" => $title, "body" => $body, "author" => $author]);
//echo $proof?"Success : Data inserted ":"Failure : Data not inserted";

//Update data
//$id = 1;
//$body = "SQL Server is complex";
//
//$sql = "UPDATE POSTS SET body =:body WHERE id = :id";
//$stmt = $pdo->prepare($sql);
//$proof = $stmt->execute( ["body" => $body, "id" => $id]);
//echo $proof?"Success : Data updated ":"Failure : Data not updated";

//Delete data
//$id = 3;
//$sql = "DELETE FROM POSTS WHERE ID = :id";
//$stmt = $pdo->prepare($sql);
//$proof = $stmt->execute(["id"=>$id]);
//echo $proof?"Success : Data deleted ":"Failure : Data not deleted";

//Delete search data
$wordToSearch="SQL";
$search ='%'.$wordToSearch.'%';
$sql = "SELECT * FROM POSTS WHERE title LIKE :search";
$stmt = $pdo->prepare($sql);
$stmt->execute(['search'=>$search]);
$all = $stmt->fetchAll();
foreach ($all as $el) echo $el->body;
