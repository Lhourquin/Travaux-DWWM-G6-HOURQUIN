<?php
include_once './elements/head.php';
include_once './elements/footer.php';

head();
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
