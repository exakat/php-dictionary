---
type: "PHP Feature"
title: "htmlentities()"
description: "``htmlentities()`` is a native PHP function which converts special characters in a string to their equivalent in HTML."
resource: "https://www.php.net/manual/en/function.htmlentities.php"
tags: ["web"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# htmlentities()

``htmlentities()`` is a native PHP function which converts special characters in a string to their equivalent in HTML.

``htmlentities()`` takes the string to be encoded, as an argument. It also accepts an argument ``$encoding`` to specify what the original encoding of the string is, in particular when it is not ``utf-8``, which is the default configuration.

There are options to control which characters shall be encoded: for example, single and double quotes may be converted or not, with ``ENT_QUOTES`` and ``ENT_NOQUOTES``, respectively.

Finally, ``$double_encode`` makes ``htmlentities()`` skip encoding a second time any entities already set in the string.

The opposite of ``htmlentities()`` is ``html_entity_decode()``.

```php
<?php

    $str = "A 'quote' is <b>bold</b>";
    
    echo htmlentities($str);
    echo "\n\n";
    echo htmlentities($str, ENT_COMPAT);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.htmlentities.php](https://www.php.net/manual/en/function.htmlentities.php)

## See Also
- [HTML Entity List](https://htmlentities.io/articles/html-entities-list-reference)

## Related
- [HyperText Markup Language (HTML)](/features/html.md)
- [Entities](/features/entity.md)
- [default_charset](/features/default_charset.md)
- [html_entity_decode](/features/html_entity_decode.md)
- [htmlspecialchars](/features/htmlspecialchars.md)

