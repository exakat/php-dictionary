# Compile
To compile, or compilation, is the process to turn the source code into machine code for direct execution. 

Generally speaking, PHP is interpreted, so its code is directly run by the PHP engine. It is initially linted, for syntax correctness, then converted into opcodes, which are run by the engine.

Some tools convert PHP directly to a binary, such as KPHP.

There are tools to convert PHP into a binary file, such as static-php-cli or roadrunner. These solutions merge the PHP engine with the target code. 

Other tools transpile PHP code to another language, such as Rust or .NET, and then, compile it to a binary file. These are not common approaches.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html","name":"Compile","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:31:02 +0000","dateModified":"Sat, 08 Aug 2026 14:31:02 +0000","description":"To compile, or compilation, is the process to turn the source code into machine code for direct execution","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Compile.html"]}],"alternateName":["compiled","compiling"],"keywords":["concept","lifecycle"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/linting.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interpreted.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/aot.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/halt-compiler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jit.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/transpile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtime.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/artifact.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/monomorphization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/order-of-execution.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/en.wikipedia.org\/wiki\/Lint_(software)"},{"@type":"CreativeWork","name":"kphp","url":"https:\/\/vkcom.github.io\/kphp\/"},{"@type":"CreativeWork","name":"static-php-cli","url":"https:\/\/github.com\/crazywhalecc\/static-php-cli"},{"@type":"CreativeWork","name":"RoadRunner","url":"https:\/\/roadrunner.dev\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.21","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"compile"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Lint_(software))**
## See Also

+ [kphp](https://vkcom.github.io/kphp/)
+ [static-php-cli](https://github.com/crazywhalecc/static-php-cli)
+ [RoadRunner](https://roadrunner.dev/)

## Related

+ [Linting](linting.html)
+ [Interpreted](interpreted.html)
+ [Ahead Of Time](aot.html)
+ [\_\_halt\_compiler()](halt-compiler.html)
+ [Just In Time (JIT)](jit.html)
+ [Transpile](transpile.html)
+ [Virtual Machine (VM)](runtime.html)
+ [Artifact](artifact.html)
+ [Monomorphization](monomorphization.html)
+ [Order Of Execution](order-of-execution.html)
