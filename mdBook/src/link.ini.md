# Link
A link connects two resources, allowing navigation or reference from one to the other.

In web development, links are expressed as HTML ``<a>`` anchor elements and ``<link>`` elements. PHP generates both when rendering HTML.

In the filesystem, a link is a reference to a file or directory. PHP provides ``link()`` for hard links and ``symlink()`` for symbolic links. Both are used for deployment strategies, shared asset management, and plugin architectures.

In data structures, a linked list uses node-to-node references to chain elements. PHP does not have a native linked list, but ``SplDoublyLinkedList`` provides one.

In REST APIs, links in responses describe available actions and related resources as URLs.
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

## See Also

+ [PHP link()](https://www.php.net/manual/en/function.link.php)

Related : [Anchor](Anchor), [Universal Resource Locator (URL)](Universal Resource Locator (URL)), [Universal Resource Identifier (URI)](Universal Resource Identifier (URI)), [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Cross Site Scripting (XSS)](Cross Site Scripting (XSS)), [File System](File System)
