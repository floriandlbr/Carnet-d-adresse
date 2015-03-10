<!DOCTYPE html>
<?php
	if( !empty($_POST["nom_edit"]) && !empty($_POST["prenom_edit"]))
	{
		try {
			$user = 'root';
			$pass = '';
			$dbh = new PDO('mysql:host=localhost;dbname=stage', $user, $pass);
			
			$requete = $dbh->prepare("UPDATE contact SET nom = ? , prenom = ? , tel = ? , rue = ? , codeP = ? , ville = ? , pays = ? WHERE id = ?;");
			$requete->execute(array($_POST["nom_edit"], $_POST["prenom_edit"], $_POST["tel_edit"], $_POST["rue_edit"], $_POST["codeP_edit"], $_POST["ville_edit"], $_POST["pays_edit"], $_POST["id_edit"]));
			$dbh = null;
			header('Location: index.php');
		} catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	if(!empty($_POST["nom"]) && !empty($_POST["prenom"]))
	{
		echo "ok";
		try {
			$user = 'root';
			$pass = '';
			$dbh = new PDO('mysql:host=localhost;dbname=stage', $user, $pass);
			
			$requete = $dbh->prepare("INSERT INTO contact(nom, prenom, tel, rue, codeP, ville, pays) VALUES ( ? , ? , ? , ? , ? , ? , ? );");
			$requete->execute(array($_POST["nom"], $_POST["prenom"], $_POST["tel"], $_POST["rue"], $_POST["codeP"], $_POST["ville"], $_POST["pays"]));
			$dbh = null;
			header('Location: index.php');
		} catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}
	if( !empty($_POST["id_a_supp"])){
		try {
			$user = 'root';
			$pass = '';
			$dbh = new PDO('mysql:host=localhost;dbname=stage', $user, $pass);
			
			$requete = $dbh->prepare("DELETE FROM contact WHERE id = ? ;");
			$requete->execute(array($_POST["id_a_supp"]));
			$dbh = null;
			header('Location: index.php');
		} catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	}
?>
<html lang="fr">
	<header>
		<title>Carnet d'adresse</title>
		<meta charset="UTF-8">
	</header>
	<body>

	<b>Carnet d'adresse</b><br><br>
	<?php
		try {
			$user = 'root';
			$pass = '';
			$dbh = new PDO('mysql:host=localhost;dbname=stage', $user, $pass);
			
			$sql = "SELECT * FROM contact ORDER BY nom;";
			echo("<table border = 1>");
			echo "<tr>";
			echo "	<th width='100'>Nom</th>";
			echo "	<th width='100'>Prenom</th>";
			echo "	<th>-</th>";
			echo "	<th>-</th>";
			echo "<tr>";
			foreach($dbh->query($sql) as $row){
				echo "<tr>";
				echo "	<td>".$row["nom"]."</td>";
				echo "	<td>".$row["prenom"]."</td>";
				echo "	<td><form action='detail.php' method='post'><input type='hidden' name='id' value='".$row["id"]."'><input type='submit' value='Voir'></form></td>";
				echo "	<td><form action='index.php' method='post'><input type='hidden' name='id_a_supp' value='".$row["id"]."'><input type='submit' value='Supprimer'></form></td>";
				echo "<tr>";
			}
			echo("</table>");
			$dbh = null;
		} catch (PDOException $e) {
			echo "Erreur !: " . $e->getMessage() . "<br/>";
			die();
		}
	?>
		<br>
		<input type="button" onclick='window.location.reload(false)' value="Rafraichir"/>
		<br>
		<br>
		<a href="add.php">Ajouter une entrée</a>
	</body>
	<footer>

	</footer>
</html>