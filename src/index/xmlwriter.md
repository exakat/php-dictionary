# XMLwriter
The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents. It allows to create XML elements, attributes, text nodes, and other XML constructs using a procedural interface.

The ``XMLWriter`` extension offers several benefits when working with XML:

+ Efficient and low memory usage: the extension is designed to generate XML incrementally, allowing to write large XML documents without consuming excessive memory
+ Stream-oriented output: ``XMLWriter`` writes XML data to a stream, which can be a file, memory, or an HTTP connection. This enables the generation of XML directly without the need to store the entire document in memory
+ Namespace support: ``XMLWriter`` supports XML namespaces, allowing to define and assign namespaces to elements and attributes
+ Character encoding and formatting: ``XMLWriter`` provides methods to set the character encoding of the XML document and control the formatting options, such as indentation and line breaks
+ Validity and well-formedness checking: ``XMLWriter`` performs automatic validation and well-formedness checking while writing XML, ensuring that the generated XML document is compliant with XML standards.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlwriter.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlwriter.html","name":"XMLwriter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The ``XMLWriter`` PHP extension is a built-in extension that provides a simple and efficient way to generate XML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/XMLwriter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xmlwriter"}]}]}</script>
```php
<?php

// adapted from PHP Manual

$xw = xmlwriter_open_memory();
xmlwriter_set_indent($xw, 1);
$res = xmlwriter_set_indent_string($xw, ' ');

xmlwriter_start_document($xw, '1.0', 'UTF-8');

// A first element
xmlwriter_start_element($xw, 'tag1');

// Attribute 'att1' for element 'tag1'
xmlwriter_start_attribute($xw, 'att1');
xmlwriter_text($xw, 'valueofatt1');
xmlwriter_end_attribute($xw);

xmlwriter_end_document($xw);

echo xmlwriter_output_memory($xw);

?>
```

**[Documentation](https://www.php.net/manual/en/book.xmlwriter.php)**
## See Also

+ [PHP XMLWriter](https://www.educba.com/php-xmlwriter/)
+ [Create an XML file using XMLWriter](https://riptutorial.com/php/example/2731/create-an-xml-file-using-xmlwriter)

## Related

+ [XMLReader](xmlreader.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Document Object Model (DOM)](dom.html)
+ [DOM](domxml.html)
+ [SimpleXML](simplexml.html)
+ [Unicode](unicode.html)

## Related packages

+ [sabre/xml](https://packagist.org/packages/sabre/xml)
+ [fluentdom/fluentdom](https://packagist.org/packages/fluentdom/fluentdom)
