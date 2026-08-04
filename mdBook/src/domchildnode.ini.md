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

## See Also

+ [DOMParentNode Class](https://www.php.net/manual/en/class.domparentnode.php)

Related : [Document Object Model (DOM)](Document Object Model (DOM)), [Interface](Interface), [DOMParentNode](DOMParentNode), [PHP Native Interfaces](PHP Native Interfaces), [SplSubject](SplSubject)
