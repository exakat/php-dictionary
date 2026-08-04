# Syntax
Syntax refers to the set of rules that defines the structure of valid PHP code.

For example, there is the object syntax, around the ``->`` and ``::`` operators, and the array syntax, around ``[index]`` operator. 

Syntax must be lintable for a PHP script to be executable. Otherwise, it creates a syntax error. Yet, a lintable syntax does not always mean the code is executable: it may yield an execution error. It is not always obvious which syntax is not executable.
```php
<?php

A = B C; // syntax error, 'C' is not valid. 

clone 1; // not a syntax error

$array = ['a' => 1, 'b' => 2, 'c' => 3];
echo $array['a']; // 1

$object = (object) $array;
echo $object->a; // 1
echo $object['a']; // no syntax error, error at execution

//valid syntax
function foo($x) {
    print $x;
}

//valid call
foo(3);

//invalid call
foo([]);

?>
```

Related : [Syntax Error](Syntax Error), [Constant Expression](Constant Expression), [Pattern Matching](Pattern Matching), [Transpile](Transpile)
