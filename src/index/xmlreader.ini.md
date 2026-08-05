# XMLReader
The ``XMLReader`` extension is an XML Pull parser. The reader acts as a cursor going forward on the document stream and stopping at each node on the way.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/xmlreader.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/xmlreader.ini.html","name":"XMLReader","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"The ``XMLReader`` extension is an XML Pull parser","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/XMLReader.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [XMLwriter](xmlwriter.ini.html)
+ [Extensible Markup Language (XML)](xml.ini.html)
+ [Document Object Model (DOM)](dom.ini.html)
+ [DOM](domxml.ini.html)
+ [SimpleXML](simplexml.ini.html)
+ [Unicode](unicode.ini.html)
