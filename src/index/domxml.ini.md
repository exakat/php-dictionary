# DOM
The DOM extension is an extension that allows developers to work with XML documents using the Document Object Model, DOM, API. It provides a set of classes and functions to parse, manipulate, and generate XML documents.

The DOM extension provides a tree-based representation of an XML document, where each element, attribute, and text node is represented as an object. This allows developers to traverse and manipulate the XML document easily.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domxml.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/domxml.ini.html","name":"DOM","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The DOM extension is an extension that allows developers to work with XML documents using the Document Object Model, DOM, API","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/DOM.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// from PHP manual : https://www.php.net/manual/en/class.domcomment.php

   $xml = new DOMDocument();
    $xml->loadXML('<?xml version=\1.0\ encoding=\utf-8\?>
      <configuration version=\2\>
      <!-- test &#45;&#45;&gt; -->
      test &#45;&#45;&gt;
      </configuration>'
    );
$xpath = new DOMXPath($xml);
$comments = $xpath->query('//comment()');
$elements = $xpath->query('//configuration');

echo $comments[0]->textContent;
// result: test &#45;&#45;&gt;

echo $elements[0]->textContent;
// result: test -->

?>
```

**[Documentation](https://www.php.net/manual/en/book.dom.php)**
## See Also

+ [Using PHP DOMDocument: Code Examples Explained](https://www.bitdegree.org/learn/php-domdocument)

## Related

+ [Extensible Markup Language (XML)](xml.ini.html)
+ [SimpleXML](simplexml.ini.html)
+ [XMLReader](xmlreader.ini.html)
+ [XMLwriter](xmlwriter.ini.html)
+ [Unicode](unicode.ini.html)
+ [Document Object Model (DOM)](dom.ini.html)
