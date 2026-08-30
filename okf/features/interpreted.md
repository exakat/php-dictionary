---
type: "concept"
title: "Interpreted"
description: "An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler."
resource: "https://en.wikipedia.org/wiki/Interpreter_(computing)"
tags: ["concept", "adjectif"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Interpreted

An interpreted language is a programming language in which the source code is executed line by line by another program called an interpreter, rather than being converted directly into machine code by a compiler.

An interpreted language has no compile phase, and runs immediately. It gives it a shorter cycle to update the code and test it. 

On the other hand, compiled languages take more time to review the code at compile time, and also add an optimisation phase: in the end, the result is often smaller and faster.

PHP is known to be an interpreted language. This is not strictly the case, as PHP make keep the code compiled in bytecode, or use JIT to compile the frequent code faster. 

There are also tools to compile PHP directly to binary code for compiled execution.

## Documentation
- [https://en.wikipedia.org/wiki/Interpreter_(computing)](https://en.wikipedia.org/wiki/Interpreter_(computing))

## See Also
- [Can You Compile PHP Code Into a Binary-Like File to Run via Bytecode Interpreter? Explained](https://www.codegenes.net/blog/can-you-compile-php-code-and-upload-a-binary-ish-file-which-will-just-be-run-by-the-byte-code-interpreter/)
- [Is PHP Compiled or Interpreted? The Truth About PHP Execution Explained](https://www.tutorialpedia.org/blog/is-php-compiled-or-interpreted/)

## Related
- [Transpile](/features/transpile.md)
- [Compile](/features/compile.md)
- [Just In Time (JIT)](/features/jit.md)
- [Ahead Of Time](/features/aot.md)

