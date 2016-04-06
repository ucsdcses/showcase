 <?php
 $ftype = $_REQUEST["ftype"];

 if ($handle = opendir("./assets")) {

     while (false !== ($file = readdir($handle))) {

         $exists = stripos($file,$ftype);
         if($exists !== false){
             echo $file;?>

             <script type="text/javascript" charset="utf-8">
             top.document.getElementById("fnametxt").innerHTML = "<?php echo $file;?>";
             </script>

        <?php }
     }

     closedir($handle);
}
?> 
