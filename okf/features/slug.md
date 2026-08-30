---
type: "concept"
title: "Slug"
description: "A slug is a URL-friendly string derived from a human-readable label."
resource: "https://en.wikipedia.org/wiki/Clean_URL#Slug"
tags: ["concept", "string", "web", "url"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Slug

A slug is a URL-friendly string derived from a human-readable label. It typically consists of lowercase letters, digits, and hyphens, with spaces and special characters removed or replaced.

Slugs are widely used in web applications to build readable, SEO-friendly URLs. For example, the title ``Hello World!`` becomes the slug ``hello-world``.

PHP does not have a built-in slug generator, but the transformation can be achieved by combining ``strtolower()``, ``preg_replace()``, and transliteration via ``iconv()``. Many frameworks and libraries also provide dedicated helpers.

```php
<?php

    function slugify(string $text): string {
        $text = iconv('UTF-8', 'ASCII//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }

    echo slugify('Hello World!'); // hello-world

?>
```

## Documentation
- [https://en.wikipedia.org/wiki/Clean_URL#Slug](https://en.wikipedia.org/wiki/Clean_URL#Slug)

## See Also
- [What is a slug?](https://yoast.com/slug/)

## Related
- [Universal Resource Locator (URL)](/features/url.md)
- [Search Engine Optimization (SEO)](/features/seo.md)
- [strtolower()](/features/strtolower.md)
- [String](/features/string.md)
- [Unique Identifier](/features/unique-identifier.md)

