---
type: "character"
title: "Whitespace"
description: "Whitespace refers to spaces, tabulations, and newline characters: those characters are invisible on a white background, hence the name."
resource: "https://en.wikipedia.org/wiki/Whitespace_character"
tags: ["character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Whitespace

Whitespace refers to spaces, tabulations, and newline characters: those characters are invisible on a white background, hence the name. 

Whitespace is used to format and organize the code, making it more readable. 

However, whitespace is generally not significant in terms of parsing; the PHP interpreter usually ignores whitespace. There are some rare situations where the whitespaces have a role: in heredoc syntax, and for formatting floats.

Whitespace is not a notion specific to PHP: other languages have them too. For example, ``trim()`` removes whitespace at the beginning and the end of a string value.

```php
<?php

    $heredoc = <<<HEREDOC
        One tab shift
        Here
        HEREDOC;
    
    $x = 1 . 0; // This is 10
    
    $y = 1.0; // This is 1.0
    
    //$z = 1. 0; // This is a syntax error

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Whitespace_character](https://en.wikipedia.org/wiki/Whitespace_character)

## See Also
- [php_strip_whitespace()](https://www.php.net/manual/en/function.php-strip-whitespace.php)
- [Be careful of whitespace in .php files](https://avdi.codes/be-careful-of-whitespace-in-php-files/)

## Related
- [Token](/features/token.md)

