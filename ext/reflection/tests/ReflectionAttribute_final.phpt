--TEST--
Check that ReflectionAttribute is final
--FILE--
<?php

class T extends ReflectionAttribute {}

?>
--EXPECTF--
Fatal error: Class T cannot extend final class ReflectionAttribute in %s on line %d
