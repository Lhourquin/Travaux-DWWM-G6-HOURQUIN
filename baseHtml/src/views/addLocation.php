<?php
include_once './elements/head.php';
include_once './elements/footer.php';

head();
?>
<form  action="insertionDataLocation.php"  method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" placeholder="Title">
    </div>

  </div>
  <div class="form-group">
  <div class="form-group col-md-6">
  Ajouter une image : 
     <button><i class="far fa-images"></i></button>
    </div>
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="piece">Nombre de piece</label>
    <input type="number" class="form-control" id="piece" name="piece">
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
      <input type="text" class="form-control" name="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" name="inputState" class="form-control">
	<option selected>Choose...</option>
	<option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="price">Price</label>
      <input type="number" class="form-control" name="price">
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
