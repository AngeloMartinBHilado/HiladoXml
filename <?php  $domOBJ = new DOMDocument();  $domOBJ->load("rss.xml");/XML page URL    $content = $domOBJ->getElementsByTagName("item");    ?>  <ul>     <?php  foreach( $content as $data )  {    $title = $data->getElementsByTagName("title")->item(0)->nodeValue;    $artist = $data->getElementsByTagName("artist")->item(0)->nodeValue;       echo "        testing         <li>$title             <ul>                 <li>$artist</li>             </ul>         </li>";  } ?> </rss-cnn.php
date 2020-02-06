<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("rss.xml");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $artist = $data->getElementsByTagName("artist")->item(0)->nodeValue;
  
   echo "
       testing
        <li>$title
            <ul>
                <li>$artist</li>
            </ul>
        </li>";
 }
?>
</ul>
© 2020 GitHub, Inc.
