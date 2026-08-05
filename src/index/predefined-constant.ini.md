# Predefined Constants
Predefined constants are PHP native constants, available at the start of the PHP engine. 

Those constants are for internal usage, such as E_ALL, for error reporting, or STDOUT, for output. Some constants are providing information, such as PHP_VERSION's PHP version number. Others are meant to give a readable name to common values or arguments, such as DATE_RFC822. 

Other constants come from extensions: for example, the Math extension defines M_PI for the pi constant, 3.14159..., libsodium defines SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES, etc. Those are also predefined constants, although they depend on the compilation of PHP.

The list of all the defined constants is available with the ``get_defined_constants()`` function.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/predefined-constant.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/predefined-constant.ini.html","name":"Predefined Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Predefined constants are PHP native constants, available at the start of the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Predefined Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    echo 'This is PHP ' . PHP_VERSION;

?>
```

**[Documentation](https://www.php.net/manual/en/reserved.constants.php)**
## See Also

+ [Understanding PHP Predefined Constants](https://dev.to/patricia1988hernandez2/understanding-php-predefined-constants-6db)

## Related

+ [Constants](constant.ini.html)
+ [PHP Constants](php-constant.ini.html)
