# resource
A resource is a special type of data, holding a reference to an external resource. Resources are created and used by special functions. 

Resources are only used with their dedicated functions. It is not possible to modify them in any other way.

Resources, in general, are being removed from PHP code and more recent versions tend to rely less on them and more on objects. 

There is a list of PHP resources available in the docs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resource.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resource.html","name":"resource","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A resource is a special type of data, holding a reference to an external resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/resource.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $fp = fopen('/tmp/test.txt', 'r+');
    var_dump(is_resource($fp));

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.resource.php)**
## See Also

+ [List of Resource Types](https://www.php.net/manual/en/resource.php)

## Related

+ [Type System](type.ini.html)
+ [PHP Natives](native-type.ini.html)
+ [Array Syntax](array-syntax.ini.html)
+ [Handle](handle.ini.html)
+ [Object Syntax](object-syntax.ini.html)
+ [Resource Leak](resource-leak.ini.html)
