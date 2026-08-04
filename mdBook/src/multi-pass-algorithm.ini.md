# Multi-pass Algorithm
A multi-pass algorithm processes its input more than once, each pass building on information gathered, or output produced, by the previous one, instead of trying to solve the whole problem while reading the data only a single time, as a one-pass, or single-pass, algorithm would. It trades memory or execution time for simplicity, correctness, or completeness, since a later pass can rely on a full, already-computed picture of the earlier ones, rather than on partial, streamed information.

Compilers are the archetypal example: a multi-pass compiler will first tokenize, then parse into an AST, resolve symbols, and only then generate code, each phase being an independent pass over an evolving representation of the program, instead of translating source directly to machine code in one sweep.

Exakat itself follows a multi-pass approach: it tokenizes the source, builds an AST, loads it into a graph database, and only then runs each analyzer as its own pass over that graph, instead of examining the source code once, top to bottom.
Related : [Parser](Parser), [Abstract Syntactic Tree (AST)](Abstract Syntactic Tree (AST)), [Compiler](Compiler), [Tokenizer](Tokenizer)
