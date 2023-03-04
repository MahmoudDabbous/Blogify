<?php require_once(view_path() . 'components/header.component.php') ?>
<?php require_once(view_path() . 'components/navbar.component.php') ?>
<?php require_once(view_path() . 'components/breadcrumb.component.php') ?>


<div class="container mt-4 rounded box-shadow py-1 bg-dark">
  <div class="card text-bg-dark border-0 col-12 m-auto">
    <div class="card-body">
      <h5 class="card-text"><?= trim(htmlspecialchars($post['body'])) ?></h5>
    </div>
    <div class="card-footer ms-auto border-0">
      <a href="/posts" class="btn btn-lg border-0 btn-outline-secondary">Back</a>
      <a href="#" class="btn btn-lg border-0 btn-outline-warning">Edit</a>
      <form class="d-inline" method="POST">
        <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <button type="submit" class="btn btn-lg border-0 btn-outline-danger">Delete</button>
      </form>
    </div>
  </div>
</div>

<?php require_once(view_path() . 'components/footer.component.php') ?>