# Backward Compatible
A feature is backward compatible when it can be handled by a previous version than its version of publication. It is automatically ignored by the previous versions, either by design or by luck.

For example, the attributes ``#[Attribute]`` are backward compatible: they were introduced in version 8.0, and their syntax, starting as a comment with a ``#``, is backward compatible: it is processed as a comment in previous PHP versions.

Note that this example is partially backward compatible: it may work or not. 

The contrary of a backward compatible feature is backward incompatible.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-compatible.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-compatible.html","name":"Backward Compatible","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:55 +0000","dateModified":"Fri, 19 Jun 2026 21:24:55 +0000","description":"A feature is backward compatible when it can be handled by a previous version than its version of publication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-compatible.html"]}],"keywords":["compatibility"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/backward-incompatible.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/forward-compatible.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/migration.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polyfill.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Backward_compatibility"},{"@type":"CreativeWork","name":"Roave: BackwardCompatibilityCheck","url":"https:\/\/github.com\/Roave\/BackwardCompatibilityCheck"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"backward-compatible"}]}]}</script>
```php
<?php

    #[Attribute] // This is backward compatible
    class X {
        function foo(#[AttributeForParameter] $a) { // This is not backward compatible
        
        }
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Backward_compatibility)**
## See Also

+ [Roave: BackwardCompatibilityCheck](https://github.com/Roave/BackwardCompatibilityCheck)

## Related

+ [Backward Incompatible](backward-incompatible.html)
+ [Forward Compatible](forward-compatible.html)
+ [Legacy](legacy.html)
+ [Migration](migration.html)
+ [Polyfill](polyfill.html)
