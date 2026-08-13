# XMLReader
The ``XMLReader`` extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlreader.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlreader.html","name":"XMLReader","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"The XMLReader extension is an XML Pull parser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/XMLReader.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.18","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xmlreader"}]}]}</script>
```php
<?php
//creating an XML documents that is to be parsed using XML reader to retrieve the contents
$xmlDocument = '<?xml version="1.0"?>
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
</books>';
//declaring an instance of XML Reader
$xml = new XMLReader();
$xml->XML($xmlDocument);
//parsing the contents of the XML document and retrieving the required contents from the document
echo "List of the book titles:\n";
while( $xml->read() )
{
    if ($xml->name === 'title') {
        print $xml->readInnerXML().PHP_EOL;
        $xml->next();
    }
}
?>

```

**[Documentation](https://www.php.net/manual/en/book.xmlreader.php)**
## See Also

+ [PHP: Reading XML with XMLReader](https://www.youtube.com/watch?v=xBuBjyLAxOI)

## Related

+ [XMLwriter](xmlwriter.html)
+ [Extensible Markup Language (XML)](xml.html)
+ [Document Object Model (DOM)](dom.html)
+ [DOM](domxml.html)
+ [SimpleXML](simplexml.html)
+ [Unicode](unicode.html)
