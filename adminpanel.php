<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/adminPanel" method="POST">
        <input type="text" placeholder="Boek toevoegen" name="toevoegen" >
        <input type="text" placeholder="Boek verwijderen">
        <button>Submit</button>
    </form>
</body>
</html>
<?php 
$boekOmToeTeVoegen = $_POST["toevoegen"];
$boekOmTeVerwijderen = $_POST["verwijderen"];

if (isset($boekOmTeVerwijderen)) {
    unset($boekOmTeVerwijderen);
}
?>