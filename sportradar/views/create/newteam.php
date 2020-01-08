<?php $category = Category::$categories; ?>


<h1 class="text-center">CREATE A NEW TEAM</h1>
<div class="my-2">
<form action="newteam/save" method="POST" class="container">
  <div class="form-group">
    <label>Category</label>
      <select name="category" class="form-control">
        <?php foreach ($category as $key => $value): ?>
          <option value="<?= $value['id']?>">
            <?= $value['category_name'] ?>
          </option>
        <?php endforeach; ?>
      </select>
  </div>
  <div class="form-group">
    <label>Team Name</label>
    <input type="text" class="form-control" name="team_name" >
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

