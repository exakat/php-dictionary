# DOMChildNode
``DOMChildNode`` is an interface introduced in version 8.0 for DOM nodes that can have siblings. It is implemented by ``DOMElement``, ``DOMText``, ``DOMComment``, ``DOMProcessingInstruction``, and ``DOMDocumentType``.

It provides ``before()`` and ``after()`` to insert nodes adjacent to the current node, ``replaceWith()`` to replace it, and ``remove()`` to detach it from its parent.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domchildnode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domchildnode.html","name":"DOMChildNode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:38:21 +0000","dateModified":"Fri, 17 Jul 2026 08:38:21 +0000","description":"``DOMChildNode`` is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DOMChildNode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $dom = new DOMDocument;
    $dom->loadHTML('<p>Hello <b>world</b></p>');
    $b = $dom->getElementsByTagName('b')->item(0);
    $b->remove();

?>
```

**[Documentation](https://www.php.net/manual/en/class.domchildnode.php)**
## See Also

+ [DOMParentNode Class](https://www.php.net/manual/en/class.domparentnode.php)

## Related

+ [Document Object Model (DOM)](dom.ini.html)
+ [Interface](interface.ini.html)
+ [DOMParentNode](domparentnode.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [SplSubject](splsubject.ini.html)
