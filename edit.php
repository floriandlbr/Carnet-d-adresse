<!DOCTYPE html>
<html lang="fr">
<header>
	<title>Carnet d'adresse</title>
	<meta charset="UTF-8">
</header>
<body>
	<b>Editer un contact :</b>
	<br>
	<br>
	<b font-color="red">Attention, le nom et le prénom sont obligatoires !!</b>
	<br>
	<br>
	<form action="index.php" method="post">
		<table>
			<tr>
				<th>Nom : </th>
				<td><input type="text" name="nom_edit" value="<?php echo $_POST["nom"];?>"/></td>
			</tr>
			<tr>
				<th>Prénom : </th>
				<td><input type="text" name="prenom_edit" value="<?php echo $_POST["prenom"];?>"/><br></td>
			</tr>
			<tr>
				<th>Téléphone : </th>
				<td><input type="number" name="tel_edit" value="<?php echo $_POST["tel"];?>"/><br></td>
			</tr>
			<tr>
				<th>Rue : </th>
				<td><input type="text" name="rue_edit" value="<?php echo $_POST["rue"];?>"/><br></td>
			</tr>
			<tr>
				<th>Code Postal : </th>
				<td><input type="text" name="codeP_edit" value="<?php echo $_POST["codeP"];?>"/><br></td>
			</tr>
			<tr>
				<th>Ville : </th>
				<td><input type="text" name="ville_edit" value="<?php echo $_POST["ville"];?>"/><br></td>
			</tr>
			<tr>
				<th>Pays : </th>
				<td><input type="text" name="pays_edit" value="<?php echo $_POST["pays"];?>"/><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="hidden" name="id_edit" value="<?php echo $_POST["id"];?>"/><input type="submit" value="Editer" /></td>
			</tr>
		</table>
	</form>
	<a href="index.php">Retour à la liste</a>
</body>
<footer>

</footer>
</html>