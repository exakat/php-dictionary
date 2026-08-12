# CSS
CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents. It controls layout, colours, fonts, spacing, animations, and responsiveness across devices.

While CSS itself is a client-side technology, PHP frequently interacts with it:

+ Generating dynamic CSS values for theming, user preferences, etc.
+ Injecting CSS variables from server-side configuration
+ Rendering HTML templates that include or link stylesheets
+ Parsing or minifying CSS on the server

When PHP outputs CSS content directly, care must be taken to escape values correctly to prevent CSS injection. It is a form of XSS where an attacker injects malicious CSS rules.

In modern PHP applications, CSS is typically bundled by a frontend build tool and linked from PHP templates.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/css.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/css.html","name":"CSS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:40:45 +0000","dateModified":"Fri, 17 Jul 2026 08:40:45 +0000","description":"CSS, the Cascading Style Sheets, is the language used to describe the visual presentation of HTML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/CSS.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"css"}]}]}</script>
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

+ [HyperText Markup Language (HTML)](html.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [Front-end](frontend.html)
+ [World Wide Web (WWW)](web.html)
+ [Javascript](javascript.html)
+ [Asset](asset.html)
+ [Template](template.html)
