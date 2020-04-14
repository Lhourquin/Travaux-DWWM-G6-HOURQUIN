<?php
include_once './elements/head.php';
include_once './elements/footer.php';

head();
?>
<?php
            if(isset($_GET['empty'])){
                if($_GET['empty'] == true){
                    ?>
                    <div class="alert alert-danger" role="alert">
                        Ces champs ne peuvent pas être vides.
                    </div>
                    <?php
                }
            }
        ?>
        <?php
        if(isset($_GET['existe'])){
            if($_GET['existe'] == true){
                ?>
                <div class="alert alert-danger" role="alert">
                    La marque et le modele existent déja.
                </div>
                <?php
            }
        }
        ?>
<form method="post" action="gererMesBien.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
    
  </div>
  <div class="form-group">
  <div class="form-group col-md-6">
  Ajouter une image : 
     <button><i class="far fa-images"></i></button>
    </div>
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-group ">
  <div>
  <label for="description">Description</label>

  </div>
   <textarea name="description" id="description" cols="100" rows="10"></textarea>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="price">Price</label>
      <input type="number" class="form-control" id="price">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>
<?php
footer();
?>