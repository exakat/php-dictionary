---
type: "concept"
title: "Multi-pass Algorithm"
description: "A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would."
resource: "https://en.wikipedia.org/wiki/Multi-pass_compiler"
tags: ["algorithm", "concept", "compiler"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Multi-pass Algorithm

A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would. It trades memory or execution time for simplicity, correctness, or completeness, since a later pass can rely on a full, already-computed picture of the earlier ones, rather than on partial, streamed information.

Compilers are the archetypal example: a multi-pass compiler will first tokenize, then parse into an AST, resolve symbols, and only then generate code, each phase being an independent pass over an evolving representation of the program, instead of translating source directly to machine code in one sweep.

Exakat itself follows a multi-pass approach: it tokenizes the source, builds an AST, loads it into a graph database, and only then runs each analyzer as its own pass over that graph, instead of examining the source code once, top to bottom.

## Documentation
- [https://en.wikipedia.org/wiki/Multi-pass_compiler](https://en.wikipedia.org/wiki/Multi-pass_compiler)

## See Also
- [Abstract syntax tree (Wikipedia)](https://en.wikipedia.org/wiki/Abstract_syntax_tree)
- [Compiler (Wikipedia)](https://en.wikipedia.org/wiki/Compiler)

## Related
- [Parser](/features/parser.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Compiler](/features/compiler.md)
- [Tokenizer](/features/tokenizer.md)

