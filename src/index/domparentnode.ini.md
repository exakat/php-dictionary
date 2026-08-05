# DOMParentNode
``DOMParentNode`` is an interface introduced in version 8.0 for DOM nodes that can have children. It is implemented by ``DOMDocument``, ``DOMElement``, and ``DOMDocumentFragment``.

It provides ``prepend()`` and ``append()`` methods to insert nodes as first or last children, and ``childElementCount``, ``firstElementChild``, ``lastElementChild`` properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domparentnode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domparentnode.ini.html","name":"DOMParentNode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:38:30 +0000","dateModified":"Fri, 17 Jul 2026 08:38:30 +0000","description":"``DOMParentNode`` is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DOMParentNode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $dom = new DOMDocument;
    $dom->loadHTML('<p>Hello</p>');
    $p = $dom->getElementsByTagName('p')->item(0);
    $p->append($dom->createTextNode(' world'));

?>
```

**[Documentation](https://www.php.net/manual/en/class.domparentnode.php)**
## See Also

+ [DOMChildNode Class](https://www.php.net/manual/en/class.domchildnode.php)

## Related

+ [Document Object Model (DOM)](dom.ini.html)
+ [Interface](interface.ini.html)
+ [DOMChildNode](domchildnode.ini.html)
+ [PHP Native Interfaces](php-interface.ini.html)
+ [SplSubject](splsubject.ini.html)
