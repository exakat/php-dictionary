# Multiple Dispatch
Multiple dispatch, also called a multimethod, as found in Common Lisp, Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do. A function defined for ``(Circle, Rectangle)`` and again for ``(Circle, Circle)`` will resolve to a different body depending on the runtime type of every argument passed, and this resolution happens at the call site, at runtime.

This differs from single dispatch, where a method call ``$shape->collidesWith($other)`` only considers the runtime type of ``$shape``; the type of ``$other`` is fixed by its declared parameter type and requires manual branching, such as ``instanceof`` checks or the double-dispatch visitor pattern, to react differently per combination.

PHP performs single dispatch only: overloaded function declarations do not exist, and ``function collidesWith(Circle $a, Rectangle $b)`` cannot coexist with ``function collidesWith(Circle $a, Circle $b)`` as two resolvable overloads. Choosing behavior based on the combined runtime types of several arguments must be written by hand with ``match``, ``instanceof``, or the visitor pattern.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-dispatch.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-dispatch.html","name":"Multiple Dispatch","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 02 Sep 2026 16:41:00 +0000","dateModified":"Wed, 02 Sep 2026 16:41:00 +0000","description":"Multiple dispatch, also called a multimethod, as found in Common Lisp, Julia, and Dylan, selects which implementation of a function to run based on the runtime types of all of its arguments, not just the first one, the way ordinary object-oriented method calls do","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/multiple-dispatch.html"]}],"alternateName":["multimethod"],"keywords":["concept","not supported","_nocompileOK"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-overloading.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/polymorphism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/instanceof.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Multiple_dispatch"},{"@type":"CreativeWork","name":"Visitor pattern (Wikipedia)","url":"https:\/\/en.wikipedia.org\/wiki\/Visitor_pattern"},{"@type":"CreativeWork","name":"match","url":"https:\/\/www.php.net\/manual\/en\/control-structures.match.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"multiple-dispatch"}]}]}</script>
```php
<?php
    
    // PHP has no true overloading: this second declaration is a fatal error.
    function collide(Circle $a, Circle $b) { /* ... */ }
    function collide(Circle $a, Rectangle $b) { /* ... */ } // Fatal error: redeclaration

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Multiple_dispatch)**
## See Also

+ [Visitor pattern (Wikipedia)](https://en.wikipedia.org/wiki/Visitor_pattern)
+ [match](https://www.php.net/manual/en/control-structures.match.php)

## Related

+ [Overloading](overloading.html)
+ [Method Overloading](method-overloading.html)
+ [Polymorphism](polymorphism.html)
+ [instanceof](instanceof.html)
