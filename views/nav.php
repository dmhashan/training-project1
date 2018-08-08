<?php

class Nav
{

  function __construct()
  {

    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand" href="home">
      <img src="assets/img/logo.png" height="30" class="d-inline-block align-top" alt="ThinkCube (Pvt) Ltd.">
      </a>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

          <li class="nav-item active">
          <a class="nav-link btn btn-outline-success" href="home">View all</a>
          </li>

          <li class="nav-item active">
          <a class="nav-link btn btn-outline-success" href="newpost">Add Post</a>
          </li>

          <li class="nav-item active">
          <a class="nav-link btn btn-outline-success" href="editpost">Edit Post</a>
          </li>

          </ul>
      </div>

    </nav>';

  }
}
