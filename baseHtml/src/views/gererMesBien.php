<?php
include_once './elements/head.php';
include_once './elements/footer.php';
require '../config/config.php';
require '../models/connect.php';

head();
$db = connection();

/*
 * Verification si les champs sont vides
 */

if (empty($_POST['title']) 
    || empty($_POST['inputAddress'])
    || empty($_POST['inputAddress2']) 
    || empty($_POST['description'])
    || empty($_POST['inputCity'])
    || empty($_POST['inputState'])
    || empty($_POST['price'])) {
    header('Location: ../../index.php?empty=true');
}

if (isset($_POST['title']) 
|| isset($_POST['inputAddress'])
|| isset($_POST['inputAddress2']) 
|| isset($_POST['description'])
|| isset($_POST['inputCity'])
|| isset($_POST['inputState'])
|| isset($_POST['price'])) {

    /* protection des insertions et création des variables permetant de stocker
    * les donées reçues de index.php
    */
    $title = htmlspecialchars(trim($_POST['title']));
    $inputAddress = htmlspecialchars(trim($_POST['inputAddress']));
    $inputAddress2 = htmlspecialchars(trim($_POST['inputAddress2']));
    $description = htmlspecialchars(trim($_POST['description']));
    $inputCity = htmlspecialchars(trim($_POST['inputCity']));
    $inputState = htmlspecialchars(trim($_POST['inputState']));
    $price = htmlspecialchars(trim($_POST['price']));

}
/*
 * Vérification si la marque et le model existe déja
 */

$sqlModelExiste = "SELECT COUNT(*) as nb
                            FROM projet_immo
                            INNER JOIN title ON projet_immo.idLocation = marque.idMarque
                            INNER JOIN modele ON vehicule.modele_idModele = modele.idModele
                            WHERE modele.nomModele =:modx
                            AND marque.nomMarque =:marx";
$reqVerif = $db->prepare($sqlModelExiste);
$reqVerif->bindParam(":marx", $marque);
$reqVerif->bindParam(":modx", $model);
$reqVerif->execute();

$nb = $reqVerif->fetchObject();

if ($nb->nb == 0) {

    /* dans un 1er temps il faut ajouter les données reçues dans ma base de données
    * requetes insert
    * D'abord je procède à l'insertion dans les tables qui n'ont pas de clefs étrangéres
    */


    /*
     * j'ajoute la marque dans ma base de données
     */
    $insertMarqueSql = "INSERT INTO marque (nomMarque) VALUES (:isertmarque)";
    $reqMarque = $db->prepare($insertMarqueSql);
    $reqMarque->bindParam(':isertmarque', $marque);
    $reqMarque->execute();

    $lastInsertIdMarque = $db->lastInsertId();

    /*
    * j'ajoute le modele dans ma base de données
    */
    $insertModelSql = "INSERT INTO modele (nomModele) VALUES (:insertModele)";
    $reqModele = $db->prepare($insertModelSql);
    $reqModele->bindParam(':insertModele', $model);
    $reqModele->execute();

    $lastInsertIdModele = $db->lastInsertId();


    $insertVoitureSql = "INSERT INTO vehicule (modele_idModele, marque_idMarque) 
                        VALUES ($lastInsertIdMarque, $lastInsertIdModele)";
    $req = $db->prepare($insertVoitureSql);
    $req->execute();


// requetes Select de tous les vehicules, marques et models

    $selectVoiture = "SELECT * 
                      FROM vehicule 
                      INNER JOIN modele ON vehicule.modele_idModele = modele.idModele 
                      INNER JOIN marque ON vehicule.marque_idMarque = marque.idMarque
                      ";

    $reqVehicule = $db->prepare($selectVoiture);
    $reqVehicule->execute();

    /*
     * Je crée un tableau qui me permettera de stocker les resultats de la requete précedente
     */
    $listeVehicules = array();

    /*
     * tant qu'il y a des resultats dans ma recherche, je les mets dans mon tableau listeVehicules
     */
    while ($data = $reqVehicule->fetchObject()) {
        array_push($listeVehicules, $data);
    }


    

?>
<table class="table">
  <caption>List of Location</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name of Location</th>
      <th scope="col">Description of Location</th>
      <th scope="col">Price of Location</th>
      <th scope="col">Remove Location</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>La cabane au fond du jardin</td>
      <td><button>modifier</button></td>
      <td><input type="number" value="130000"></td>
      <td class="text-center"><i class="fas fa-times"></i></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>C'est une maison bleue...</td>
      <td><button>modifier</button></td>
      <td><input type="number" value="350"> </td>
      <td class="text-center"><i class="fas fa-times"></i></td>

    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Petite maison "de caractère"</td>
      <td><button>modifier</button></td>
      <td><input type="number" value="1800000"></td>
      <td class="text-center"><i class="fas fa-times"></i></td>
    </tr>
  </tbody>
</table>
<?php
footer();
