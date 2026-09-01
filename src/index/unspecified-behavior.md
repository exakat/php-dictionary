# Unspecified Behavior
Unspecified behavior is behavior for which the language specification provides two or more valid options, without requiring the engine to document which one it picked, or to stay consistent across calls. Unlike undefined behavior, every option is still a valid, non-erroneous outcome; unlike implementation-defined behavior, the engine does not have to commit to, or publish, a single choice.

An classic example is the order in which arguments are evaluated in a function call: the specification does not require left-to-right evaluation, so code that relies on a particular order, e.g. through side effects in the arguments, may behave differently between engine versions.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unspecified-behavior.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unspecified-behavior.html","name":"Unspecified Behavior","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:37:55 +0000","dateModified":"Thu, 27 Aug 2026 05:37:55 +0000","description":"Unspecified behavior is behavior for which the language specification provides two or more valid options, without requiring the engine to document which one it picked, or to stay consistent across calls","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unspecified-behavior.html"]}],"keywords":["concept","specification"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/implementation-defined-behavior.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/undefined-behavior.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phplang.org\/spec\/03-terms-and-definitions.html"},{"@type":"CreativeWork","name":"Unspecified behavior - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Unspecified_behavior"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"unspecified-behavior"}]}]}</script>
```php
<?php

    function noop($x) { return $x; }
    
    $i = 0;
    function next() {
        global $i;
        return $i++;
    }
    
    // unspecified: the order in which next() is called for each argument
    // is not guaranteed by the language
    noop(next(), next());

?>
```

**[Documentation](https://phplang.org/spec/03-terms-and-definitions.html)**
## See Also

+ [Unspecified behavior - Wikipedia](https://en.wikipedia.org/wiki/Unspecified_behavior)

## Related

+ [Behavior](behavior.html)
+ [Implementation-Defined Behavior](implementation-defined-behavior.html)
+ [Undefined Behavior](undefined-behavior.html)
