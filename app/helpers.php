<?php

if(! function_exists('isRoute') ) {
  function isRoute($route) {
    return request()->routeIs($route);
  }
}
