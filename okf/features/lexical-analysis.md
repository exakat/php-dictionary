---
type: "static analysis"
title: "Lexical Analysis"
description: "Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser."
resource: "https://en.wikipedia.org/wiki/Lexical_analysis"
tags: ["analysis", "static analysis", "compiler"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Lexical Analysis

Lexical analysis, also called tokenisation or scanning, is the first phase of a compiler or static analyser. It reads a stream of source characters and groups them into meaningful units called tokens.

Each token carries a type, keyword, identifier, operator, literal, comment, whitespace, and the text it was matched from. The lexer discards whitespace and comments, or classifies them as separate token types when they are relevant.

PHP provides ``token_get_all()`` to tokenise a PHP source string into the same tokens the PHP engine itself produces, using the constants defined in the ``T_*`` family, like ``T_ECHO``, ``T_VARIABLE``, ``T_STRING``, etc. This is useful for static analysis tools, code formatters, and documentation generators.

Lexical analysis operates on the surface form of the code and has no notion of program structure or meaning. Those concerns belong to parsing and semantic analysis.

```php
<?php

    $source = '<?php echo $greeting . "world"; ?>';
    $tokens = token_get_all($source);
    
    foreach ($tokens as $token) {
        if (is_array($token)) {
            [$id, $text, $line] = $token;
            echo token_name($id) . ': ' . var_export($text, true) . PHP_EOL;
        } else {
            echo 'SYMBOL: ' . var_export($token, true) . PHP_EOL;
        }
    }

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Lexical_analysis](https://en.wikipedia.org/wiki/Lexical_analysis)

## See Also
- [token_get_all()](https://www.php.net/manual/en/function.token-get-all.php)
- [Lexical Structure](https://phplang.org/spec/09-lexical-structure.html)

## Related
- [Lexical Variable](/features/lexical.md)
- [Analysis](/features/analysis.md)
- [Abstract Syntactic Tree (AST)](/features/ast.md)
- [Token](/features/token.md)
- [Semantic Analysis](/features/semantic-analysis.md)
- [Control Flow Analysis](/features/control-flow-analysis.md)
- [Data Flow Analysis (DFA)](/features/data-flow-analysis.md)
- [Symbolic Analysis](/features/symbolic-analysis.md)
- [Pattern-Based Analysis](/features/pattern-based-analysis.md)

## Details
- Extension: ext-tokenizer

