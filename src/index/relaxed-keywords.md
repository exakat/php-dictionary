# Relaxed Keywords
The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name. 

Generally speaking, PHP keywords are not allowed as names for classes, functions, etc. This is still the case here, yet this constraint has been relaxed for method names. 

Functions and global constants do not support that feature. Closures and arrow functions are not applicable, as they have no name. Only methods do use relaxed keywords.

Property names do not have this constraints, as the ``$`` sign make them distinct. 

Using PHP keywords as names is not a commonly known feature, and generate a lot of surprise, when used. As a convention, it is recommended to avoid using PHP keywords. Yet, it may apply in specific situations.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-keywords.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-keywords.html","name":"Relaxed Keywords","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Relaxed Keywords.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relaxed-keywords"}]}]}</script>
```php
<?php

    class x {
        const function = 1;
        function function() {}
    }

?>
```

**[Documentation](https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words)**
## Related

+ [Dollar $](dollar.html)
