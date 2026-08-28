# resource
A resource is a special type of data, holding a reference to an external resource. Resources are created and used by special functions. 

Resources are only used with their dedicated functions. It is not possible to modify them in any other way.

Resources, in general, are being removed from PHP code and more recent versions tend to rely less on them and more on objects. 

There is a list of PHP resources available in the docs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html","name":"resource","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"A resource is a special type of data, holding a reference to an external resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/native-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/array-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handle.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/object-syntax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/resource-leak.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.resource.php"},{"@type":"CreativeWork","name":"List of Resource Types","url":"https:\/\/www.php.net\/manual\/en\/resource.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"resource"}]}]}</script>
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

+ [Type System](type.html)
+ [PHP Natives](native-type.html)
+ [Array Syntax](array-syntax.html)
+ [Handle](handle.html)
+ [Object Syntax](object-syntax.html)
+ [Resource Leak](resource-leak.html)
