# Progressive Web App
A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading. PWAs are built with standard web technologies, such as HTML, CSS, and JavaScript, and progressively enhance the experience based on the device's capabilities.

PHP typically acts as the backend for a PWA, exposing REST or GraphQL APIs that a JavaScript front-end consumes. PHP itself does not run in the browser, so the PWA logic lives in JavaScript.

Key PWA components PHP can serve:

+ The ``manifest.json`` file that describes the app's name, icons, and display mode
+ A service worker registration script. The worker itself is static JavaScript
+ API endpoints that the front-end fetches while online and caches for offline use

PHP frameworks such as Symfony and Laravel ship tools and bundles for generating manifests and managing API layers that power PWAs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pwa.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pwa.html","name":"Progressive Web App","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:49 +0000","dateModified":"Mon, 13 Jul 2026 18:47:49 +0000","description":"A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Progressive Web App.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.19","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pwa"}]}]}</script>
```php
<?php

    // PHP serving the Web App Manifest
    header('Content-Type: application/manifest+json');
    echo json_encode([
        'name'             => 'My PWA',
        'short_name'       => 'PWA',
        'start_url'        => '/',
        'display'          => 'standalone',
        'background_color' => '#ffffff',
        'theme_color'      => '#3367D6',
        'icons'            => [
            ['src' => '/icons/icon-192.png', 'sizes' => '192x192', 'type' => 'image/png'],
            ['src' => '/icons/icon-512.png', 'sizes' => '512x512', 'type' => 'image/png'],
        ],
    ]);

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Web/Progressive_web_apps)**
## See Also

+ [web.dev – Learn PWA](https://web.dev/learn/pwa/)
+ [Symfony UX PWA](https://github.com/symfony/ux)

## Related

+ [Application Programming Interface (API)](api.html)
+ [REST API](rest-api.html)
+ [JavaScript Object Notation (JSON)](json.html)
+ [Javascript](javascript.html)
+ [Single Page Application (SPA)](spa.html)
+ [Mobile Application](mobile-app.html)
