---
type: "character"
title: "Tabulation"
description: "A tabulation is a whitespace character, that often represents the equivalent of four space characters."
resource: "https://en.wikipedia.org/wiki/Tab_character"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Tabulation

A tabulation is a whitespace character, that often represents the equivalent of four space characters.

A tabulation is represented by the escape sequence ``\t``, in double quote strings. It is also the ASCII code 9.

Tabulations are important when formatting code, and are opposed to spaces. 

Tabulations are important for heredoc syntax, in particular in its relaxed syntax.

There are horizontal tabulations, which are the most commonly used, and vertical tabulations, with the ASCII code 11 and sequence ``\v``.

```php
<?php

    echo "\t";
    echo chr(9); // ASCII code 9

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Tab_character](https://en.wikipedia.org/wiki/Tab_character)

## See Also
- [Vertical Tab (\v) in PHP](https://mojoauth.com/special-characters/vertical-tab-v-in-php#understanding-the-usage-of-vertical-tab-v-in-php)
- [Elastic tabstops - a better way to indent and align code](https://nick-gravgaard.com/elastic-tabstops/)

## Related
- [Space](/features/space.md)
- [Heredocs](/features/heredoc.md)
- [Indentation](/features/indentation.md)
- [Nowdocs](/features/nowdoc.md)

