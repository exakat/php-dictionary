# CSS
CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents. It controls layout, colours, fonts, spacing, animations, and responsiveness across devices.

While CSS itself is a client-side technology, PHP frequently interacts with it:

+ Generating dynamic CSS values for theming, user preferences, etc.
+ Injecting CSS variables from server-side configuration
+ Rendering HTML templates that include or link stylesheets
+ Parsing or minifying CSS on the server

When PHP outputs CSS content directly, care must be taken to escape values correctly to prevent CSS injection. It is a form of XSS where an attacker injects malicious CSS rules.

In modern PHP applications, CSS is typically bundled by a frontend build tool and linked from PHP templates.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/css.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/css.ini.html","name":"CSS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:40:45 +0000","dateModified":"Fri, 17 Jul 2026 08:40:45 +0000","description":"CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/CSS.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/CSS)**
## See Also

+ [CSS Injection](https://docs.brightsec.com/docs/css-injection)

## Related

+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [Front-end](frontend.ini.html)
+ [World Wide Web (WWW)](web.ini.html)
+ [Javascript](javascript.ini.html)
+ [Asset](asset.ini.html)
+ [Template](template.ini.html)
