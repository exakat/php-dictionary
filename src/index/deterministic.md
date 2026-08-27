# Deterministic
A deterministic function is a function that produces the same output, based on the same input. 

``strlen()`` is a deterministic function: it always returns the length of a string the same way. 

``time()`` is not a deterministic function: it always returns a different value, as time passes. ``rand()``, ``time()`` are non-deterministic.

A function becomes non-deterministic when it relies on systems that may change between two calls. This is the case for files or database accesses.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html","name":"Deterministic","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Aug 2026 07:40:58 +0000","dateModified":"Mon, 24 Aug 2026 07:40:58 +0000","description":"A deterministic function is a function that produces the same output, based on the same input","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/deterministic.html"]}],"keywords":["concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/testable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/determinism.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/random_engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.simplethread.com\/pure-and-deterministic-functions\/"},{"@type":"CreativeWork","name":"Understanding the differences between deterministic and probabilistic observability","url":"https:\/\/docs.blackfire.io\/continuous-profiling-cookbooks\/understanding"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"deterministic"}]}]}</script>
**[Documentation](https://www.simplethread.com/pure-and-deterministic-functions/)**
## See Also

+ [Understanding the differences between deterministic and probabilistic observability](https://docs.blackfire.io/continuous-profiling-cookbooks/understanding)

## Related

+ [Random](random.html)
+ [Testable](testable.html)
+ [Determinism](determinism.html)
+ [Random\\Engine](random_engine.html)
