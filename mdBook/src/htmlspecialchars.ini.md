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

## See Also

+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

Related : [htmlentities()](htmlentities()), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Security](Security), [default_charset](default_charset), [html_entity_decode](html_entity_decode)
