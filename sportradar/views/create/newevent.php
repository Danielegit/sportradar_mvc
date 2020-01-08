<?php 
  $category = Category::$categories; 
  $team = Team::$team; 
  $categ_id = Category::$category_id; 
?>

<h2 class="text-center p-4">Create A New <?= $_GET['method'] ?> Event</h2>

<div class="row"> 

  <div class="my-2 col-8">
    <form action="/sportradar/newevent/save" method="POST" class="container">
        <input type="hidden" name="category" value="<?= $categ_id->id; ?>" >
      <div class="row">
          <div class="form-group col-6">
            <label>Team One</label>
              <select name="teamOne" class="form-control">
                <?php foreach ($team as $key => $value): ?>
                  <option value="<?=$value['id'];?>"><?=$value['team']; ?></option>
                <?php endforeach ?>
              </select>
          </div>
          <div class="form-group col-6">
            <label>Team Two</label>
              <select name="teamTwo" class="form-control">
                <?php foreach ($team as $key => $value): ?>
                  <option value="<?=$value['id'];?>"><?=$value['team']; ?></option>
                <?php endforeach ?>
              </select>
          </div>
      </div>

      <div class="form-group">
          <label>Date</label>
          <input type="datetime-local" class="form-control" name="date" required>
      </div>
      
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

  <div class="my-2 col-4 border">
    <h4>Change Sport Category</h4>
    <?php foreach ($category as $key => $value): ?>
      <a href="/sportradar/event/<?= $value['category_name'] ?>" >
        <p><?= $value['category_name'] ?></p>
      </a>
    <?php endforeach; ?>
  </div>
  
</div>