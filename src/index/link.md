# Link
A link connects two resources, allowing navigation or reference from one to the other.

In web development, links are expressed as HTML ``<a>`` anchor elements and ``<link>`` elements. PHP generates both when rendering HTML.

In the filesystem, a link is a reference to a file or directory. PHP provides ``link()`` for hard links and ``symlink()`` for symbolic links. Both are used for deployment strategies, shared asset management, and plugin architectures.

In data structures, a linked list uses node-to-node references to chain elements. PHP does not have a native linked list, but ``SplDoublyLinkedList`` provides one.

In REST APIs, links in responses describe available actions and related resources as URLs.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/link.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/link.html","name":"Link","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:06:29 +0000","dateModified":"Tue, 07 Jul 2026 05:06:29 +0000","description":"A link connects two resources, allowing navigation or reference from one to the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/link.html"]}],"alternateName":["hyperlink"],"keywords":["web","filesystem","concept","disambiguation"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anchor.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/url.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/uri.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/html.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xss.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/filesystem.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.symlink.php"},{"@type":"CreativeWork","name":"PHP link()","url":"https:\/\/www.php.net\/manual\/en\/function.link.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"link"}]}]}</script>
```php
<?php

    // Filesystem symlink
    symlink('/var/www/releases/v2.0', '/var/www/current');
    
    // HTML link generation
    $url = htmlspecialchars('https://www.php.net/', ENT_QUOTES, 'UTF-8');
    echo "<a href=\"$url\">PHP Manual</a>";
    
    // HTML <link> element for stylesheet
    echo '<link rel="stylesheet" href="style.css">';

?>
```

**[Documentation](https://www.php.net/manual/en/function.symlink.php)**
## See Also

+ [PHP link()](https://www.php.net/manual/en/function.link.php)

## Related

+ [Anchor](anchor.html)
+ [Universal Resource Locator (URL)](url.html)
+ [Universal Resource Identifier (URI)](uri.html)
+ [HyperText Markup Language (HTML)](html.html)
+ [Cross Site Scripting (XSS)](xss.html)
+ [File System](filesystem.html)
