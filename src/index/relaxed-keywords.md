# Relaxed Keywords
The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name. 

Generally speaking, PHP keywords are not allowed as names for classes, functions, etc. This is still the case here, yet this constraint has been relaxed for method names. 

Functions and global constants do not support that feature. Closures and arrow functions are not applicable, as they have no name. Only methods do use relaxed keywords.

Property names do not have this constraints, as the ``$`` sign make them distinct. 

Using PHP keywords as names is not a commonly known feature, and generate a lot of surprise, when used. As a convention, it is recommended to avoid using PHP keywords. Yet, it may apply in specific situations.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-keywords.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-keywords.html","name":"Relaxed Keywords","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:08:18 +0000","dateModified":"Fri, 14 Aug 2026 08:08:18 +0000","description":"The relaxed keywords is the feature that allows most PHP keywords to be used as a method or class constant name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relaxed-keywords.html"]}],"keywords":["syntax","convention"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dollar.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words"},{"@type":"CreativeWork","name":"List of Keywords","url":"https:\/\/www.php.net\/manual\/en\/reserved.keywords.php"},{"@type":"CreativeWork","name":"PHP RFC: Context Sensitive Lexer","url":"https:\/\/wiki.php.net\/rfc\/context_sensitive_lexer"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relaxed-keywords"}]}]}</script>
```php
<?php

    class Xs {
        const function = 1;
        function function() {}
    }

?>
```

**[Documentation](https://www.php.net/manual/en/migration70.other-changes.php#migration70.other-changes.loosening-reserved-words)**
## See Also

+ [List of Keywords](https://www.php.net/manual/en/reserved.keywords.php)
+ [PHP RFC: Context Sensitive Lexer](https://wiki.php.net/rfc/context_sensitive_lexer)

## Related

+ [Dollar $](dollar.html)
