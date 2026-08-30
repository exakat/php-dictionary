---
type: "disambiguation"
title: "Slash /"
description: "``/`` is character, used in various situations: + Decimal division: ``3 / 2`` + Path separator: ``/user/php/document.txt`` + Regex delimiter: ``/[abc]/i``, very frequent but not the only one + Regex escape char: ``/a\\.b/i`` + Double slash is the marker of a comment: ``// a comment till the end of the line`` + With star, ``/*`` is a multi line comment: ``/* */`` + With double star, ``/**`` is a phpdoc comment: ``/** */`` + ``stripslashes()`` removes slashes used for escaping, in strings + ``addslashes()`` adds slashes for escaping, in strings + ``addcslashes()`` adds slashes for escaping arbitrary characters The slash looks like the back-slash character ``\\``, though they have very different use."
resource: "https://en.wikipedia.org/wiki/Slash_(punctuation)"
tags: ["disambiguation", "character"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Slash /

``/`` is character, used in various situations: 

+ Decimal division: ``3 / 2``
+ Path separator: ``/user/php/document.txt``
+ Regex delimiter: ``/[abc]/i``, very frequent but not the only one
+ Regex escape char: ``/a\.b/i``
+ Double slash is the marker of a comment: ``// a comment till the end of the line``
+ With star, ``/*`` is a multi line comment: ``/* */``
+ With double star, ``/**`` is a phpdoc comment: ``/** */``
+ ``stripslashes()`` removes slashes used for escaping, in strings
+ ``addslashes()`` adds slashes for escaping, in strings
+ ``addcslashes()`` adds slashes for escaping arbitrary characters

The slash looks like the back-slash character ``\``, though they have very different use.

```php
<?php

    file_get_contents('/tmp/test.txt');

    echo 1234 / 2;

    // Just a comment

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Slash_(punctuation)](https://en.wikipedia.org/wiki/Slash_(punctuation))

## See Also
- [Understanding the Backslash (\) and Forward Slash (/) in Programming](https://medium.com/@rishabhsharmaa1/understanding-the-backslash-and-forward-slash-in-programming-fb8b21457704)

## Related
- [Backslash \](/features/back-slash.md)
- [Escape Character](/features/escape-character.md)
- [Portability](/features/portability.md)
- [Pound #](/features/pound.md)

