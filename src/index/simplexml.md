# SimpleXML
The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/simplexml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/simplexml.html","name":"SimpleXML","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/SimpleXML.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"simplexml"}]}]}</script>
```php
<?php
$books = new SimpleXMLElement('<?xml version=\1.0\?>
<books>
<book>
<title>Les miserables</title>
<genre>Novel</genre>
</book>
<book>
<title>The old man and the sea</title>
<genre>Novel</genre>
</book>
<book>
<title>The journey to the west</title>
<genre>Epic</genre>
</book>
</books>');

echo $movies->books[0]->title;
?>
```

**[Documentation](https://www.php.net/manual/en/book.simplexml.php)**
## See Also

+ [PHP Master | Parsing XML With SimpleXML](https://www.sitepoint.com/parsing-xml-with-simplexml/)

## Related

+ [XMLwriter](xmlwriter.html)
+ [XMLReader](xmlreader.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Unicode](unicode.html)
+ [Document Object Model (DOM)](dom.html)
+ [DOM](domxml.html)
