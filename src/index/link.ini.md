# Link
A link connects two resources, allowing navigation or reference from one to the other.

In web development, links are expressed as HTML ``<a>`` anchor elements and ``<link>`` elements. PHP generates both when rendering HTML.

In the filesystem, a link is a reference to a file or directory. PHP provides ``link()`` for hard links and ``symlink()`` for symbolic links. Both are used for deployment strategies, shared asset management, and plugin architectures.

In data structures, a linked list uses node-to-node references to chain elements. PHP does not have a native linked list, but ``SplDoublyLinkedList`` provides one.

In REST APIs, links in responses describe available actions and related resources as URLs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/link.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/link.ini.html","name":"Link","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 07 Jul 2026 05:06:29 +0000","dateModified":"Tue, 07 Jul 2026 05:06:29 +0000","description":"A link connects two resources, allowing navigation or reference from one to the other","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Link.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Anchor](anchor.ini.html)
+ [Universal Resource Locator (URL)](url.ini.html)
+ [Universal Resource Identifier (URI)](uri.ini.html)
+ [HyperText Markup Language (HTML)](html.ini.html)
+ [Cross Site Scripting (XSS)](xss.ini.html)
+ [File System](filesystem.ini.html)
