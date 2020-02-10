<?php 
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820535");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_book ORDER BY BookID DESC LIMIT 20";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){

        $title = $r['Title'];
        $genre = $r['Genre'];
        $author = $r['Author'];
        $dpub = $r['Date'];

        echo "<Collection>
        <title>$title</title>
        <genre>$genre</genre>
        <author>$author</author>
        <date>$dpub</date>
        </Collection>";
    }
    echo "</channel></rss>";
?>
