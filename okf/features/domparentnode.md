---
type: "extension"
title: "DOMParentNode"
description: "``DOMParentNode`` is an interface introduced in version 8.0 for DOM nodes that can have children."
resource: "https://www.php.net/manual/en/class.domparentnode.php"
tags: ["dom", "interface", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DOMParentNode

``DOMParentNode`` is an interface introduced in version 8.0 for DOM nodes that can have children. It is implemented by ``DOMDocument``, ``DOMElement``, and ``DOMDocumentFragment``.

It provides ``prepend()`` and ``append()`` methods to insert nodes as first or last children, and ``childElementCount``, ``firstElementChild``, ``lastElementChild`` properties.

```php
<?php

    $dom = new DOMDocument;
    $dom->loadHTML('<p>Hello</p>');
    $p = $dom->getElementsByTagName('p')->item(0);
    $p->append($dom->createTextNode(' world'));

?>
```

## Documentation
- [https://www.php.net/manual/en/class.domparentnode.php](https://www.php.net/manual/en/class.domparentnode.php)

## See Also
- [DOMChildNode Class](https://www.php.net/manual/en/class.domchildnode.php)

## Related
- [Document Object Model (DOM)](/features/dom.md)
- [Interface](/features/interface.md)
- [DOMChildNode](/features/domchildnode.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 8.0
- Extension: ext-dom

