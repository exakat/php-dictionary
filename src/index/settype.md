# settype()
``settype()`` converts a variable to a given type, in place, modifying the variable itself rather than returning a converted copy.

The target type is given as a string, among ``integer``, ``float``, ``string``, ``boolean``, ``array``, ``object`` and ``null``, and PHP applies the same coercion rules as an explicit cast: a numeric string becomes the matching number, an empty array becomes an empty string when cast to string, and so on. The function returns true on success.

``settype()`` is the mutating counterpart of a cast expression: ``(int) $value`` produces a new value without touching ``$value``, while ``settype($value, 'integer')`` changes ``$value`` itself. Because it takes its argument by reference, it cannot be used directly on the result of a function call or an array element accessed through a complex expression.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/settype.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/settype.html","name":"settype()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 25 Sep 2026 18:46:26 +0000","dateModified":"Fri, 25 Sep 2026 18:46:26 +0000","description":"settype() converts a variable to a given type, in place, modifying the variable itself rather than returning a converted copy","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/settype.html"]}],"keywords":["native function","type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettype.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cast.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/var_dump.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.settype.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"settype"}]}]}</script>
```php
<?php

    $value = '42';
    settype($value, 'integer');

    var_dump($value); // int(42)

?>
```

**[Documentation](https://www.php.net/manual/en/function.settype.php)**
## Related

+ [gettype()](gettype.html)
+ [Cast Operator](cast.html)
+ [Type Juggling](type-juggling.html)
+ [var\_dump()](var_dump.html)
