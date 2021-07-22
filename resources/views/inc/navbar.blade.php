<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container">
      <a class="navbar-brand text-light" href="/">{{config('app.name', 'LSAPP')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item body-bg">
            <a class="nav-link text-light" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="/posts">Blog</a>
          </li>
        </ul>
      </div>
    </div>
</nav>