<?php 
    $conn = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234") or die (mysqli_error($conn));
    $db = mysqli_select_db($conn, "db_1820535");

    if(mysqli_connect_errno($conn)){
        echo "Database connection failed!: ". mysqli_connect_errno();
    }
    $sql = "SELECT * FROM tbl_book ORDER BY BookID DESC";
    $q = mysqli_query($conn, $sql);

    header("Content-type: text/xml");

    echo "<?xml version='1.0' encoding='UTF-8'?>
        <rss version='2.0'><channel>";
    
    while($r = mysqli_fetch_array($q)){

        $Title = $r['title'];
        $Genre = $r['genre'];
        $Author = $r['author'];
        $Date = $r['date'];

        echo "<Books>
        <title>$Title</title>
        <genre>$Genre</genre>
        <author>$Author</author>
        <date>$Date</date>
        </Books>";
    }
    echo "</channel></rss>";
?>
