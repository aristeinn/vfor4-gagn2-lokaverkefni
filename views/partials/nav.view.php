<?php $username = Session::read("name"); ?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/homepage">Movies</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="/homepage">Rent movie</a></li>
      <li><a href="/addmovie">Add movie</a></li>
      <li><a href="/updatemovie">Update movie</a></li>
      <li><a href="/deletemovie">Delete movie</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="/karfa">Karfa</a></li>
      <li><a href=""><?= $username; ?></a></li>
      <li><a href="/">Logout</a></li>
    </ul>
  </div>
</nav>

