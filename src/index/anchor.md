# Anchor
An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page. When the ``href`` attribute references a fragment identifier, e.g. ``#id``, the link jumps to a specific section of the current document.

Anchors are frequently generated programmatically when building HTML output, navigation menus, or documentation pages. Developers must be careful to escape user-supplied content used in anchor ``href`` attributes to prevent XSS vulnerabilities.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anchor.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/anchor.html","name":"Anchor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Jul 2026 08:53:24 +0000","dateModified":"Thu, 02 Jul 2026 08:53:24 +0000","description":"An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Anchor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a)**
## See Also

+ [Nested Anchor Links using CSS](https://www.amitmerchant.com/nested-anchor-links-using-css/)

## Related

+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [parse\_url()](parse_url.ini.html)
+ [http\_build\_query()](http_build_query.ini.html)
+ [HTML Escaping](escape-html.ini.html)
+ [Link](link.ini.html)
+ [Pound #](pound.ini.html)
