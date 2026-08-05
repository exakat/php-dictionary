# SimpleXML
The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/simplexml.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/simplexml.ini.html","name":"SimpleXML","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/SimpleXML.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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
## Related

+ [XMLwriter](xmlwriter.ini.html)
+ [XMLReader](xmlreader.ini.html)
+ [Extensible Markup Language (XML)](xml.ini.html)
+ [Unicode](unicode.ini.html)
+ [Document Object Model (DOM)](dom.ini.html)
+ [DOM](domxml.ini.html)
