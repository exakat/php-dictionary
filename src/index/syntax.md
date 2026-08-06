# Syntax
Syntax refers to the set of rules that defines the structure of valid PHP code.

For example, there is the object syntax, around the ``->`` and ``::`` operators, and the array syntax, around ``[index]`` operator. 

Syntax must be lintable for a PHP script to be executable. Otherwise, it creates a syntax error. Yet, a lintable syntax does not always mean the code is executable: it may yield an execution error. It is not always obvious which syntax is not executable.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/syntax.html","name":"Syntax","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:17 +0000","dateModified":"Fri, 19 Jun 2026 21:24:17 +0000","description":"Syntax refers to the set of rules that defines the structure of valid PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Syntax.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/language.basic-syntax.php)**
## Related

+ [Syntax Error](syntax-error.ini.html)
+ [Constant Expression](constant-expression.ini.html)
+ [Pattern Matching](pattern-matching.ini.html)
+ [Transpile](transpile.ini.html)
