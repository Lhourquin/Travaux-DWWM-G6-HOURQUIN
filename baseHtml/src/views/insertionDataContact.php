<?php
include_once './elements/head.php';
include_once './elements/footer.php';

head();
require '../../config/config.php';
require '../../models/connect.php';

$db = connection();

$pdoState = $db->prepare('INSERT INTO contact VALUES(NULL,:mailContact,:adress1Contact,:adress2Contact,:cityContact,:zipContact,:stateContact)');

$pdoState->bindValue(':mailContact', $_POST['email'], PDO::PARAM_STR);
$pdoState->bindValue(':adress1Contact', $_POST['adresse'], PDO::PARAM_STR);
$pdoState->bindValue(':adress2Contact', $_POST['inputAddress2'], PDO::PARAM_STR);
$pdoState->bindValue(':cityContact', $_POST['inputCity'], PDO::PARAM_STR);
$pdoState->bindValue(':zipContact', $_POST['inputZip'], PDO::PARAM_STR);
$pdoState->bindValue(':stateContact', $_POST['inputState'], PDO::PARAM_STR);

$insertIsOk = $pdoState->execute();

if($insertIsOk){
    $message = 'Bravo vous êtres inscrit';
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenue !</h1>
    <p><?php echo $message ?></p>
</body>
</html>
<?php
footer();
?>