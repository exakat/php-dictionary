---
type: "PHP Feature"
title: "Parser"
description: "The PHP parser is a piece of software that processes a piece of text and extracts tokens, with their PHP meanings."
resource: "https://en.wikipedia.org/wiki/Parsing#Parser"
tags: ["internals"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Parser

The PHP parser is a piece of software that processes a piece of text and extracts tokens, with their PHP meanings. The tokens are atomic pieces of information, that are grouped later to build a larger message.

PHP includes an internal parser, that reads the source code, and produces the PHP tokens, the AST and later, the opcodes.

```php
<?php

    if (!json_validate($json)) {
        throw new Exception('invalid JSON data');
    }
    
    $object = json_decode($json);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Parsing#Parser](https://en.wikipedia.org/wiki/Parsing#Parser)

## See Also
- [Parse, don’t validate](https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/)
- [tree-sitter-language-pack](https://github.com/kreuzberg-dev/tree-sitter-language-pack)

## Related
- [Sanitation](/features/sanitation.md)
- [Validation](/features/validation.md)
- [Parse](/features/parse.md)
- [ParseError](/features/parseerror.md)
- [Sandbox](/features/sandbox.md)
- [ANTLR4](/features/antlr4.md)
- [Grammar](/features/grammar.md)
- [Multi-pass Algorithm](/features/multi-pass-algorithm.md)
- [Tokenizer](/features/tokenizer.md)

## Details
- Packagist: [nikic/PHP-Parser](https://packagist.org/packages/nikic/PHP-Parser)
- Packagist: [parsica-php/parsica](https://packagist.org/packages/parsica-php/parsica)

