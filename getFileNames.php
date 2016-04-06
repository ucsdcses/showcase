 <?php
 $files = "YESS!!!";
 $ftype = $_REQUEST["ftype"];
 if ($handle = opendir("./projects")) {
     while (false !== ($file = readdir($handle))) {
         $exists = stripos($file,$ftype);
         if($exists !== false){
             $files = $files . "<br>" . $file;
             echo $file;?>

             <script type="text/javascript" charset="utf-8">
             top.document.getElementById("files").innerHTML = "<?php echo $files;?>";
             </script>

<?php }
     }
     closedir($handle);
 }
?> 
