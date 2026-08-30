---
type: "acronym"
title: "Just In Time (JIT)"
description: "Just-In-Time compilation is a technique used in computer science and programming languages to improve the runtime performance of code execution."
resource: "https://php.watch/versions/8.0/JIT"
tags: ["acronym", "internals", "feature"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Just In Time (JIT)

Just-In-Time compilation is a technique used in computer science and programming languages to improve the runtime performance of code execution.

In traditional interpretation of programming languages like PHP, code is executed line by line by an interpreter. This can lead to some performance bottlenecks, especially for code that is executed frequently or for applications that require high throughput.

With Just-In-Time compilation, the code is not interpreted line by line. Instead, it's analyzed and compiled into machine code just before it's executed. This compiled code is then stored in memory and can be executed much more efficiently than interpreted code. This approach can significantly improve the performance of a programming language.

## Documentation
- [https://php.watch/versions/8.0/JIT](https://php.watch/versions/8.0/JIT)

## See Also
- [Exploring the New PHP JIT Compiler](https://www.zend.com/blog/exploring-new-php-jit-compiler)
- [PHP 8.4 JIT Under the Microscope: Benchmarking Real Symfony 7.4 Applications (Part 1)](https://medium.com/@laurentmn/%EF%B8%8F-php-8-4-jit-under-the-microscope-benchmarking-real-symfony-7-4-applications-part-1-c685e1326f5e)

## Related
- [Ahead Of Time](/features/aot.md)
- [Compile](/features/compile.md)
- [Opcache](/features/opcache.md)
- [Bottleneck](/features/bottleneck.md)
- [Interpreted](/features/interpreted.md)
- [Monomorphization](/features/monomorphization.md)
- [Static Single Assignment Form (SSA)](/features/ssa.md)
- [Compile-time Evaluation](/features/compile-time-evaluation.md)
- [Compiler](/features/compiler.md)
- [Memory Arena](/features/memory-arena.md)
- [OPcache Preloading](/features/opcache-preloading.md)

## Details
- PHP since: 8.0+

