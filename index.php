<?php
main(2, 'abc');

function main($a = 0, $b = 'xyz') {
  if ($a) {
    echo 'yes';
  } else {
    echo $b;
  }
}
