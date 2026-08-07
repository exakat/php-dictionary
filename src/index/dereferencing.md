# Dereferencing
Dereferencing is the action to access a value, which is referenced with a pointer. Since PHP has no pointer, dereferencing applies to accessing an element in an array or an object. 

Dereferencing is also possible to function and methods calls: when a function returns an array or an object, it is possible to immediately access one of the element by using the array or method syntax.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dereferencing.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dereferencing.html","name":"Dereferencing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Dereferencing is the action to access a value, which is referenced with a pointer","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dereferencing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Dereferencing"}]}]}</script>
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

+ [Functions](function.html)
+ [Array, []](array.html)
+ [Object](object.html)
+ [Function Subscripting](function-subscripting.html)
