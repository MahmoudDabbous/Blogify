<?php require_once(view_path() . 'components/header.component.php') ?>
<?php require_once(view_path() . 'components/navbar.component.php') ?>

<div class="container py-1 ps-5 mt-4 rounded box-shadow bg-dark text-bg-dark">
  <div class="row align-items-center">
    <h1 class="col-10"><?= $heading ?></h1>
    <div class="col-auto ms-auto border-0 p-3">
      <a href="/posts/create" class="btn btn-lg btn-outline-primary border-0">Create a Post</a>
    </div>
  </div>
</div>

<?php foreach ($posts as $post) : ?>
  <div class="container mt-4 rounded box-shadow py-1 ps-4 bg-dark">
    <div class="card text-bg-dark border-0 col-12 m-auto">
      <div class="card-body">
        <h2 class="card-title"><a href="/post?id=<?= $post['id'] ?>" class="link-light text-decoration-none"><?= trim(htmlspecialchars($post['title'])) ?></a></h2>
      </div>

      <div class="card-footer ms-auto border-0 p-1">
        <a href="#" class="btn btn-lg border-0 btn-outline-warning">Edit</a>
        <form class="d-inline" method="POST">
          <input type="hidden" name="id" value="<?= $post['id'] ?>">
          <button type="submit" class="btn btn-lg border-0 btn-outline-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<?php require_once(view_path() . 'components/footer.component.php') ?>