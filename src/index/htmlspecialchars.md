# htmlspecialchars
``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents.

It is commonly used to prevent Cross-Site Scripting, XSS, attacks when outputting user-supplied data in HTML. The characters it converts include ``&``, ``"``, ``'``, ``<`` and ``>``.

The flags parameter controls which quotes are converted: ``ENT_QUOTES`` converts both double and single quotes, which is recommended when outputting values in HTML attributes. Omitting quote handling is a classic source of XSS vulnerabilities.

``htmlspecialchars()`` has an inverse function called ``htmlspecialchars_decode()``, and a more exhaustive variant called ``htmlentities()``, which converts all applicable characters.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html","name":"htmlspecialchars","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"htmlspecialchars() is a built-in PHP function that converts special characters to their HTML entity equivalents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlspecialchars.html"]}],"alternateName":["htmlspecialchars_decode"],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlentities.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/default_charset.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html_entity_decode.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.htmlspecialchars.php"},{"@type":"CreativeWork","name":"OWASP XSS Prevention Cheat Sheet","url":"https:\/\/cheatsheetseries.owasp.org\/cheatsheets\/Cross_Site_Scripting_Prevention_Cheat_Sheet.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"htmlspecialchars"}]}]}</script>
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

**[Documentation](https://www.php.net/manual/en/function.htmlspecialchars.php)**
## See Also

+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

## Related

+ [htmlentities()](htmlentities.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Security](security.html)
+ [default\_charset](default_charset.html)
+ [html\_entity\_decode](html_entity_decode.html)
