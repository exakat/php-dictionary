---
type: "concept"
title: "Grammar"
description: "The grammar of a language is the formal set of rules that describes which sequences of tokens form valid statements and expressions."
resource: "https://en.wikipedia.org/wiki/Formal_grammar"
tags: ["source code", "concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Grammar

The grammar of a language is the formal set of rules that describes which sequences of tokens form valid statements and expressions. PHP's grammar is defined in a Yacc/Bison file, in ``Zend/zend_language_parser.y`` of the engine source code, that is compiled into the parser used by the Zend Engine.

The grammar operates on tokens produced by the lexer/tokenizer, and is distinct from semantics: a piece of code may be grammatically valid, yet still fail at compile-time or run-time. For example, calling an undefined function.

Ambiguities or changes in the grammar are a common source of backward-incompatible changes between PHP versions, such as the reinterpretation of nested ternary operators or the introduction of new reserved keywords.

```php
<?php

    // Grammatically valid, but each statement fails differently
    $a = ; // parse error: grammar violation, no expression after '='
    
    foo(); // grammar is fine, but 'foo' is undefined: a runtime error, not a grammar one

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Formal_grammar](https://en.wikipedia.org/wiki/Formal_grammar)

## See Also
- [PHP's zend_language_parser.y (source)](https://github.com/php/php-src/blob/master/Zend/zend_language_parser.y)
- [Grammar](https://phplang.org/spec/19-grammar.html)

## Related
- [Parser](/features/parser.md)
- [Tokenizer](/features/tokenizer.md)
- [Syntax](/features/syntax.md)
- [Syntax Error](/features/syntax-error.md)

