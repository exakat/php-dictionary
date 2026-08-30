---
type: "extension"
title: "DOMChildNode"
description: "``DOMChildNode`` is an interface introduced in version 8.0 for DOM nodes that can have siblings."
resource: "https://www.php.net/manual/en/class.domchildnode.php"
tags: ["dom", "interface", "extension"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# DOMChildNode

``DOMChildNode`` is an interface introduced in version 8.0 for DOM nodes that can have siblings. It is implemented by ``DOMElement``, ``DOMText``, ``DOMComment``, ``DOMProcessingInstruction``, and ``DOMDocumentType``.

It provides ``before()`` and ``after()`` to insert nodes adjacent to the current node, ``replaceWith()`` to replace it, and ``remove()`` to detach it from its parent.

```php
<?php

    $dom = new DOMDocument;
    $dom->loadHTML('<p>Hello <b>world</b></p>');
    $b = $dom->getElementsByTagName('b')->item(0);
    $b->remove();

?>
```

## Documentation
- [https://www.php.net/manual/en/class.domchildnode.php](https://www.php.net/manual/en/class.domchildnode.php)

## See Also
- [DOMParentNode Class](https://www.php.net/manual/en/class.domparentnode.php)

## Related
- [Document Object Model (DOM)](/features/dom.md)
- [Interface](/features/interface.md)
- [DOMParentNode](/features/domparentnode.md)
- [PHP Native Interfaces](/features/php-interface.md)
- [SplSubject](/features/splsubject.md)

## Details
- PHP since: 8.0
- Extension: ext-dom

