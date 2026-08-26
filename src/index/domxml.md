# DOM
The DOM extension is an extension that allows developers to work with XML documents using the Document Object Model, DOM, API. It provides a set of classes and functions to parse, manipulate, and generate XML documents.

The DOM extension provides a tree-based representation of an XML document, where each element, attribute, and text node is represented as an object. This allows developers to traverse and manipulate the XML document easily.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domxml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domxml.html","name":"DOM","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 25 Aug 2026 19:12:45 +0000","dateModified":"Tue, 25 Aug 2026 19:12:45 +0000","description":"The DOM extension is an extension that allows developers to work with XML documents using the Document Object Model, DOM, API","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domxml.html"]}],"keywords":["extension","dom"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/simplexml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlreader.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlwriter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unicode.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dom.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.dom.php"},{"@type":"CreativeWork","name":"Using PHP DOMDocument: Code Examples Explained","url":"https:\/\/www.bitdegree.org\/learn\/php-domdocument"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"domxml"}]}]}</script>
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

+ [Extensible Markup Language (XML)](xml.html)
+ [SimpleXML](simplexml.html)
+ [XMLReader](xmlreader.html)
+ [XMLwriter](xmlwriter.html)
+ [Unicode](unicode.html)
+ [Document Object Model (DOM)](dom.html)
