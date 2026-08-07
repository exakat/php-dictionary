# Writable
Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties, given the correct visibility, static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/writable.html","name":"Writable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:15 +0000","dateModified":"Fri, 19 Jun 2026 21:25:15 +0000","description":"Something is writable when a new value may be assigned to it, in the correct context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Writable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Writable"}]}]}</script>
```php
<?php

$x = 3;
$y = $x + 4;

// syntax error
// new x = 3;

?>
```

**[Documentation](https://www.php.net/manual/en/function.is-writable.php)**
## Related

+ [Visibility](visibility.html)
+ [Variables](variable.html)
+ [Static Property](static-property.html)
+ [Properties](property.html)
+ [Container](container.html)
+ [Array Element](array-element.html)
+ [Readable](readable.html)
