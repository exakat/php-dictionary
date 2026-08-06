# Cancellation
Cancellation is the ability to abort an ongoing asynchronous operation before it completes. In asynchronous and concurrent programming, long-running tasks such as HTTP requests, database queries, or timers may need to be stopped early to conserve resources or respond to user actions.

Cancellation is typically implemented through cancellation tokens: an object passed to an asynchronous operation that signals cancellation on demand. The operation periodically checks the token and stops if cancellation has been requested.

PHP async libraries such as Amp provide ``CancelledException`` and cancellation token support for fibers and promises.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cancellation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/cancellation.html","name":"Cancellation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Cancellation is the ability to abort an ongoing asynchronous operation before it completes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Cancellation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://amphp.org/amp)**
## Related

+ [Future](future.ini.html)
+ [Promise](promise.ini.html)
+ [Asynchronous](asynchronous.ini.html)
+ [Fibers](fibers.ini.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
