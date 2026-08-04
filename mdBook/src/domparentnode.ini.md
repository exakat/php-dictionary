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

## See Also

+ [DOMChildNode Class](https://www.php.net/manual/en/class.domchildnode.php)

Related : [Document Object Model (DOM)](Document Object Model (DOM)), [Interface](Interface), [DOMChildNode](DOMChildNode), [PHP Native Interfaces](PHP Native Interfaces), [SplSubject](SplSubject)
