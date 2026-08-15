# Predefined Constants
Predefined constants are PHP native constants, available at the start of the PHP engine. 

Those constants are for internal usage, such as E_ALL, for error reporting, or STDOUT, for output. Some constants provide information, such as PHP_VERSION's PHP version number. Others are meant to give a readable name to common values or arguments, such as DATE_RFC822. 

Other constants come from extensions: for example, the Math extension defines M_PI for the pi constant, 3.14159..., libsodium defines SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES, etc. Those are also predefined constants, although they depend on the compilation of PHP.

The list of all the defined constants is available with the ``get_defined_constants()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-constant.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-constant.html","name":"Predefined Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:40:25 +0000","dateModified":"Tue, 11 Aug 2026 14:40:25 +0000","description":"Predefined constants are PHP native constants, available at the start of the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Predefined Constants.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"predefined-constant"}]}]}</script>
```php
<?php

    echo 'This is PHP ' . PHP_VERSION;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [Understanding PHP Predefined Constants](https://dev.to/patricia1988hernandez2/understanding-php-predefined-constants-6db)

## Related

+ [Constants](constant.html)
+ [PHP Constants](php-constant.html)
