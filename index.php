<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://firstappanj.herokuapp.com//rss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("Books");
?>

 <h1>Books</h1>

 <?php
 foreach( $content as $data )
 {?>
     <div class="border">
     <?php
     $Title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
     $Author = $data->getElementsByTagName("Author")->item(0)->nodeValue;
     $Genre = $data->getElementsByTagName("Genre")->item(0)->nodeValue;
     $Date = $data->getElementsByTagName("Date")->item(0)->nodeValue;
     echo "<ul>
            <h2>$Title</h2>
              <ul>
                  <li>Author: $Author </li>
                  <li>Genre: $Genre </li>
                  <li>Date Published: $Date </li>
              </ul>
          </ul>";
    ?>
     </div>
  <?php
 }
?>
</div>
</div>
