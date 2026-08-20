# Concurrency
Concurrency is a concept in computing where multiple tasks are in progress at the same time.

PHP uses several ways to handle concurrency:

+ Externally, by the webserver or PHP-fpm
+ Internally, with forked processes, with pcntl
+ Internally, with threads, with parallel
+ Cooperating, with fibers
+ Non-blocking IO, with swoole or amphp.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/concurrency.html","name":"Concurrency","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 06:22:43 +0000","dateModified":"Tue, 14 Jul 2026 06:22:43 +0000","description":"Concurrency is a concept in computing where multiple tasks are in progress at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Concurrency.html"]}],"alternateName":["concurency"],"keywords":["parallelism"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/asynchronous.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/fpm.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/atomic-operation.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file_put_contents.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mutex.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/race-condition.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/actor-model.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/cache-stampede.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/green-thread.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/software-transactional-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/amp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reactphp.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sem.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared-memory.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shared.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Concurrency_(computer_science)"},{"@type":"CreativeWork","name":"FrankenPHP","url":"https:\/\/frankenphp.dev\/"},{"@type":"CreativeWork","name":"swoole","url":"https:\/\/wiki.swoole.com\/en\/#\/"},{"@type":"CreativeWork","name":"OpenSwoole project","url":"https:\/\/openswoole.com\/"},{"@type":"CreativeWork","name":"AMPHP","url":"https:\/\/amphp.org\/"},{"@type":"CreativeWork","name":"Understanding Concurrency in PHP","url":"https:\/\/www.honeybadger.io\/blog\/php-concurrency\/"},{"@type":"CreativeWork","name":"Understanding Fibers in PHP: A New Way to Handle Concurrency","url":"https:\/\/itsimiro.medium.com\/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff"},{"@type":"CreativeWork","name":"PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole","url":"https:\/\/dev.to\/roman_shneer_9301c1e5f2fd\/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"concurrency"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Concurrency_(computer_science))**
## See Also

+ [FrankenPHP](https://frankenphp.dev/)
+ [swoole](https://wiki.swoole.com/en/#/)
+ [OpenSwoole project](https://openswoole.com/)
+ [AMPHP](https://amphp.org/)
+ [Understanding Concurrency in PHP](https://www.honeybadger.io/blog/php-concurrency/)
+ [Understanding Fibers in PHP: A New Way to Handle Concurrency](https://itsimiro.medium.com/understanding-fibers-in-php-a-new-way-to-handle-concurrency-ed07424320ff)
+ [PHP is 5x Faster Than NestJS? Rethinking High-Load with Swoole](https://dev.to/roman_shneer_9301c1e5f2fd/headline-php-is-5x-faster-than-nestjs-rethinking-high-load-with-swoole-31di)

## Related

+ [Thread](thread.html)
+ [Process](process.html)
+ [Asynchronous](asynchronous.html)
+ [FastCGI Process Manager (FPM)](fpm.html)
+ [Atomic Operation](atomic-operation.html)
+ [file\_put\_contents()](file_put_contents.html)
+ [Mutex](mutex.html)
+ [Race Condition](race-condition.html)
+ [Actor Model](actor-model.html)
+ [Cache Stampede](cache-stampede.html)
+ [Green Thread](green-thread.html)
+ [Software Transactional Memory (STM)](software-transactional-memory.html)
+ [AMP (Asynchronous Markup Protocol)](amp.html)
+ [ReactPHP](reactphp.html)
+ [Semaphore](sem.html)
+ [Shared Memory](shared-memory.html)
+ [Shared](shared.html)
