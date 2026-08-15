# HTMLPurifier
HTMLPurifier is a standards-compliant PHP library that filters user-submitted HTML against a whitelist of allowed tags and attributes, so that the result is safe to store and display.

Unlike a blunt tool such as ``strip_tags()``, or a fully-escaping function such as ``htmlspecialchars()``, HTMLPurifier actually parses the markup, so legitimate formatting, such as bold text, paragraphs, or links, survives, while dangerous constructs, such as ``<script>`` tags, inline event handler attributes like ``onclick``, and ``javascript:`` URLs, are stripped out. It also repairs malformed HTML so the output is well-formed.

HTMLPurifier is typically used once, when untrusted rich-text content, such as a comment or a WYSIWYG editor submission, is first accepted, so that the sanitized version, not the raw input, is the one stored and later re-displayed.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlpurifier.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/htmlpurifier.html","name":"HTMLPurifier","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:12:28 +0000","dateModified":"Wed, 05 Aug 2026 08:12:28 +0000","description":"HTMLPurifier is a standards-compliant PHP library that filters user-submitted HTML against a whitelist of allowed tags and attributes, so that the result is safe to store and display","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/HTMLPurifier.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"htmlpurifier"}]}]}</script>
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

**[Documentation](http://htmlpurifier.org/)**
## See Also

+ [HTMLPurifier documentation](http://htmlpurifier.org/live/UsageDetails.html)

## Related

+ [Sanitation](sanitation.html)
+ [HTML Escaping](escape-html.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Validation](validation.html)
+ [filter](filter.html)

## Related packages

+ [ezyang/htmlpurifier](https://packagist.org/packages/ezyang/htmlpurifier)
