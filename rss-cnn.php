<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("rss.xml");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("item");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $Title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
   $Author = $data->getElementsByTagName("Author")->item(0)->nodeValue;
  
   echo "
       testing
        <li>$Title
            <ul>
                <li>$Author</li>
            </ul>
        </li>";
 }
?>
</ul>
© 2020 GitHub, Inc.
