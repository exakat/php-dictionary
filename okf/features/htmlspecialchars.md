---
type: "PHP Feature"
title: "htmlspecialchars"
description: "``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents."
resource: "https://www.php.net/manual/en/function.htmlspecialchars.php"
tags: ["native function"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# htmlspecialchars

``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents.

It is commonly used to prevent Cross-Site Scripting, XSS, attacks when outputting user-supplied data in HTML. The characters it converts include ``&``, ``"``, ``'``, ``<`` and ``>``.

The flags parameter controls which quotes are converted: ``ENT_QUOTES`` converts both double and single quotes, which is recommended when outputting values in HTML attributes. Omitting quote handling is a classic source of XSS vulnerabilities.

``htmlspecialchars()`` has an inverse function called ``htmlspecialchars_decode()``, and a more exhaustive variant called ``htmlentities()``, which converts all applicable characters.

```php
<?php

    $userInput = '<script>alert("XSS")</script>';

    // Safe output: converts < > " & to HTML entities
    echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');

    // Dangerous: missing ENT_QUOTES leaves single quotes unescaped
    echo htmlspecialchars($userInput, ENT_COMPAT, 'UTF-8');

    // Reverse the conversion
    $html = '&lt;b&gt;Hello&lt;/b&gt;';
    echo htmlspecialchars_decode($html, ENT_QUOTES);

?>
```

## Documentation
- [https://www.php.net/manual/en/function.htmlspecialchars.php](https://www.php.net/manual/en/function.htmlspecialchars.php)

## See Also
- [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

## Related
- [htmlentities()](/features/htmlentities.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [Security](/features/security.md)
- [default_charset](/features/default_charset.md)
- [html_entity_decode](/features/html_entity_decode.md)

