.. _pwa:
.. _progressive-web-app:
.. meta::
	:description:
		Progressive Web App: A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Progressive Web App
	:twitter:description: Progressive Web App: A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Progressive Web App
	:og:type: article
	:og:description: A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pwa.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pwa.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/pwa.ini.html","name":"Progressive Web App","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:47:49 +0000","dateModified":"Mon, 13 Jul 2026 18:47:49 +0000","description":"A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Progressive Web App.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Progressive Web App
-------------------

A Progressive Web App, or PWA, is a web application that uses modern browser APIs to deliver an app-like experience: offline support, push notifications, home-screen installation, and fast loading. PWAs are built with standard web technologies, such as HTML, CSS, and JavaScript, and progressively enhance the experience based on the device's capabilities.

PHP typically acts as the backend for a PWA, exposing REST or GraphQL APIs that a JavaScript front-end consumes. PHP itself does not run in the browser, so the PWA logic lives in JavaScript.

Key PWA components PHP can serve:

+ The ``manifest.json`` file that describes the app's name, icons, and display mode
+ A service worker registration script. The worker itself is static JavaScript
+ API endpoints that the front-end fetches while online and caches for offline use

PHP frameworks such as Symfony and Laravel ship tools and bundles for generating manifests and managing API layers that power PWAs.

.. code-block:: php
   
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


`Documentation <https://developer.mozilla.org/en-US/docs/Web/Progressive_web_apps>`__

See also `web.dev – Learn PWA <https://web.dev/learn/pwa/>`_ and `Symfony UX PWA <https://github.com/symfony/ux>`_.

Related : :ref:`Application Programming Interface (API) <api>`, :ref:`REST API <rest-api>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Javascript <javascript>`, :ref:`Single Page Application (SPA) <spa>`, :ref:`Mobile Application <mobile-app>`
