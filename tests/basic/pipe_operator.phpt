--TEST--
Pipe operator
--FILE--
<?php

function incr($x) {
  return $x + 1;
}

function sqr($x) {
  return $x ** 2;
}

function foo($y) {
  return fn($x) => $x ** 3;
}

function bar($x, $y) {
  return $x - $y;
}

print 3
  |> incr
  |> sqr
  |> (foo("nothing"))
  |> bar(1)
  |> (fn($x) => $x / 2.3)
  |> abs
. PHP_EOL;
?>
--EXPECT--
1780.4347826087
