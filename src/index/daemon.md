# Daemon
A daemon is a background process that runs without an interactive user, usually started at boot and kept alive by the operating system. Web servers, queue workers, and schedulers are typical daemons.

PHP is built for short requests, so a daemon is a long-running PHP process. It has to manage its own memory, handle errors without dying, and restart cleanly.

On Linux, systemd is the service manager that starts, stops, and restarts daemons. A PHP extension can give a script direct access to its interface, such as units and journal logs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/daemon.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/daemon.html","name":"Daemon","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Nov 2026 21:47:20 +0000","dateModified":"Thu, 05 Nov 2026 21:47:20 +0000","description":"A daemon is a background process that runs without an interactive user, usually started at boot and kept alive by the operating system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/daemon.html"]}],"keywords":["architecture","operations"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/process.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/worker.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/app-server.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Daemon_(computing)"},{"@type":"CreativeWork","name":"systemd documentation","url":"https:\/\/systemd.io\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.40","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"daemon"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Daemon_(computing))**
## See Also

+ [systemd documentation](https://systemd.io/)

## Related

+ [Process](process.html)
+ [Worker](worker.html)
+ [Application Server](app-server.html)

## Related packages

+ [nerou/systemd](https://packagist.org/packages/nerou/systemd)
