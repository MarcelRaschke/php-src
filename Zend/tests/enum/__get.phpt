--TEST--
Enum __get
--FILE--
<?php

enum Foo {
    case Bar;

    public function __get(string $name)
    {
        return '__get';
    }
}

?>
--EXPECTF--
Fatal error: Enum may not include __get in %s on line %d
