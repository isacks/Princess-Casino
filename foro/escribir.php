<form method="POST" action="?guardar=<?php echo $escribir; ?>">
  <p><b><font size="2" face="Verdana">Nick:<br />
  </font></b><font face="Verdana"><b><input type="text" name="nick" size="20" value="<?php echo $_POST['nick']; ?>"/></b></font></p>
  <p><b><font face="Verdana" size="2">Texto:<br />
  <textarea rows="6" name="texto" cols="62"><?php echo $_POST["texto"]; ?></textarea></font></b></p>
  <p><input type="Submit" value="Enviar" /></p>
</form>