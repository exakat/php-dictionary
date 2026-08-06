# INI
The INI format is a simple, human-readable file format used for configuration settings. It consists of key-value pairs grouped into sections.

It is natively supported by PHP, and used internally for the ``php.ini`` file.

It is related to the TOML format.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/ini.html","name":"INI","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The INI format is a simple, human-readable file format used for configuration settings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/INI.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    parse_ini_file('/path/to/php.ini');
    
    parse_ini_string(<<<INI
    ; This is a comment
    # Another comment
    
    [database]
    host = localhost
    username = root
    password = secret
    port = 3306
    INI);

?>
```

**[Documentation](https://en.wikipedia.org/wiki/INI_file)**
## See Also

+ [INI configuration](http://linuxcnc.org/docs/html/config/ini-config.html)

## Related

+ [Format](format.ini.html)
+ [JavaScript Object Notation (JSON)](json.ini.html)
+ [Tom's Obvious Minimal Language (TOML)](toml.ini.html)

## Related packages

+ [matomo/ini](https://packagist.org/packages/matomo/ini)
