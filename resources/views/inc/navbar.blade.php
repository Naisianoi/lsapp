<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">{{config('app.name')}}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbar" class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li><a href="/posts">Blog</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/posts/create">Create Post</a></li>
        </ul>
      </div>
    </div>
  </nav>