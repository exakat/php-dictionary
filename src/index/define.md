# define()
``define()`` is a PHP function that introduces global constant definitions.

``define()`` is a function, and may be called anywhere. It is slower than ``const``, as it is only executed at runtime. ``define()`` doesn't allow the creation of class constants.

``define()`` used to create case-insensitive constants, and this was abandoned in version 7.3.

``define()`` cannot create class constants.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define.html","name":"define()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:43:13 +0000","dateModified":"Tue, 11 Aug 2026 14:43:13 +0000","description":"``define()`` is a PHP function that introduces global constant definitions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/define().html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"define"}]}]}</script>
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

+ [Const](const.html)
+ [Constants](constant.html)
+ [Static Constant](class-constant.html)
+ [defined()](defined.html)
+ [Conditioned Structures](conditioned.html)
+ [Execution Time](execution-time.html)
