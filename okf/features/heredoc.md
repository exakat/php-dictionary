---
type: "PHP Feature"
title: "Heredocs"
description: "Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation."
resource: "https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc"
tags: ["feature", "string", "delimiter"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Heredocs

Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.

```php
<?php

$heredoc = <<<DELIM
This is a long text.

$variable will not be replaced, and the text stays intact.

DELIM;

$heredoc = <<<DELIM
    This is an indented text.
    DELIM;

?>
```

## Documentation
- [https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc)

## See Also
- [PHP Heredoc](https://www.phptutorial.net/php-tutorial/php-heredoc/)

## Related
- [Nowdocs](/features/nowdoc.md)
- [String](/features/string.md)
- [Concatenation .](/features/concatenation.md)
- [Indentation](/features/indentation.md)
- [Interpolation](/features/interpolation.md)
- [Single Quotes Strings](/features/single-quote.md)
- [Tabulation](/features/tabulation.md)
- [Space](/features/space.md)
- [Double Quotes Strings](/features/double-quote.md)
- [Empty String](/features/empty-string.md)
- [Escape Character](/features/escape-character.md)

## Details
- PHP since: 5.5

