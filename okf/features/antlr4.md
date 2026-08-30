---
type: "PHP Feature"
title: "ANTLR4"
description: "``ANTLR``, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript."
resource: "https://www.antlr.org/"
tags: ["tool", "compiler"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# ANTLR4

``ANTLR``, ANother Tool for Language Recognition, currently at its 4th major version, is a parser generator: given a formal grammar describing a language's syntax, it generates a lexer and a parser for that language, in a target language of choice, such as Java, C#, Python, Go or JavaScript. There is no first-class PHP target, though community-maintained backends exist.

``ANTLR4`` grammars are ``LL(*)``-based and produce a parse tree, which can then be walked with a generated Listener or Visitor. It is widely used to build DSLs, configuration-file parsers, and new implementations of existing languages, including some PHP parsers used by third-party tooling.

Most PHP static analyzers do not rely on ``ANTLR``: they use PHP's own tokenizer, then build their own AST directly, tailored to the needs of static analysis, rather than going through a generic, grammar-driven parser.

## Documentation
- [https://www.antlr.org/](https://www.antlr.org/)

## See Also
- [ANTLR4 grammars repository](https://github.com/antlr/grammars-v4)

## Related
- [Parser](/features/parser.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Tokenizer](/features/tokenizer.md)

