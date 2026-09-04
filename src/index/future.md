# Future
A future is a programming construct representing a value that is not yet available but will be resolved at some point. It is closely related to promises: a future is the read-only view of an asynchronous result, while a promise is the write side that resolves or rejects that future.

In languages like Java, Scala, and Dart, futures and promises are distinct objects. With languages like PHP, the distinction is often blurred, and the terms are used interchangeably within async libraries like ReactPHP or Amp.

Futures enable non-blocking code by allowing a computation to proceed without waiting for a result that is not yet ready.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/future.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/future.html","name":"Future","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 26 Aug 2026 10:02:51 +0000","dateModified":"Wed, 26 Aug 2026 10:02:51 +0000","description":"A future is a programming construct representing a value that is not yet available but will be resolved at some point","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/future.html"]}],"keywords":["concept","design"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/promise.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fibers.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cancellation.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Futures_and_promises"},{"@type":"CreativeWork","name":"ReactPHP: Promise","url":"https:\/\/reactphp.org\/promise\/"},{"@type":"CreativeWork","name":"Amp documentation","url":"https:\/\/amphp.org\/amp"},{"@type":"CreativeWork","name":"Fibers","url":"https:\/\/www.php.net\/manual\/en\/language.fibers.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"future"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Futures_and_promises)**
## See Also

+ [ReactPHP: Promise](https://reactphp.org/promise/)
+ [Amp documentation](https://amphp.org/amp)
+ [Fibers](https://www.php.net/manual/en/language.fibers.php)

## Related

+ [Promise](promise.html)
+ [Asynchronous](asynchronous.html)
+ [Fibers](fibers.html)
+ [Cancellation](cancellation.html)

## Related packages

+ [amphp/amp](https://packagist.org/packages/amphp/amp)
+ [react/promise](https://packagist.org/packages/react/promise)
