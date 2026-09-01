# Cancellation
Cancellation is the ability to abort an ongoing asynchronous operation before it completes. In asynchronous and concurrent programming, long-running tasks such as HTTP requests, database queries, or timers may need to be stopped early to conserve resources or respond to user actions.

Cancellation is typically implemented through cancellation tokens: an object passed to an asynchronous operation that signals cancellation on demand. The operation periodically checks the token and stops if cancellation has been requested.

PHP async libraries such as Amp provide ``CancelledException`` and cancellation token support for fibers and promises.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cancellation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cancellation.html","name":"Cancellation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 04:23:49 +0000","dateModified":"Wed, 26 Aug 2026 04:23:49 +0000","description":"Cancellation is the ability to abort an ongoing asynchronous operation before it completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cancellation.html"]}],"keywords":["concept","design"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/future.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promise.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/amphp.org\/amp"},{"@type":"CreativeWork","name":"AMPHP (GitHub)","url":"https:\/\/github.com\/amphp\/amp"},{"@type":"CreativeWork","name":"ReactPHP: Promise","url":"https:\/\/reactphp.org\/promise\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"cancellation"}]}]}</script>
**[Documentation](https://amphp.org/amp)**
## See Also

+ [AMPHP (GitHub)](https://github.com/amphp/amp)
+ [ReactPHP: Promise](https://reactphp.org/promise/)

## Related

+ [Future](future.html)
+ [Promise](promise.html)
+ [Asynchronous](asynchronous.html)
+ [Fibers](fibers.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
