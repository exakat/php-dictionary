---
type: "concept"
title: "Link"
description: "A link connects two resources, allowing navigation or reference from one to the other."
resource: "https://www.php.net/manual/en/function.symlink.php"
tags: ["web", "filesystem", "concept", "disambiguation"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/function.symlink.php](https://www.php.net/manual/en/function.symlink.php)

## See Also
- [PHP link()](https://www.php.net/manual/en/function.link.php)

## Related
- [Anchor](/features/anchor.md)
- [Universal Resource Locator (URL)](/features/url.md)
- [Universal Resource Identifier (URI)](/features/uri.md)
- [HyperText Markup Language (HTML)](/features/html.md)
- [Cross Site Scripting (XSS)](/features/xss.md)
- [File System](/features/filesystem.md)

