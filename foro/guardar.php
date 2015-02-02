<?php
if($_POST["nick"] == ''){
   echo '<font color="#ff0000">Pon un nombre de usuario</font>';
   $escribir = $guardar;
}
elseif($_POST["texto"] == ''){
   echo '<font color="#ff0000">Escribe un texto</font>';
   $escribir = $guardar;
}
else {
   $sql = "INSERT into foro (autor,mensaje,foro) VALUES ('".$_POST["nick"]."','".$_POST["texto"]."','".$guardar."')";
   mysql_query($sql,$db);
   $foro = $guardar;
}
?>