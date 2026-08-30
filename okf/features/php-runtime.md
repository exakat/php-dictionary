---
type: "PHP Feature"
title: "PHP Runtime"
description: "The PHP runtime is the engine that executes PHP code."
tags: ["php"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# PHP Runtime

The PHP runtime is the engine that executes PHP code. It includes the PHP core extensions, and the custom ones.

There is an official PHP runtime, provided by the PHP official website. It is maintained by the PHP Foundation. It is mostly written in C.

There are also custom runtimes, which take the PHP code as input, and execute it. They are built with other languages, and strive to execute as much as possible of PHP's features, though they have to make trade-offs to fit specific features: for example, extension libraries are not always available.

+ PHP on Rust
+ PHP on Zig
+ PHP on Java, via Quercus
+ PHP on Wasm

These projects are complete rewrites of PHP with another technology. This is distinct from embedding PHP, where an original PHP engine is incorporated in another language.

## See Also
- [PHP on Rust](https://github.com/turbine-dev/turbine)
- [PHP on Zig](https://github.com/nvms/zphp)
- [PHP on Java](https://www.caucho.com/resin-3.1/doc/quercus.xtp)
- [PHP on wasm](https://github.com/seanmorris/php-wasm)

## Related
- [Embed](/features/embed.md)
- [Transpile](/features/transpile.md)
- [Binary](/features/binary.md)

