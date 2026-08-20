# DOMChildNode
``DOMChildNode`` is an interface introduced in version 8.0 for DOM nodes that can have siblings. It is implemented by ``DOMElement``, ``DOMText``, ``DOMComment``, ``DOMProcessingInstruction``, and ``DOMDocumentType``.

It provides ``before()`` and ``after()`` to insert nodes adjacent to the current node, ``replaceWith()`` to replace it, and ``remove()`` to detach it from its parent.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domchildnode.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domchildnode.html","name":"DOMChildNode","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jul 2026 08:38:21 +0000","dateModified":"Fri, 17 Jul 2026 08:38:21 +0000","description":"DOMChildNode is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/DOMChildNode.html"]}],"keywords":["dom","interface","extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domparentnode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-interface.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/splsubject.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.domchildnode.php"},{"@type":"CreativeWork","name":"DOMParentNode Class","url":"https:\/\/www.php.net\/manual\/en\/class.domparentnode.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"domchildnode"}]}]}</script>
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

+ [Document Object Model (DOM)](dom.html)
+ [Interface](interface.html)
+ [DOMParentNode](domparentnode.html)
+ [PHP Native Interfaces](php-interface.html)
+ [SplSubject](splsubject.html)
