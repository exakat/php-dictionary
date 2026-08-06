# Document Object Model (DOM)
The Document Object Model, also called DOM, is a programming interface for HTML and XML documents. It represents the document as a tree of nodes that can be traversed, queried, and modified.

PHP provides the ``dom`` extension, which implements the W3C DOM specification via classes such as ``DOMDocument``, ``DOMElement``, ``DOMNode``, ``DOMXPath``, and ``DOMNodeList``.

PHP 8.4 introduced ``Dom\HTMLDocument`` and ``Dom\XMLDocument`` as improved, spec-compliant replacements for the legacy ``DOMDocument``, with better error handling and HTML5 parsing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dom.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/dom.html","name":"Document Object Model (DOM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 08:32:17 +0000","dateModified":"Wed, 05 Aug 2026 08:32:17 +0000","description":"The Document Object Model, also called DOM, is a programming interface for HTML and XML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Document Object Model (DOM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.dom.php)**
## See Also

+ [Guide to PHP 8.4 new DOM Selector Feature](https://scrapfly.io/blog/posts/php-84-new-dom-selector)
+ [The Evolution of the DOM: HTML5 Support in PHP 8.4](https://dophp.dev/posts/the-evolution-of-the-dom-html5-support-in-php-84)

## Related

+ [Extensible Markup Language (XML)](xml.ini.html)
+ [HyperText Markup Language (HTML)](html.ini.html)
+ [DOM](domxml.ini.html)
+ [SimpleXML](simplexml.ini.html)
+ [XMLReader](xmlreader.ini.html)
+ [XMLwriter](xmlwriter.ini.html)
+ [Javascript](javascript.ini.html)
+ [DOMChildNode](domchildnode.ini.html)
+ [DOMParentNode](domparentnode.ini.html)
+ [Scalable Vector Graphics (SVG)](svg.ini.html)
