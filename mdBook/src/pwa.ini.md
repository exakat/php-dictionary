# Progressive Web App
A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading. PWAs are built with standard web technologies, such as HTML, CSS, and JavaScript, and progressively enhance the experience based on the device's capabilities.

PHP typically acts as the backend for a PWA, exposing REST or GraphQL APIs that a JavaScript front-end consumes. PHP itself does not run in the browser, so the PWA logic lives in JavaScript.

Key PWA components PHP can serve:

+ The ``manifest.json`` file that describes the app's name, icons, and display mode
+ A service worker registration script. The worker itself is static JavaScript
+ API endpoints that the front-end fetches while online and caches for offline use

PHP frameworks such as Symfony and Laravel ship tools and bundles for generating manifests and managing API layers that power PWAs.
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

## See Also

+ [web.dev – Learn PWA](https://web.dev/learn/pwa/)
+ [Symfony UX PWA](https://github.com/symfony/ux)

Related : [Application Programming Interface (API)](Application Programming Interface (API)), [REST API](REST API), [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [Javascript](Javascript), [Single Page Application (SPA)](Single Page Application (SPA)), [Mobile Application](Mobile Application)
