# INI
The INI format is a simple, human-readable file format used for configuration settings. It consists of key-value pairs grouped into sections.

It is natively supported by PHP, and used internally for the ``php.ini`` file.

It is related to the TOML format.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini.html","name":"INI","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The INI format is a simple, human-readable file format used for configuration settings","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ini.html"]}],"keywords":["format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/format.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/json.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toml.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/INI_file"},{"@type":"CreativeWork","name":"INI configuration","url":"http:\/\/linuxcnc.org\/docs\/html\/config\/ini-config.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ini"}]}]}</script>
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

+ [Format](format.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Tom's Obvious Minimal Language (TOML)](toml.html)

## Related packages

+ [matomo/ini](https://packagist.org/packages/matomo/ini)
