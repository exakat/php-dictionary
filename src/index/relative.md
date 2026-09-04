# Relative
A ``relative`` value is dependent on the context in which it operates. 

The notion of ``relative`` has several usages:

+ There are relative names, which depends on the local namespace
+ There are relative path, which are path that starts at the current working directory
+ There are relative type, which are types that depends on the current class context, such as ``self``, ``static`` and ``parent``

The notion of relative is the opposite of the notion of absolute, which does not depend on a local context.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html","name":"Relative","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:06:24 +0000","dateModified":"Fri, 14 Aug 2026 08:06:24 +0000","description":"A relative value is dependent on the context in which it operates","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html"]}],"keywords":["disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/path.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/absolute.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.namespaces.basics.php"},{"@type":"CreativeWork","name":"Path (computing)","url":"https:\/\/en.wikipedia.org\/wiki\/Path_(computing)"},{"@type":"CreativeWork","name":"Late Static Bindings","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.late-static-bindings.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relative"}]}]}</script>
```php
<?php

    class X extends Y {
        // relative type, that may be copy-pasted without a change
        function foo() : self {} 
    
        // absolute type, that represents the current class
        function goo() : x {} 
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.namespaces.basics.php)**
## See Also

+ [Path (computing)](https://en.wikipedia.org/wiki/Path_(computing))
+ [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)

## Related

+ [Fully Qualified Name](fully-qualified-name.html)
+ [Relative Types](relative-types.html)
+ [Path](path.html)
+ [Absolute](absolute.html)
