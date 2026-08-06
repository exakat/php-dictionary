# PHP Extensions
Extensions are PHP engine module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PIE repository. They were used to be published in the PECL repository, but it is being sunset at the moment.

Some are available by default, in the PHP standard configuration.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-extension.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-extension.html","name":"PHP Extensions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:39:08 +0000","dateModified":"Tue, 14 Jul 2026 05:39:08 +0000","description":"Extensions are PHP engine module system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Extensions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Example with the ext/pspell extensions, for orthographic checks
    $pspell = pspell_new("en");
    
    if (pspell_check($pspell, "testt")) {
        echo "This is a valid spelling";
    } else {
        echo "Sorry, wrong spelling";
    }

?>
```

**[Documentation](https://packagist.org/search/)**
## See Also

+ [PECL repository (deprecated)](https://pecl.php.net/)

## Related

+ [PHP Engine](php-engine.ini.html)
