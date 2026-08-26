# class\_alias()
The ``class_alias()`` function creates an alias for a class, interface, enum or trait. Then, the alias may be used in place of the original name anywhere in the application, including in ``use`` expressions. 

Since version 8.3, ``class_alias()`` supports the creation of aliases with native PHP classes. 

``class_alias()`` is also usable on interfaces, enumerations and traits. 

Once created, the objects are of the original class. The alias name doesn't stick to the objects, and it is not possible to know if the object was created as an alias or the original class. The alias may be used with types.

There is no equivalent to ``class_alias()`` for functions, or constants. 
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_alias.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_alias.html","name":"class_alias()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The class_alias() function creates an alias for a class, interface, enum or trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/class_alias.html"]}],"keywords":["php function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/use.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/alias.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.class-alias.php"},{"@type":"CreativeWork","name":"PHP: Using class_alias to maintain BC while moving\/renaming classes","url":"https:\/\/www.schmengler-se.de\/en\/2016\/09\/php-using-class_alias-to-maintain-bc-while-move-rename-classes\/"},{"@type":"CreativeWork","name":"Exploring PHP class_alias","url":"hhttps:\/\/dev.to\/khairuaqsara\/exploring-php-classalias-k2n"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"class_alias"}]}]}</script>
```php
<?php

class_alias(stdClass::class, StandardClass::class);

$object = new StandardClass();

// stdClass
print gettype($object);

?>
```

**[Documentation](https://www.php.net/manual/en/function.class-alias.php)**
## See Also

+ [PHP: Using class_alias to maintain BC while moving/renaming classes](https://www.schmengler-se.de/en/2016/09/php-using-class_alias-to-maintain-bc-while-move-rename-classes/)
+ [Exploring PHP class_alias](hhttps://dev.to/khairuaqsara/exploring-php-classalias-k2n)

## Related

+ [Use](use.html)
+ [Alias](alias.html)
