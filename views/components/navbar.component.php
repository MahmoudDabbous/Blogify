<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <span class="navbar-brand">Blogify</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ps-3 me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/') ? 'active' : '' ?>" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/post') ? 'active' : '' ?>" aria-current="page" href="/posts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= urlIs('/about') ? 'active' : '' ?>" aria-current="page" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?=  urlIs('/contact') ? 'active' : '' ?>" aria-current="page" href="/contact">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>