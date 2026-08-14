# PHP Runtime
The PHP runtime is the engine that executes PHP code. It includes the PHP core extensions, the custom ones. 

There is an official PHP runtime, provided by the PHP official website. It is maintained by the PHP Foundation. It is mostly written in C.

There are also custom runtimes, which take the PHP code as input, and execute it. They are built with other languages, and strive to execute as much as possible of PHP's features, though they have to make trade-offs to fit specific features: for example, extensions libraries are not always available.

+ PHP on Rust
+ PHP on Zig
+ PHP on Java, via Quercus
+ PHP on Wasm

These projects are complete rewrites of PHP with another technology. This is distinct from embedding PHP, where an original PHP engine is incorporated in another language.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-runtime.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-runtime.html","name":"PHP Runtime","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:20 +0000","dateModified":"Sat, 08 Aug 2026 14:32:20 +0000","description":"The PHP runtime is the engine that executes PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Runtime.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"php-runtime"}]}]}</script>
## See Also

+ [PHP on Rust](https://github.com/turbine-dev/turbine)
+ [PHP on Zig](https://github.com/nvms/zphp)
+ [PHP on Java](https://www.caucho.com/resin-3.1/doc/quercus.xtp)
+ [PHP on wasm](https://github.com/seanmorris/php-wasm)

## Related

+ [Embed](embed.html)
+ [Transpile](transpile.html)
+ [Binary](binary.html)
