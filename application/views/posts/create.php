<h2> <?= $title ?> </h2>
<?php echo validation_errors(); ?>
<?php echo form_open('posts/create'); ?>
<form>
  <div class="form-group">
    <label >title</label>
    <input type="text" class="form-control" name="title" id="" placeholder="title">
  </div>
  <div class="form-group">
    <label >Body</label>
    <textarea class="form-control" name="body" placeholder="add body"></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>