# ANTLR4
ANTLR, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript. There is no first-class PHP target, though community-maintained backends exist.

ANTLR4 grammars are ``LL(*)``-based and produce a parse tree, which can then be walked with a generated Listener or Visitor. It is widely used to build DSLs, configuration-file parsers, and reimplementations of existing languages, including some PHP parsers used by third-party tooling.

Exakat, like most PHP static analyzers, does not rely on ANTLR: it uses PHP's own tokenizer, then builds its own AST directly, tailored to the needs of static analysis, rather than going through a generic, grammar-driven parser.
## See Also

+ [ANTLR4 grammars repository](https://github.com/antlr/grammars-v4)

Related : [Parser](Parser), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Tokenizer](Tokenizer)
