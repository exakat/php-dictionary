# get\_class()
``get_class()`` is a PHP native function, that returns the name of the class of an object.

``get_class()`` returns the full name of the class, including its namespace and original letter cases. 

``get_class()`` may be replaced by the magic method ``__CLASS__`` when operating on ``$this``. It may also be replaced with an object in other situation, such as fetching a static constant, or instantiating a new object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class.html","name":"get_class()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:23 +0000","dateModified":"Wed, 05 Aug 2026 08:17:23 +0000","description":"get_class() is a PHP native function, that returns the name of the class of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_class().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"get_class"}]}]}</script>
```php
<?php

namespace A\b;

class C {} 

$c = new C;
print get_class(); //A\b\C

$d = new $c;
print get_class(); //A\b\C

?>
```

**[Documentation](https://www.php.net/manual/en/function.get-class.php)**
## See Also

+ [PHP | get_class() Function](https://www.geeksforgeeks.org/php/php-get_class-function/)
+ [Exploring PHP's get_class() Function: A Practical Guide](https://clouddevs.com/php/get_class-function/)

## Related

+ [\_\_CLASS\_\_](__class__.html)
+ [$this]($this.html)
+ [get\_class\_vars()](get_class_vars.html)
+ [Introspection](introspection.html)
