<?php

function view ($name) {

  include('header.php');
  require("view/$name.view.php");
  include('footer.php');
}