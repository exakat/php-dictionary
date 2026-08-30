---
type: "PHP Feature"
title: "CSS"
description: "CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents."
resource: "https://developer.mozilla.org/en-US/docs/Web/CSS"
tags: ["web", "frontend"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# CSS

CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents. It controls layout, colours, fonts, spacing, animations, and responsiveness across devices.

While CSS itself is a client-side technology, PHP frequently interacts with it:

+ Generating dynamic CSS values for theming, user preferences, etc.
+ Injecting CSS variables from server-side configuration
+ Rendering HTML templates that include or link stylesheets
+ Parsing or minifying CSS on the server

When PHP outputs CSS content directly, care must be taken to escape values correctly to prevent CSS injection. It is a form of XSS where an attacker injects malicious CSS rules.

In modern PHP applications, CSS is typically bundled by a frontend build tool and linked from PHP templates.

```php
<?php

    // Generating a dynamic CSS custom property from a user setting
    $primaryColor = '#3498db'; // from database / user preference
    $primaryColor = preg_replace('/[^#a-fA-F0-9]/', '', $primaryColor); // sanitize
    
    header('Content-Type: text/css');
    
    echo ":root {
        --primary-color: {$primaryColor};
    }
    ";

?>
```

## Documentation
- [https://developer.mozilla.org/en-US/docs/Web/CSS](https://developer.mozilla.org/en-US/docs/Web/CSS)

## See Also
- [CSS Injection](https://docs.brightsec.com/docs/css-injection)

## Related
- [HyperText Markup Language (HTML)](/features/html.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Front-end](/features/frontend.md)
- [World Wide Web (WWW)](/features/web.md)
- [Javascript](/features/javascript.md)
- [Asset](/features/asset.md)
- [Template](/features/template.md)

