# Server-Side Rendering (SSR)
Server-side rendering, or SSR, is the technique of generating a complete HTML page on the server, before sending it to the browser, rather than building the page dynamically in the client with JavaScript.

PHP is intrinsically a server-side rendering language: templates and echoed markup are assembled into HTML on each request, and the browser receives a fully formed page. This differs from client-side rendering, where a browser downloads a mostly empty page plus a JavaScript bundle, and builds the DOM after the scripts run.

Server-side rendering improves the time to first paint, and it helps search engines and other crawlers, which may not execute JavaScript, to index the content directly. Frameworks that render client-side, like React or Vue, can still adopt server-side rendering for their first render, then hand off interactivity to the client: this hybrid approach is called hydration.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssr.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssr.html","name":"Server-Side Rendering (SSR)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 21 Sep 2026 19:22:43 +0000","dateModified":"Mon, 21 Sep 2026 19:22:43 +0000","description":"Server-side rendering, or SSR, is the technique of generating a complete HTML page on the server, before sending it to the browser, rather than building the page dynamically in the client with JavaScript","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ssr.html"]}],"alternateName":["server-side-rendering"],"keywords":["acronym","concept","architecture"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/spa.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/template.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/twig.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mvc.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/seo.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/javascript.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/SSR"},{"@type":"CreativeWork","name":"Client-side rendering (CSR) - MDN","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/CSR"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.39","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"ssr"}]}]}</script>
```php
<?php

    // Server-side rendering: PHP builds the full HTML page for each request.
    $items = ['Coffee', 'Tea', 'Cocoa'];

    echo '<ul>';
    foreach ($items as $item) {
        echo '<li>' . htmlspecialchars($item) . '</li>';
    }
    echo '</ul>';
    // The browser receives complete, ready-to-display markup.

?>
```

**[Documentation](https://developer.mozilla.org/en-US/docs/Glossary/SSR)**
## See Also

+ [Client-side rendering (CSR) - MDN](https://developer.mozilla.org/en-US/docs/Glossary/CSR)

## Related

+ [Single Page Application (SPA)](spa.html)
+ [Template](template.html)
+ [Twig](twig.html)
+ [Model - View - Controller (MVC)](mvc.html)
+ [Search Engine Optimization (SEO)](seo.html)
+ [Javascript](javascript.html)
