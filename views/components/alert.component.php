<div class="container mt-4 rounded py-1 alert alert-danger" role="alert">
  <?php foreach ($errors as $key => $value) : ?>
    <li class="list-unstyled">
      <?= $value ?>
    </li>
  <?php endforeach; ?>
</div>