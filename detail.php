<!DOCTYPE html>
<html lang="fr">
<header>
	<title>Carnet d'adresse</title>
	<meta charset="UTF-8">
</header>
<body>
	<b>Détail du contact :</b>
	<table border=1>
<?php 	try {
			$user = 'root';
			$pass = '';
			$dbh = new PDO('mysql:host=localhost;dbname=stage', $user, $pass);
			
			$sql = "SELECT * FROM contact WHERE id = ".$_POST["id"].";";
			$rep = $dbh->query($sql);
			$row = $rep->fetch();
			$dbh = null;
		} catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
?>
		<tr>
			<th>Nom</th>
			<td><?php echo $row["nom"];?></td>
		</tr>
		<tr>
			<th>Prénom</th>
			<td><?php echo $row["prenom"];?></td>
		</tr>
		<tr>
			<th>Téléphone</th>
			<td><?php echo $row["tel"];?></td>
		</tr>
		<tr>
			<th>Rue</th>
			<td><?php echo $row["rue"];?></td>
		</tr>
		<tr>
			<th>Code Postal</th>
			<td><?php echo $row["codeP"];?></td>
		</tr>
		<tr>
			<th>Ville</th>
			<td><?php echo $row["ville"];?></td>
		</tr>
		<tr>
			<th>Pays</th>
			<td><?php echo $row["pays"];?></td>
		</tr>
	</table>
	<br>
	<form action="edit.php" method="post">
		<input type="hidden" name="nom" value="<?php echo $row["nom"];?>"/>
		<input type="hidden" name="prenom" value="<?php echo $row["prenom"];?>"/>
		<input type="hidden" name="tel" value="<?php echo $row["tel"];?>"/>
		<input type="hidden" name="rue" value="<?php echo $row["rue"];?>"/>
		<input type="hidden" name="codeP" value="<?php echo $row["codeP"];?>"/>
		<input type="hidden" name="ville" value="<?php echo $row["ville"];?>"/>
		<input type="hidden" name="pays" value="<?php echo $row["pays"];?>"/>
		<input type="hidden" name="id" value="<?php echo $row["id"];?>"/>
		<input type="submit" value="Editer" />
	</form>
	<br>
	<br>
	<a href="index.php">Précédent</a>
</body>
<footer>

</footer>
</html>