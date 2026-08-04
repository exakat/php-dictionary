# Anchor
An anchor is an HTML element ``<a>`` used to create hyperlinks, allowing navigation to other pages, resources, or sections within the same page. When the ``href`` attribute references a fragment identifier, e.g. ``#id``, the link jumps to a specific section of the current document.

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

## See Also

+ [Nested Anchor Links using CSS](https://www.amitmerchant.com/nested-anchor-links-using-css/)

Related : [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [parse_url()](parse_url()), [http_build_query()](http_build_query()), [HTML Escaping](HTML Escaping), [Link](Link), [Pound #](Pound #)
