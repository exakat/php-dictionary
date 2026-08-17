# Object Syntax
The object syntax is a coding style that involves using the object operator ``->``, and, to a lesser extend, the static operator ``::``.

Object syntax is often opposed to the array syntax, which relies on arrays and the square brackets ``[ ]``: it uses string index as properties and functions instead of methods.

Object syntax is also opposed to ``resource``: some PHP extensions produce resources, which are usually feed as first argument into dedicated functions. The object syntax hides the resource in an object, and makes use of method calls, with similar names and parameters.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-syntax.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-syntax.html","name":"Object Syntax","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:03:26 +0000","dateModified":"Fri, 14 Aug 2026 08:03:26 +0000","description":"The object syntax is a coding style that involves using the object operator ->, and, to a lesser extend, the static operator ::","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Object Syntax.html"]}],"keywords":["object"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.php"},{"@type":"CreativeWork","name":"Basic Class Definitions","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"object-syntax"}]}]}</script>
```php
<?php

    $object = new Stdclass();
    $object->property = 1;
    echo $object->property;

?>
```

**[Documentation](https://www.php.net/manual/en/language.oop5.php)**
## See Also

+ [Basic Class Definitions](https://www.php.net/manual/en/language.oop5.basic.php)

## Related

+ [Array Syntax](array-syntax.html)
+ [resource](resource.html)
