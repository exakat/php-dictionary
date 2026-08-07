# Execution Path
The execution path refers to the sequence in which the PHP interpreter processes and executes the code. By default, expressions are executed one after the other, and the execution path has many possible paths:

+ Code Entry Point, such as the called file, but also controllers, in mvc frameworks
+ Sequential Execution, where expressions are processed one after the other
+ Includes and Requires, which stop the execution in the current file and move to another file
+ Function and Method Calls, which stop the execution in the current file and move it to another part of the code
+ Control Structures, like ``goto``, ``foreach``, ``ifthen``, which choose a path or another with the current file
+ Error Handling, with error triggers and exceptions, and unhandled issues
+ Exit and Die, or simply the end of the file.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-path.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/execution-path.html","name":"Execution Path","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 20 Jul 2026 16:45:05 +0000","dateModified":"Mon, 20 Jul 2026 16:45:05 +0000","description":"The execution path refers to the sequence in which the PHP interpreter processes and executes the code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Execution Path.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Execution Path"}]}]}</script>
**[Documentation](https://en.wikipedia.org/wiki/Control_flow)**
## Related

+ [Call Graph](call-graph.html)
