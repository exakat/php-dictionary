---
type: "acronym"
title: "Document Object Model (DOM)"
description: "The Document Object Model, also called DOM, is a programming interface for HTML and XML documents."
resource: "https://www.php.net/manual/en/book.dom.php"
tags: ["xml", "html", "acronym", "extension", "dom"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

# Document Object Model (DOM)

The Document Object Model, also called DOM, is a programming interface for HTML and XML documents. It represents the document as a tree of nodes that can be traversed, queried, and modified.

PHP provides the ``dom`` extension, which implements the W3C DOM specification via classes such as ``DOMDocument``, ``DOMElement``, ``DOMNode``, ``DOMXPath``, and ``DOMNodeList``.

PHP 8.4 introduced ``Dom\HTMLDocument`` and ``Dom\XMLDocument`` as improved, spec-compliant replacements for the legacy ``DOMDocument``, with better error handling and HTML5 parsing.

```php
<?php

    $doc = new DOMDocument();
    $doc->loadHTML('<p class="greeting">Hello, <strong>world</strong></p>');
    
    $xpath = new DOMXPath($doc);
    $nodes = $xpath->query('//p[@class="greeting"]/strong');
    
    foreach ($nodes as $node) {
        echo $node->textContent; // world
    }

?>
```

## Documentation
- [https://www.php.net/manual/en/book.dom.php](https://www.php.net/manual/en/book.dom.php)

## See Also
- [Guide to PHP 8.4 new DOM Selector Feature](https://scrapfly.io/blog/posts/php-84-new-dom-selector)
- [The Evolution of the DOM: HTML5 Support in PHP 8.4](https://dophp.dev/posts/the-evolution-of-the-dom-html5-support-in-php-84)

## Related
- [Extensible Markup Language (XML)](/features/xml.md)
- [HyperText Markup Language (HTML)](/features/html.md)
- [DOM](/features/domxml.md)
- [SimpleXML](/features/simplexml.md)
- [XMLReader](/features/xmlreader.md)
- [XMLwriter](/features/xmlwriter.md)
- [Javascript](/features/javascript.md)
- [DOMChildNode](/features/domchildnode.md)
- [DOMParentNode](/features/domparentnode.md)
- [Scalable Vector Graphics (SVG)](/features/svg.md)

## Details
- Extension: ext-dom

