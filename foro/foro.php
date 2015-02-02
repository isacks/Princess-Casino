<table border="1" cellpadding="2" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%" id="AutoNumber1">
<?php 
$sql = "SELECT * FROM foro WHERE foro = '".$foro."' ORDER BY id DESC";
$res=mysql_query($sql,$db);
while ($row=mysql_fetch_array($res)){
$rows = 1;
?><tr>
    <td width="82%" colspan="2"><font face="Verdana" size="2"><b><?php echo $row["autor"]; ?></b><br />
    <?php echo htmlentities($row["mensaje"]); ?><br />
    </font><b><font face="Verdana" size="2">
    <a href="?foro=<?php echo $row["id"]; ?>"><?php
    echo mysql_result(mysql_query("SELECT COUNT(id) FROM foro WHERE foro = '".$row["id"]."'",$db),0);
?> respuestas</a></font></b></td>
  </tr><?php
}
if($rows == ''){ ?><tr>
    <td width="82%" colspan="2"><font face="Verdana" size="2">No hay mensajes en este foro</font></td>
  </tr><?php
}
?><tr>
    <td width="82%" colspan="2"><font face="Verdana" size="2"><b><a href="?escribir=<?php
echo $foro;
?>">Escribir mensaje</a><?php
$arriba = @mysql_result(mysql_query("SELECT foro FROM foro WHERE id = '".$foro."'",$db),0);
if($arriba != '')echo ' | <a href="?foro='.$arriba.'">Volver</a>';
else echo ' | <a href="?foro=">Volver</a>';
?></font></b></td>
  </tr>
</table>
