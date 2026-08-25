# Relative Types
Relative types are types that are not explicit, but relative to the current class. There are three relative types: 

+ ``static``: this represents the current calling class. It is important when the class is not directly called, but one of its children is. 
+ ``self``: this represents the current class, at compilation time. 
+ ``parent``: this represents the first available parent of the current class. It usually is the direct parent, but may skip classes when the requested resource is not available, as in method calls.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html","name":"Relative Types","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Aug 2026 08:01:33 +0000","dateModified":"Fri, 14 Aug 2026 08:01:33 +0000","description":"Relative types are types that are not explicit, but relative to the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative-types.html"]}],"keywords":["type"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/scalar-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/union-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/literal-types.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/intersection-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dnf-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/self.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/static.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/parent.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fully-qualified-name.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/relative.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.types.relative-class-types.php"},{"@type":"CreativeWork","name":"Late Static Bindings","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.late-static-bindings.php"},{"@type":"CreativeWork","name":"Basic Class Definitions","url":"https:\/\/www.php.net\/manual\/en\/language.oop5.basic.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"relative-types"}]}]}</script>
```php
<?php

    class X extends Y {
        function foo() : self {}
        function hoo() : static {}
        function ioo() : parent {}    
    }

?>
```

**[Documentation](https://www.php.net/manual/en/language.types.relative-class-types.php)**
## See Also

+ [Late Static Bindings](https://www.php.net/manual/en/language.oop5.late-static-bindings.php)
+ [Basic Class Definitions](https://www.php.net/manual/en/language.oop5.basic.php)

## Related

+ [Scalar Types](scalar-type.html)
+ [Union Type](union-type.html)
+ [Literal Types](literal-types.html)
+ [Intersection Type](intersection-type.html)
+ [Disjunctive Normal Form (DNF)](dnf-type.html)
+ [Self](self.html)
+ [static](static.html)
+ [parent](parent.html)
+ [Type System](type.html)
+ [Fully Qualified Name](fully-qualified-name.html)
+ [Relative](relative.html)
