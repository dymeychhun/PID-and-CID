<div class="container-fluid sticky-top bg-light border-bottom shadow-sm">
    <nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="assets/img/windows.png" width="32" alt=""> Microsoft</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 text-white">
        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'index') ? 'active' : '' ;?>" aria-current="page" href="/"><i class="bi bi-house-door-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'pidms') ? 'active' : '' ;?>" href="pidms.php"><i class="bi bi-shield-fill-check"></i> Check key</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($filename == 'download') ? 'active' : '' ; ?>" href="#"><i class="bi bi-database-fill-down"></i> Download</a>
        </li>
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>
</div>