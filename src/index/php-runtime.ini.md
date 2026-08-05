# PHP Runtime
The PHP runtime is the engine that executes PHP code. It includes the PHP core extensions, the custom ones. 

There is an official PHP runtime, provided by the PHP official website. It is maintained by the PHP fundation. It is mostly written in C.

There are also custom runtimes, which takes the PHP code as input, and execute it. They are build with other languages, and thrive to execute as much as possible of PHP's features, though they have to make trade off for fit with specific features: for example, extensions libraries are not always available.

+ PHP on Rust
+ PHP on Zig
+ PHP on Java, via Quercus
+ PHP on Wasm

These projects are complete rewrite of PHP with another technology. This is distinct from embedding PHP, where an original PHP engine is incorporated in another language.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-runtime.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/php-runtime.ini.html","name":"PHP Runtime","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jul 2026 13:36:58 +0000","dateModified":"Thu, 23 Jul 2026 13:36:58 +0000","description":"The PHP runtime is the engine that executes PHP code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/PHP Runtime.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## See Also

+ [PHP on Rust](https://github.com/turbine-dev/turbine)
+ [PHP on Zig](https://github.com/nvms/zphp)
+ [PHP on Java](https://www.caucho.com/resin-3.1/doc/quercus.xtp)
+ [PHP on wasm](https://github.com/seanmorris/php-wasm)

## Related

+ [Embed](embed.ini.html)
+ [Transpile](transpile.ini.html)
+ [Binary](binary.ini.html)
