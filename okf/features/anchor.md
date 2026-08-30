---
type: "PHP Feature"
title: "Anchor"
description: "An anchor, or HTML anchor, is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page."
resource: "https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a"
tags: ["web", "html"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Anchor

An anchor, or HTML anchor, is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page. When the ``href`` attribute references a fragment identifier, e.g. ``#id``, the link jumps to a specific section of the current document.

Anchors are frequently generated programmatically when building HTML output, navigation menus, or documentation pages. Developers must be careful to escape user-supplied content used in anchor ``href`` attributes to prevent XSS vulnerabilities.

```php
<?php

    // Generating an anchor safely in PHP
    $url   = 'https://www.php.net/';
    $label = 'PHP Manual';
    
    // htmlspecialchars prevents XSS
    echo '<a href="' . htmlspecialchars($url, ENT_QUOTES, 'UTF-8') . '">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8')
        . '</a>';
    
    // Fragment / in-page anchor
    echo '<a href="#section-2">Go to section 2</a>';

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a)

## See Also
- [Nested Anchor Links using CSS](https://www.amitmerchant.com/nested-anchor-links-using-css/)

## Related
- [HyperText Markup Language (HTML)](/features/html.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [parse_url()](/features/parse_url.md)
- [http_build_query()](/features/http_build_query.md)
- [HTML Escaping](/features/escape-html.md)
- [Link](/features/link.md)
- [Pound #](/features/pound.md)

