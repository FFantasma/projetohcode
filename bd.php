<?php

require_once("inc/configuration.php");

$sql = new Sql();

$result = $sql->query("SELECT * FROM tb_produtos;");

while($row = mysqli_fetch_array($result)){

	var_dump($row);

}

exit;

?>