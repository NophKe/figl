<html>




<?php


$servername = "localhost";
$username = "id6765069_user";
$password = "8WPTJV4HTCMT74KT2FYQ";
$database = "id6765069_commentr";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = htmlspecialchars($_POST['email']); 
$email = addslashes($email);

$pseudo = htmlspecialchars($_POST['pseudo']);
$pseudo = addslashes($pseudo);

$message = htmlspecialchars($_POST['message']); 
$message = addslashes($message);

$page = $_POST['page'];

$sql = "INSERT INTO _01 (email, pseudo, texte, page)
VALUES ('$email', '$pseudo', '$message', '$page') ";


if (mysqli_query($conn, $sql)) {
    echo "Votre participation a été enregistrée... ";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);

?>

<input type="button" value="Retour" onClick="document.location.href = document.referrer" />

</html>
