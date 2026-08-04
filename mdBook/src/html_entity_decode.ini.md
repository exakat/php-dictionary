# html_entity_decode
``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters. It is the inverse of ``htmlentities()``.

It is used when HTML-encoded content must be processed as plain text, for example before storing in a database, sending in an email, or comparing strings.

A common security mistake is calling ``html_entity_decode()`` on user-supplied input and then outputting the result in HTML, which can reintroduce XSS vulnerabilities that were previously neutralized. The decode step should only happen when the output context is not HTML.

The flags parameter controls which quotes are decoded: ``ENT_QUOTES`` decodes both double and single quotes. The encoding parameter should be set explicitly to avoid unexpected behavior with multi-byte encodings.

```php
<?php

    $html = '&lt;b&gt;Hello &amp; welcome&lt;/b&gt;';

    // Converts entities back to characters
    echo html_entity_decode($html, ENT_QUOTES, 'UTF-8');
    // Output: <b>Hello & welcome</b>

    // Dangerous: decoding then re-outputting in HTML context re-opens XSS
    $userInput = '&lt;script&gt;alert(1)&lt;/script&gt;';
    echo html_entity_decode($userInput); // outputs <script>alert(1)</script>

    // Inverse: htmlentities encodes all applicable characters
    $plain = '<b>Café & Co</b>';
    echo htmlentities($plain, ENT_QUOTES, 'UTF-8');

?>
```

## See Also

+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

Related : [htmlentities()](htmlentities()), [htmlspecialchars](htmlspecialchars), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Security](Security), [default_charset](default_charset)
