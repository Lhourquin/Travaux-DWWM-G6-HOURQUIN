<?php
include_once './elements/head.php';
include_once './elements/footer.php';

head();
require '../../config/config.php';
require '../../models/connect.php';

$dbb = connection();

$pdoStatee = $dbb->prepare('INSERT INTO home_location VALUES(NULL,:nomLocation,:descLocation,:priceLocation,:adressLocation,:pieceLocation,:regionLocation)');

$pdoStatee->bindValue(':nomLocation', $_POST['title'], PDO::PARAM_STR);
$pdoStatee->bindValue(':descLocation', $_POST['description'], PDO::PARAM_STR);
$pdoStatee->bindValue(':priceLocation', $_POST['price'], PDO::PARAM_INT);
$pdoStatee->bindValue(':adressLocation', $_POST['inputAddress'], PDO::PARAM_STR);
$pdoStatee->bindValue(':pieceLocation', $_POST['piece'], PDO::PARAM_INT);
$pdoStatee->bindValue(':regionLocation', $_POST['inputCity'], PDO::PARAM_STR);

$insertIsOkk = $pdoStatee->execute();

if($insertIsOkk){
    $messagee = 'data ajouter a la bdd';
} else{
    $messagee = "error";
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
    <p><?php echo $messagee ?></p>
</body>
</html>
<?php
footer();
?>