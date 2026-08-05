# Dereferencing
Dereferencing is the action to access a value, which is referenced with a pointer. Since PHP has no pointer, dereferencing applies to accessing an element in an array or an object. 

Dereferencing is also possible to function and methods calls: when a function returns an array or an object, it is possible to immediately access one of the element by using the array or method syntax.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dereferencing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dereferencing.ini.html","name":"Dereferencing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Dereferencing is the action to access a value, which is referenced with a pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Dereferencing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$array = ['a', 'b', 'c'];

echo $array['b'];

function foo() {
    return ['x', 'y', 'z'];
}

// Function Array Dereferencing
foo()[2]; // display z

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.array.php)**
## See Also

+ [Function Array Dereferencing (FAD)](https://wiki.php.net/rfc/functionarraydereferencing)
+ [Array Dereferencing in PHP](https://xpertdeveloper.com/php-array-dereferencing/)
+ [Function Array Dereferencing in PHP (example 8)](https://www.php.net/manual/en/language.types.array.php#language.types.array.syntax)

## Related

+ [Functions](function.ini.html)
+ [Array, []](array.ini.html)
+ [Object](object.ini.html)
+ [Function Subscripting](function-subscripting.ini.html)
