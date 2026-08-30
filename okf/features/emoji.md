---
type: "character"
title: "Emoji"
description: "Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication."
resource: "https://unicode.org/emoji/charts/full-emoji-list.html"
tags: ["character", "name"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Emoji

Emojis are small digital images or icons used to express ideas, emotions, objects, or concepts in electronic communication. The word ``emoji`` comes from Japanese, combining ``e``, picture and ``moji``, character or letter.

```php
<?php

    // Emoji, directly in the string, when the file is also supporting Unicode, like with UTF8
    echo "Hello 😊";
    
    // Emoji, with a PHP escape sequence
    echo "\u{1F60A}";
    
    // Emoji, with an HTML escape sequence
    echo "&#128522;";

?>
```

## Documentation
- [https://unicode.org/emoji/charts/full-emoji-list.html](https://unicode.org/emoji/charts/full-emoji-list.html)

## See Also
- [Emoji list](https://en.wikipedia.org/wiki/Emoji)
- [Where you can (and can't) use Emoji in PHP](https://shkspr.mobi/blog/2024/04/where-you-can-and-cant-use-emoji-in-php/)

## Related
- [Escape Sequences](/features/escape-sequence.md)
- [Unicode](/features/unicode.md)

