# Chaining
The word ``chaining`` appears in several distinct PHP concepts:

+ Chaining assignation: assigning the same value to several variables in a single expression, using successive ``=`` operators, e.g. ``$a = $b = $c = 0;``. Evaluated right to left. Magic methods are not triggered
+ Method chaining: calling methods successively on the return value of the previous call, e.g. ``$object->m1()->m2()->m3()``. The result of each method call is used to call the next one
+ Fluent interface: an object-oriented API design pattern that relies extensively on method chaining to create readable, expressive code. Not related to the ``interface`` keyword
+ Chaining exceptions: re-throwing a caught exception wrapped inside a new exception, preserving the original error context via ``Exception::getPrevious()``
+ Chaining new without parentheses: since PHP 8.4, calling a method, accessing a property, or invoking ``__invoke()`` directly on a ``new`` expression without wrapping it in parentheses, e.g. ``new X()->foo()``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html","name":"Chaining","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 14:43:17 +0000","dateModified":"Tue, 11 Aug 2026 14:43:17 +0000","description":"The word chaining appears in several distinct PHP concepts:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining.html"]}],"keywords":["disambiguation","_noDocumentation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-assignation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fluent-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception-chain.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/chaining-new-without-parenthesis.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/methodcall.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/expressive-interface.html"}],"citation":[{"@type":"CreativeWork","name":"Method Chaining","url":"https:\/\/en.wikipedia.org\/wiki\/Method_chaining"},{"@type":"CreativeWork","name":"Exception Chaining","url":"https:\/\/en.wikipedia.org\/wiki\/Exception_chaining"},{"@type":"CreativeWork","name":"Fluent Interface","url":"https:\/\/en.wikipedia.org\/wiki\/Fluent_interface"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"chaining"}]}]}</script>
## See Also

+ [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)
+ [Exception Chaining](https://en.wikipedia.org/wiki/Exception_chaining)
+ [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)

## Related

+ [Chaining Assignation](chaining-assignation.html)
+ [Fluent Interface](fluent-interface.html)
+ [Chaining Exceptions](exception-chain.html)
+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.html)
+ [Methodcall](methodcall.html)
+ [Expressive Interface](expressive-interface.html)
