# browscap
Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser. The term ``Browscap`` is often used to refer to the browser capabilities project as well as the configuration file ``browscap.ini`` that contains information about various web browsers.

The primary purpose of Browscap is to help web developers tailor their web applications or websites based on the capabilities of the user's browser. It provides details about the browser type, version, and various other characteristics. This information can be used to adapt the presentation or behavior of a website to ensure compatibility with different browsers.

The Browscap project originally started as a part of the PHP project, and PHP developers can use the information from Browscap to improve the accuracy of functions like ``get_browser()``, which is a PHP function used to get information about the capabilities of a user's browser.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browscap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browscap.html","name":"browscap","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"Browscap is a browser capabilities project that provides a database and API for determining the capabilities of a web browser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browscap.html"]}],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/browser.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/fr\/function.get-browser.php"},{"@type":"CreativeWork","name":"Browser Capabilities Project","url":"https:\/\/browscap.org\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.29","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"browscap"}]}]}</script>
```php
<?php

    print_r(get_browser($_SERVER['HTTP_USER_AGENT']));

?>
```

**[Documentation](https://www.php.net/manual/fr/function.get-browser.php)**
## See Also

+ [Browser Capabilities Project](https://browscap.org/)

## Related

+ [Browser](browser.html)
