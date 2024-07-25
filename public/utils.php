<?php

// dump and die
function dd( $value ) {
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die();
}
