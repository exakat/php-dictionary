# define()
``define()`` is a PHP function, that introduces global constant definitions. 

``define()`` is a function, and may be called anywhere. It is slower than ``const``, as it is only executed at runtime. ``define()`` doesn't allow class constants creation.

``define()`` used to create case-insensitive constant, and this was abandoned in version 7.3.

``define()`` cannot create class constants.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/define.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/define.html","name":"define()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 16 Jun 2026 15:34:09 +0000","dateModified":"Tue, 16 Jun 2026 15:34:09 +0000","description":"``define()`` is a PHP function, that introduces global constant definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/define().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
    define('HELLO', 'Hello');
    
    print HELLO . " world\n";
?>
```

**[Documentation](https://www.php.net/manual/en/control-structures.alternative-syntax.php)**
## See Also

+ [Problem: Define() vs Const in PHP](https://www.uptimia.com/questions/what-are-the-differences-between-define-and-const-in-php)

## Related

+ [Const](const.ini.html)
+ [Constants](constant.ini.html)
+ [Static Constant](class-constant.ini.html)
+ [defined()](defined.ini.html)
+ [Conditioned Structures](conditioned.ini.html)
+ [Execution Time](execution-time.ini.html)
