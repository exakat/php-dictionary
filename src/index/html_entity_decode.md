# html\_entity\_decode
``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters. It is the inverse of ``htmlentities()``.

It is used when HTML-encoded content must be processed as plain text, for example before storing in a database, sending in an email, or comparing strings.

A common security mistake is calling ``html_entity_decode()`` on user-supplied input and then outputting the result in HTML, which can reintroduce XSS vulnerabilities that were previously neutralized. The decode step should only happen when the output context is not HTML.

The flags parameter controls which quotes are decoded: ``ENT_QUOTES`` decodes both double and single quotes. The encoding parameter should be set explicitly to avoid unexpected behavior with multi-byte encodings.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html","name":"html_entity_decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``html_entity_decode()`` is a built-in PHP function that converts HTML entities back to their corresponding characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"html_entity_decode"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.html-entity-decode.php)**
## See Also

+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

## Related

+ [htmlentities()](htmlentities.html)
+ [htmlspecialchars](htmlspecialchars.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Security](security.html)
+ [default\_charset](default_charset.html)
