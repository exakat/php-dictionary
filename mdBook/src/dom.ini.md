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

## See Also

+ [Guide to PHP 8.4 new DOM Selector Feature](https://scrapfly.io/blog/posts/php-84-new-dom-selector)

Related : [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [DOM](DOM), [SimpleXML](SimpleXML), [XMLReader](XMLReader), [XMLwriter](XMLwriter), [Javascript](Javascript), [DOMChildNode](DOMChildNode), [DOMParentNode](DOMParentNode), [Scalable Vector Graphics (SVG)](Scalable Vector Graphics (SVG))
