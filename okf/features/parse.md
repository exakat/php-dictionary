---
type: "PHP Feature"
title: "Parse"
description: "To parse, or parsing, refers to the process of analyzing and interpreting the structure of data to extract meaningful information."
resource: "https://en.wikipedia.org/wiki/Parsing"
tags: ["php", "languages"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Parse

To parse, or parsing, refers to the process of analyzing and interpreting the structure of data to extract meaningful information.

PHP has a phase of parsing: it is handled by the tokenizer, a part of the PHP engine, that reads the text file with the source code, and outputs the atomic blocks it understood, or a Fatal error. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing.

```php
<?php

if (!json_validate($json)) {
    throw new Exception('invalid JSON data');
}

$object = json_decode($json);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Parsing](https://en.wikipedia.org/wiki/Parsing)

## See Also
- [Parse, don’t validate](https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/)

## Related
- [Sanitation](/features/sanitation.md)
- [Validation](/features/validation.md)
- [parse_str()](/features/parse_str.md)
- [ParseError](/features/parseerror.md)
- [Parser](/features/parser.md)
- [Phptoken](/features/phptoken.md)
- [Lint, Won't Execute](/features/lint-wont-execute.md)
- [parse_url()](/features/parse_url.md)

## Details
- Extension: ext-tokenizer

