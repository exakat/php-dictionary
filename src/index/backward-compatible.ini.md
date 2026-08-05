# Backward Compatible
A feature is backward compatible when it can be handled by a previous version than its version of publication. It is automatically ignored by the previous versions, either by design or by luck.

For example, the attributes ``#[Attribute]`` are backward compatible: they were introduced in version 8.0, and their syntax, starting as a comment with a ``#``, is backward compatible: it is processed as a comment in previous PHP versions.

Note that this example is partially backward compatible: it may work or not. 

The contrary of a backward compatible feature is backward incompatible.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backward-compatible.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/backward-compatible.ini.html","name":"Backward Compatible","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:55 +0000","dateModified":"Fri, 19 Jun 2026 21:24:55 +0000","description":"A feature is backward compatible when it can be handled by a previous version than its version of publication","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Backward Compatible.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Backward Incompatible](backward-incompatible.ini.html)
+ [Forward Compatible](forward-compatible.ini.html)
+ [Legacy](legacy.ini.html)
+ [Migration](migration.ini.html)
+ [Polyfill](polyfill.ini.html)
