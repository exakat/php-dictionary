# get\_class()
``get_class()`` is a PHP native function, that returns the name of the class of an object.

``get_class()`` returns the full name of the class, including its namespace and original letter cases. 

``get_class()`` may be replaced by the magic method ``__CLASS__`` when operating on ``$this``. It may also be replaced with an object in other situation, such as fetching a static constant, or instantiating a new object.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/get_class.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/get_class.html","name":"get_class()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:17:23 +0000","dateModified":"Wed, 05 Aug 2026 08:17:23 +0000","description":"``get_class()`` is a PHP native function, that returns the name of the class of an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/get_class().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [\_\_CLASS\_\_](__class__.ini.html)
+ [$this]($this.ini.html)
+ [get\_class\_vars()](get_class_vars.ini.html)
+ [Introspection](introspection.ini.html)
