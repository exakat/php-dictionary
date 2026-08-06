# Writable
Something is writable when a new value may be assigned to it, in the correct context. For example, a variable is writable, as it may be assigned a new value in the local context.

Variable, properties, given the correct visibility, static properties, array elements are writable. 

On the other hand, constants, method calls, function calls, or instantiation are not writable: they provide a value, but do not accept to be written to.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/writable.html","name":"Writable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:25:15 +0000","dateModified":"Fri, 19 Jun 2026 21:25:15 +0000","description":"Something is writable when a new value may be assigned to it, in the correct context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Writable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Visibility](visibility.ini.html)
+ [Variables](variable.ini.html)
+ [Static Property](static-property.ini.html)
+ [Properties](property.ini.html)
+ [Container](container.ini.html)
+ [Array Element](array-element.ini.html)
+ [Readable](readable.ini.html)
