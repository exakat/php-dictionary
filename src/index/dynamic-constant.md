# Dynamic Constant
A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time. 

Reaching a constant's value is done by using the ``constant()`` function, or the dynamic constant fetch with classes. 

Sometimes, dynamic constants are also called variable constants.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dynamic-constant.html","name":"Dynamic Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A constant is dynamic when its name is in a variable, or another container, and is accessed at execution time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Dynamic Constant.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"dynamic-constant"}]}]}</script>
```php
<?php

const A = 1;
// simple case
$a = 'A';
echo constant($a); // displays 1

// with leading backslash
$b = '\A';
echo constant($b); // displays 1

// definition has no leading backslash
define('B\C', d);
// reading has no leading backslash, or not
$c = '\b\C';
echo constant($c); // displays d
$c = 'b\C';
echo constant($c); // displays d

// constant() works also on class constants.
class D {
    const E = 'f';
}
echo constant('d::E'); // displays f

// dynamic constant access on classes or enumeration
$k = 'E';
echo D::{$k}; // f

// constant works also on enumeration cases
enum I: string {
    case G = 'h';
}
echo constant('I::G')->value; // displays h

// dynamic constant access on classes or enumeration
$g = 'G';
echo I::{$g}->value; // h

?>
```

**[Documentation](https://www.php.net/manual/en/function.constant.php)**
## See Also

+ [All the Dynamic Syntax in PHP](https://www.exakat.io/all-the-dynamic-syntaxes-in-php/)

## Related

+ [Constants](constant.html)
+ [constant()](constant-function.html)
+ [Class Constant Syntax](class-constant-syntax.html)
+ [Static Constant](class-constant.html)
+ [Dynamic](dynamic.html)
