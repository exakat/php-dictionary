# Deterministic
A deterministic function is a function that produces the same output, based on the same input. 

``strlen()`` is a deterministic function: it always returns the length of a string the same way. 

``time()`` is not a deterministic function: it always returns a different values, as time passes. ``rand()``, ``time()`` are non deterministic.

A function becomes non-deterministic when it relies on systems that may change between two calls. This is the case for files or database accesses.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deterministic.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/deterministic.html","name":"Deterministic","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"A deterministic function is a function that produces the same output, based on the same input","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Deterministic.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://www.simplethread.com/pure-and-deterministic-functions/)**
## See Also

+ [Understanding the differences between deterministic and probabilistic observability](https://docs.blackfire.io/continuous-profiling-cookbooks/understanding)

## Related

+ [Random](random.ini.html)
+ [Testable](testable.ini.html)
+ [Determinism](determinism.ini.html)
+ [Random\\Engine](random_engine.ini.html)
