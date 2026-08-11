# Throwable
``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html","name":"Throwable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Throwable.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"throwable"}]}]}</script>
```php
<?php

class x extends \Exception implements \Throwable {}

throw new X();

?>
```

**[Documentation](https://www.php.net/manual/en/class.throwable.php)**
## Related

+ [Catch](catch.html)
+ [Exception](exception.html)
+ [Error](error.html)
+ [Type Error](typerror.html)
+ [PHP Native Interfaces](php-interface.html)
