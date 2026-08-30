---
type: "concept"
title: "Compile"
description: "To compile, compiling, or compilation, is the process to turn the source code into machine code for direct execution, producing compiled code."
resource: "https://en.wikipedia.org/wiki/Lint_(software)"
tags: ["concept", "lifecycle"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Compile

To compile, compiling, or compilation, is the process to turn the source code into machine code for direct execution, producing compiled code.

Generally speaking, PHP is interpreted, so its code is directly run by the PHP engine. It is initially linted, for syntax correctness, then converted into opcodes, which are run by the engine.

Some tools convert PHP directly to a binary, such as KPHP.

There are tools to convert PHP into a binary file, such as static-php-cli or roadrunner. These solutions merge the PHP engine with the target code. 

Other tools transpile PHP code to another language, such as Rust or .NET, and then, compile it to a binary file. These are not common approaches.

## Documentation
- [https://en.wikipedia.org/wiki/Lint_(software)](https://en.wikipedia.org/wiki/Lint_(software))

## See Also
- [kphp](https://vkcom.github.io/kphp/)
- [static-php-cli](https://github.com/crazywhalecc/static-php-cli)
- [RoadRunner](https://roadrunner.dev/)

## Related
- [Linting](/features/linting.md)
- [Interpreted](/features/interpreted.md)
- [Ahead Of Time](/features/aot.md)
- [Just In Time (JIT)](/features/jit.md)
- [Transpile](/features/transpile.md)
- [Artifact](/features/artifact.md)
- [Monomorphization](/features/monomorphization.md)
- [Order Of Execution](/features/order-of-execution.md)

