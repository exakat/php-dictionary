# PHP Extensions
Extensions are PHP engine module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PIE repository. They were used to be published in the PECL repository, but it is being sunset at the moment.

Some are available by default, in the PHP standard configuration.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-extension.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-extension.html","name":"PHP Extensions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Extensions are PHP engine module system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Extensions.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-extension"}]}]}</script>
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

+ [PHP Engine](php-engine.html)
