# get\_browser()
``get_browser()`` is a PHP native function that looks up the capabilities of a browser, based on its user agent string, and returns them as an object or an array.

``get_browser()`` relies on the ``browscap`` directive in ``php.ini``, which must point to a local copy of the ``browscap.ini`` database, an external file mapping user agent signatures to browser names, versions, and capabilities such as support for frames, cookies, or JavaScript. Without a configured ``browscap`` file, ``get_browser()`` emits a warning and returns ``false``.

If the optional ``user_agent`` argument is omitted, PHP uses the value of ``$_SERVER['HTTP_USER_AGENT']`` for the current request.

The ``browscap.ini`` approach is considered obsolete for new projects: it is difficult to keep up to date, degrades performance when the file is large, and has been superseded by client-side feature detection or the User-Agent Client Hints proposal.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_browser.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_browser.html","name":"get_browser()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 30 Aug 2026 07:37:49 +0000","dateModified":"Sun, 30 Aug 2026 07:37:49 +0000","description":"get_browser() is a PHP native function that looks up the capabilities of a browser, based on its user agent string, and returns them as an object or an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/get_browser.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php.ini.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/directive.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.get-browser.php"},{"@type":"CreativeWork","name":"browscap and get_browser in PHP","url":"https:\/\/medium.com\/enekochan\/browscap-and-get-browser-in-php-9ccc6e353a96"},{"@type":"CreativeWork","name":"PHP standalone get_browser() for Browscap","url":"https:\/\/alexandre.alapetite.fr\/doc-alex\/php-local-browscap\/index.en.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"get_browser"}]}]}</script>
```php
<?php

    // Requires browscap = /path/to/browscap.ini in php.ini
    $browser = get_browser(null, true);

    echo $browser['browser'];        // e.g. 'Chrome'
    echo $browser['platform'];       // e.g. 'Linux'
    var_dump($browser['javascript']); // true

?>
```

**[Documentation](https://www.php.net/manual/en/function.get-browser.php)**
## See Also

+ [browscap and get_browser in PHP](https://medium.com/enekochan/browscap-and-get-browser-in-php-9ccc6e353a96)
+ [PHP standalone get_browser() for Browscap](https://alexandre.alapetite.fr/doc-alex/php-local-browscap/index.en.html)

## Related

+ [php\\.ini](php.ini.html)
+ [Directives](directive.html)
