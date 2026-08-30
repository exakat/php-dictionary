---
type: "PHP Feature"
title: "HTMLPurifier"
description: "HTMLPurifier is a standards-compliant PHP library that filters user-submitted HTML against a whitelist of allowed tags and attributes, so that the result is safe to store and display."
resource: "http://htmlpurifier.org/"
tags: ["library", "brand", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# HTMLPurifier

HTMLPurifier is a standards-compliant PHP library that filters user-submitted HTML against a whitelist of allowed tags and attributes, so that the result is safe to store and display.

Unlike a blunt tool such as ``strip_tags()``, or a fully-escaping function such as ``htmlspecialchars()``, HTMLPurifier actually parses the markup, so legitimate formatting, such as bold text, paragraphs, or links, survives, while dangerous constructs, such as ``<script>`` tags, inline event handler attributes like ``onclick``, and ``javascript:`` URLs, are stripped out. It also repairs malformed HTML so the output is well-formed.

HTMLPurifier is typically used once, when untrusted rich-text content, such as a comment or a WYSIWYG editor submission, is first accepted, so that the sanitized version, not the raw input, is the one stored and later re-displayed.

```php
<?php

    require_once 'HTMLPurifier.auto.php';

    $config = HTMLPurifier_Config::createDefault();
    $purifier = new HTMLPurifier($config);

    $dirty = '<p>Hello <script>alert(1)</script><b>world</b></p>';
    $clean = $purifier->purify($dirty);
    // '<p>Hello <b>world</b></p>'

?>
```

## Documentation
- [http://htmlpurifier.org/](http://htmlpurifier.org/)

## See Also
- [HTMLPurifier documentation](http://htmlpurifier.org/docs)

## Related
- [Sanitation](/features/sanitation.md)
- [HTML Escaping](/features/escape-html.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Validation](/features/validation.md)
- [filter](/features/filter.md)

## Details
- Packagist: [ezyang/htmlpurifier](https://packagist.org/packages/ezyang/htmlpurifier)

