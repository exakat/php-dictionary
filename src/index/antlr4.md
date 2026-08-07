# ANTLR4
ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript. There is no first-class PHP target, though community-maintained backends exist.

ANTLR4 grammars are ``LL(*)``-based and produce a parse tree, which can then be walked with a generated Listener or Visitor. It is widely used to build DSLs, configuration-file parsers, and reimplementations of existing languages, including some PHP parsers used by third-party tooling.

Exakat, like most PHP static analyzers, does not rely on ANTLR: it uses PHP's own tokenizer, then builds its own AST directly, tailored to the needs of static analysis, rather than going through a generic, grammar-driven parser.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/antlr4.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/antlr4.html","name":"ANTLR4","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 14:35:01 +0000","dateModified":"Thu, 16 Jul 2026 14:35:01 +0000","description":"ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ANTLR4.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"ANTLR4"}]}]}</script>
**[Documentation](https://www.antlr.org/)**
## See Also

+ [ANTLR4 grammars repository](https://github.com/antlr/grammars-v4)

## Related

+ [Parser](parser.html)
+ [Abstract Syntactic Tree (AST)](ast.html)
+ [Tokenizer](tokenizer.html)
