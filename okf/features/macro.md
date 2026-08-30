---
type: "concept"
title: "Macro"
description: "A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation."
resource: "https://en.wikipedia.org/wiki/Macro_(computer_science)"
tags: ["concept", "metaprogramming", "unsupported"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Macro

A macro is a rule or pattern that maps a source text or syntax fragment to a replacement, which is then substituted before or during compilation. Macros operate at the level of source text, for example the C preprocessor, tokens, for example Rust ``macro_rules!``, or AST nodes, asin Lisp and Elixir, and allow programmers to extend the syntax of a language or eliminate repetitive code without the overhead of a function call.

Two main families of macros exist:

+ Textual macros non-hygienic: the C preprocessor ``#define`` replaces a name with a literal text fragment. Variable names inside the macro can accidentally shadow names in the calling scope, leading to subtle bugs.
+ Hygienic macros: as in Scheme's ``syntax-rules``, Rust's ``macro_rules!``, and Elixir's ``defmacro``, each identifier introduced by the macro is automatically renamed to prevent accidental capture of caller variables.

PHP has no native macro system. PHP source code is parsed and executed directly by the Zend Engine; there is no macro-expansion phase. The mechanisms that approximate macros are:

+ ``eval()``: executes a PHP string at runtime, but provides no hygiene and operates after parsing.
+ Token-level preprocessors such as ``yay`` run before the PHP parser and perform textual or token-level substitutions, but offer no hygiene guarantees.
+ ``nikic/php-parser`` allows full AST rewriting via a visitor pattern, enabling macro-like transformations with explicit, manually implemented scope tracking.
+ Compile-time constants ``const`` and class constants serve a narrow, value-substitution role similar to object-like C macros, but without the generality of function-like macros.

See also hygienic macro for the hygiene-specific aspects of macro systems.

```php
<?php

    // PHP has no macro expansion. Constants are the closest equivalent
    // to simple object-like C macros (#define MAX 100).
    const MAX_RETRIES = 3;

    // For function-like macros, PHP uses ordinary functions.
    // No inline expansion; call overhead applies.
    function clamp(int $value, int $min, int $max): int {
        return max($min, min($max, $value));
    }

    // Token-level macro with the yay preprocessor (external tool, run before PHP):
    //   macro {clamp(·v, ·lo, ·hi)} >> {max(·lo, min(·hi, ·v))}
    // This expands inline but is not hygienic.

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Macro_(computer_science)](https://en.wikipedia.org/wiki/Macro_(computer_science))

## See Also
- [yay: PHP macro preprocessor](https://github.com/marcioAlmada/yay)
- [nikic/php-parser](https://github.com/nikic/PHP-Parser)

## Related
- [Hygienic Macro](/features/hygienic-macro.md)
- [Metaprogramming](/features/metaprogramming.md)
- [Homoiconicity](/features/homoiconicity.md)
- [Eval()](/features/eval.md)
- [Token](/features/token.md)
- [Code Generation](/features/code-generation.md)
- [Const](/features/const.md)

## Details
- Packagist: [marcioalmada/yay](https://packagist.org/packages/marcioalmada/yay)

