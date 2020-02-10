<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://hilado-xml-pipeline.herokuapp.com/rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("Title");
?>

 <h1>Books</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
     $author = $data->getElementsByTagName("Author")->item(0)->nodeValue;
     $genre = $data->getElementsByTagName("Genre")->item(0)->nodeValue;
     $dpub = $data->getElementsByTagName("dpub")->item(0)->nodeValue;
     echo "<ul>
            <h2>$title</h2>
              <ul>
                  <li>Author: $artist </li>
                  <li>Genre: $genre </li>
                  <li>Date Published: $dpub </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
