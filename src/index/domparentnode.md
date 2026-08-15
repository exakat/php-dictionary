# DOMParentNode
``DOMParentNode`` is an interface introduced in version 8.0 for DOM nodes that can have children. It is implemented by ``DOMDocument``, ``DOMElement``, and ``DOMDocumentFragment``.

It provides ``prepend()`` and ``append()`` methods to insert nodes as first or last children, and ``childElementCount``, ``firstElementChild``, ``lastElementChild`` properties.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domparentnode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domparentnode.html","name":"DOMParentNode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:38:30 +0000","dateModified":"Fri, 17 Jul 2026 08:38:30 +0000","description":"DOMParentNode is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DOMParentNode.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"domparentnode"}]}]}</script>
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

+ [Document Object Model (DOM)](dom.html)
+ [Interface](interface.html)
+ [DOMChildNode](domchildnode.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SplSubject](splsubject.html)
