# PHP Runtime
The PHP runtime is the engine that executes PHP code. It includes the PHP core extensions, and the custom ones.

There is an official PHP runtime, provided by the PHP official website. It is maintained by the PHP Foundation. It is mostly written in C.

There are also custom runtimes, which take the PHP code as input, and execute it. They are built with other languages, and strive to execute as much as possible of PHP's features, though they have to make trade-offs to fit specific features: for example, extension libraries are not always available.

+ PHP on Rust
+ PHP on Zig
+ PHP on Java, via Quercus
+ PHP on Wasm

These projects are complete rewrites of PHP with another technology. This is distinct from embedding PHP, where an original PHP engine is incorporated in another language.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-runtime.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-runtime.html","name":"PHP Runtime","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 01 Sep 2026 11:41:33 +0000","dateModified":"Tue, 01 Sep 2026 11:41:33 +0000","description":"The PHP runtime is the engine that executes PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-runtime.html"]}],"alternateName":["php-vm","php-binary"],"keywords":["php"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/embed.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transpile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/binary.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/introduction.php"},{"@type":"CreativeWork","name":"PHP on Rust","url":"https:\/\/github.com\/turbine-dev\/turbine"},{"@type":"CreativeWork","name":"PHP on Zig","url":"https:\/\/github.com\/nvms\/zphp"},{"@type":"CreativeWork","name":"PHP on Java","url":"https:\/\/www.caucho.com\/resin-3.1\/doc\/quercus.xtp"},{"@type":"CreativeWork","name":"PHP on wasm","url":"https:\/\/github.com\/seanmorris\/php-wasm"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-runtime"}]}]}</script>
**[Documentation](https://www.php.net/manual/en/introduction.php)**
## See Also

+ [PHP on Rust](https://github.com/turbine-dev/turbine)
+ [PHP on Zig](https://github.com/nvms/zphp)
+ [PHP on Java](https://www.caucho.com/resin-3.1/doc/quercus.xtp)
+ [PHP on wasm](https://github.com/seanmorris/php-wasm)

## Related

+ [Embed](embed.html)
+ [Transpile](transpile.html)
+ [Binary](binary.html)
