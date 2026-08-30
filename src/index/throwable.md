# Throwable
``Throwable`` is a PHP native interface, which is required for any object to be used with thrown, such as ``Exception`` and ``Error``.

This interface may be used with catch clauses, to catch everything that is thrown. Yet, this interface cannot be implemented directly. It should be acquired by extending ``Exception``: extending ``Error`` should be avoided.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html","name":"Throwable","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:39:42 +0000","dateModified":"Fri, 28 Aug 2026 09:39:42 +0000","description":"Throwable is a PHP native interface, which is required for any object to be used with thrown, such as Exception and Error","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/throwable.html"]}],"keywords":["php interface","php native"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/catch.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.throwable.php"},{"@type":"CreativeWork","name":"PHP: Exception","url":"https:\/\/www.php.net\/manual\/en\/class.exception.php"},{"@type":"CreativeWork","name":"PHP: Error","url":"https:\/\/www.php.net\/manual\/en\/class.error.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"throwable"}]}]}</script>
```php
<?php

class x extends \Exception implements \Throwable {}

throw new X();

?>
```

**[Documentation](https://www.php.net/manual/en/class.throwable.php)**
## See Also

+ [PHP: Exception](https://www.php.net/manual/en/class.exception.php)
+ [PHP: Error](https://www.php.net/manual/en/class.error.php)

## Related

+ [Catch](catch.html)
+ [Exception](exception.html)
+ [Error](error.html)
+ [Type Error](typerror.html)
+ [PHP Native Interfaces](php-interface.html)
