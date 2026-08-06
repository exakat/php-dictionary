# HTML Escaping
HTML escaping, also known as HTML encoding or character escaping, is a technique used to convert special characters in HTML markup into their corresponding HTML entities. This is done to prevent these characters from being interpreted as HTML code by the browser, which could potentially lead to security vulnerabilities or incorrect rendering of the webpage.

For example, the less-than sign ``<`` is represented as ``&lt;`` and the greater-than sign ``>`` is represented as ``&gt;``. Similarly, characters such as ampersand ``&`` and double quotation marks ``"`` have their own HTML entities, resp. ``&amp;`` and ``&quote;``.

HTML escaping is commonly used when displaying user-generated content on a webpage, such as comments or forum posts, to ensure that any HTML code contained within the content does not interfere with the structure of the page or execute malicious scripts. It helps maintain the integrity and security of the webpage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-html.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/escape-html.html","name":"HTML Escaping","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:49:07 +0000","dateModified":"Wed, 05 Aug 2026 08:49:07 +0000","description":"HTML escaping, also known as HTML encoding or character escaping, is a technique used to convert special characters in HTML markup into their corresponding HTML entities","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/HTML Escaping.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $str = "A 'quote' is <b>bold</b>";
    
    // Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str);
    
    // Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
    echo htmlentities($str, ENT_QUOTES);

?>
```

**[Documentation](https://www.php.net/manual/en/function.htmlentities.php)**
## See Also

+ [htmlspecialchars](https://www.php.net/manual/en/function.htmlspecialchars.php)
+ [OWASP XSS Prevention Cheat Sheet](https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html)

## Related

+ [Escape Data](escape-data.ini.html)
+ [Anchor](anchor.ini.html)
+ [HTML Entity](html-entity.ini.html)
+ [Write Context](write-context.ini.html)
+ [HTMLPurifier](htmlpurifier.ini.html)
