<h1>BAR blade file to work with all pages</h1>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="/">{{config('app.name')}}</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/services">services</a></li>
        <li><a href="/post">Post Data</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/post/create">Create Post</a>
        </li>

      </ul>
    </div>
  </nav>
