# Register Globals
Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES. 

This meant that the initial set of variables in an application was not known, as they would depend on the incoming data. 

Register globals has been removed in version 5.4.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/register-globals.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/register-globals.html","name":"Register Globals","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:03:23 +0000","dateModified":"Sat, 11 Jul 2026 09:03:23 +0000","description":"Register globals is an old and removed feature of PHP, which automatically created variables from the incoming super globals, such as $_GET, $_POST, $_REQUEST, $_COOKIES","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Register Globals.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // $_GET['foo'] = 'bar';
    
    echo $foo;
    
    // $_GET['_SESSION']['logged'] = '1';
    
?>
```

**[Documentation](https://www.mediawiki.org/wiki/Register_globals)**
## See Also

+ [PHP register-globals is enabled](https://beaglesecurity.com/blog/vulnerability/php-register-globals-enabled.html)

## Related

+ [Directives](directive.ini.html)
+ [Legacy](legacy.ini.html)
