---
type: "concept"
title: "Plain Text"
description: "Plain Text refers to data that is human-readable, and not protected by any cryptography transformation."
resource: "https://en.wikipedia.org/wiki/Plain_text"
tags: ["concept"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Plain Text

Plain Text refers to data that is human-readable, and not protected by any cryptography transformation. It may be read and understood as is.

Plain text is the result of a cracking process, or deciphering, where the original data is crypted, and that transformation was lifted.

```php
<?php

    $plainText = 'PHP Rocks!';
    
    $cryptedData = str_rot13($plainText); // cannot be read anymore
    
    $plainTextAgain = str_rot13($cryptedData);

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Plain_text](https://en.wikipedia.org/wiki/Plain_text)

## See Also
- [RFC 2046: MIME Part Two, Media Types (text/plain)](https://www.rfc-editor.org/rfc/rfc2046.html)

## Related
- [To Crypt](/features/crypt.md)
- [Rich Text](/features/rich-text.md)
- [Markdown](/features/markdown.md)
- [PDF](/features/pdf.md)
- [Text](/features/text.md)

