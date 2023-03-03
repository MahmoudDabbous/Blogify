<?php require_once(view_path() . 'components/header.component.php') ?>
<?php require_once(view_path() . 'components/navbar.component.php') ?>
<?php require_once(view_path() . 'components/breadcrumb.component.php') ?>

<?php if (isset($errors)) require(view_path() . 'components/alert.component.php'); ?>

<form action="/posts/store" method="POST" class="container mt-4 rounded box-shadow py-1 text-bg-dark">
  <div class="mb-3 row-cols-auto">
    <label for="formControlInput1" class="form-label">Post Title</label>
    <input required minlength="6" maxlength="254" type="text" class="form-control" id="formControlInput1" name="title" value="<?= $_POST['title'] ?? '' ?>">
  </div>
  <div class="mb-3 row-cols-auto">
    <label for="formControlTextarea1" class="form-label">Post Content</label>
    <textarea required minlength="6" maxlength="2000" class="form-control" id="formControlTextarea1" rows="3" name="body"><?= $_POST['body'] ?? '' ?></textarea>
  </div>
  <div class="mb-3 row-cols-auto">
    <a href="/posts" class="btn btn-lg border-0 btn-outline-secondary ">Back</a>
    <button type="submit" href="#" class="btn btn-lg border-0 btn-outline-success">Create</button>
  </div>
</form>

<?php require_once(view_path() . 'components/footer.component.php') ?>