# Throwable
``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/throwable.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/throwable.ini.html","name":"Throwable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Throwable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

class x extends \Exception implements \Throwable {}

throw new X();

?>
```

**[Documentation](https://www.php.net/manual/en/class.throwable.php)**
## Related

+ [Catch](catch.ini.html)
+ [Exception](exception.ini.html)
+ [Error](error.ini.html)
+ [Type Error](typerror.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
