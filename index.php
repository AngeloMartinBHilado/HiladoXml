<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://hilado-xml-pipeline.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("track");
?>

 <h1>Tracks</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
     $artist = $data->getElementsByTagName("artist")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("genre")->item(0)->nodeValue;
     $album = $data->getElementsByTagName("album")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Author: $artist </li>
                  <li>Genre: $genre </li>
                  <li>Album: $album </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
