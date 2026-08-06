# Chaining
The word ``chaining`` appears in several distinct PHP concepts:

+ Chaining assignation: assigning the same value to several variables in a single expression, using successive ``=`` operators, e.g. ``$a = $b = $c = 0;``. Evaluated right to left. Magic methods are not triggered
+ Method chaining: calling methods successively on the return value of the previous call, e.g. ``$object->m1()->m2()->m3()``. The result of each method call is used to call the next one
+ Fluent interface: an object-oriented API design pattern that relies extensively on method chaining to create readable, expressive code. Not related to the ``interface`` keyword
+ Chaining exceptions: re-throwing a caught exception wrapped inside a new exception, preserving the original error context via ``Exception::getPrevious()``
+ Chaining new without parenthesis: since PHP 8.4, calling a method, accessing a property, or invoking ``__invoke()`` directly on a ``new`` expression without wrapping it in parentheses, e.g. ``new X()->foo()``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/chaining.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/chaining.html","name":"Chaining","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jul 2026 15:39:07 +0000","dateModified":"Fri, 24 Jul 2026 15:39:07 +0000","description":"The word ``chaining`` appears in several distinct PHP concepts:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Chaining.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## See Also

+ [Method Chaining](https://en.wikipedia.org/wiki/Method_chaining)
+ [Exception Chaining](https://en.wikipedia.org/wiki/Exception_chaining)
+ [Fluent Interface](https://en.wikipedia.org/wiki/Fluent_interface)

## Related

+ [Chaining Assignation](chaining-assignation.ini.html)
+ [Fluent Interface](fluent-interface.ini.html)
+ [Chaining Exceptions](exception-chain.ini.html)
+ [Chaining New Without Parenthesis](chaining-new-without-parenthesis.ini.html)
+ [Methodcall](methodcall.ini.html)
+ [Expressive Interface](expressive-interface.ini.html)
