# Compile
To compile, or compilation, is the process to turn the source code into machine code for direct execution. 

Generally speaking, PHP is interpreted, so its code is directly run by the PHP engine. It is initially linted, for syntax correctedness, then converted into opcodes, which are run by the engine.

Some tools convert PHP directly a binary, such as kphp. 

There are tools to convert PHP into a binary file, such as static-php-cli or roadrunner. These solutions merge the PHP engine with the target code. 

Other tools transpile PHP code to another language, such as Rust or .NET, and then, compile it to a binary file. These are not common approaches.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compile.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/compile.ini.html","name":"Compile","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:15:20 +0000","dateModified":"Sun, 12 Jul 2026 20:15:20 +0000","description":"To compile, or compilation, is the process to turn the source code into machine code for direct execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Compile.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Lint_(software))**
## See Also

+ [kphp](https://vkcom.github.io/kphp/)
+ [static-php-cli](https://github.com/crazywhalecc/static-php-cli)
+ [RoadRunner](https://roadrunner.dev/)

## Related

+ [Linting](linting.ini.html)
+ [Interpreted](interpreted.ini.html)
+ [Ahead Of Time](aot.ini.html)
+ [\_\_halt\_compiler()](halt-compiler.ini.html)
+ [Just In Time (JIT)](jit.ini.html)
+ [Transpile](transpile.ini.html)
+ [Virtual Machine (VM)](runtime.ini.html)
+ [Artifact](artifact.ini.html)
+ [Monomorphization](monomorphization.ini.html)
+ [Order Of Execution](order-of-execution.ini.html)
