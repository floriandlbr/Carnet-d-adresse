<!DOCTYPE html>
<html lang="fr">
<header>
	<title>Carnet d'adresse</title>
	<meta charset="UTF-8">
</header>
<body>
<b>Ajouter un nouveau contact :</b>
	<br>
	<br>
	<form action="index.php" method="post">
		<table>
			<tr>
				<th>Nom : </th>
				<td><input type="text" name="nom"/></td>
			</tr>
			<tr>
				<th>Prénom : </th>
				<td><input type="text" name="prenom"/><br></td>
			</tr>
			<tr>
				<th>Téléphone : </th>
				<td><input type="number" name="tel"/><br></td>
			</tr>
			<tr>
				<th>Rue : </th>
				<td><input type="text" name="rue"/><br></td>
			</tr>
			<tr>
				<th>Code Postal : </th>
				<td><input type="text" name="codeP"/><br></td>
			</tr>
			<tr>
				<th>Ville : </th>
				<td><input type="text" name="ville"/><br></td>
			</tr>
			<tr>
				<th>Pays : </th>
				<td><input type="text" name="pays"/><br></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Ajouter" /></td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<a href="index.php">Précédent</a>
</body>
<footer>

</footer>
</html>