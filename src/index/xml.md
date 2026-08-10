# Extensible Markup Language (XML)
XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use.

PHP offers several set of functions to handle XML: ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html","name":"Extensible Markup Language (XML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:08:26 +0000","dateModified":"Mon, 10 Aug 2026 17:08:26 +0000","description":"XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Extensible Markup Language (XML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Extensible Markup Language (XML)"}]}]}</script>
```php
<?php
$string = <<<XML
<?xml version='1.0'?>
<document>
    <cmd>login</cmd>
    <login>Richard</login>
</document>
XML;

$xml = simplexml_load_string($string);
print_r($xml);

?>
```

**[Documentation](https://www.php.net/manual/en/refs.xml.php)**
## See Also

+ [PHP XML Tutorial: Create, Parse, Read with Example](https://www.guru99.com/php-and-xml.html)

## Related

+ [SimpleXML](simplexml.html)
+ [DOM](domxml.html)
+ [XMLwriter](xmlwriter.html)
+ [XMLReader](xmlreader.html)
+ [Schema](schema.html)
+ [sitemap](sitemap.html)
+ [Simple Object Access Protocol (SOAP)](soap.html)
+ [YAML Ain't Markup Language (YAML)](yaml.html)
+ [Document Database](document-database.html)
+ [Document Object Model (DOM)](dom.html)
+ [Scalable Vector Graphics (SVG)](svg.html)
+ [AJAX](ajax.html)
+ [Interoperability](interoperability.html)
+ [RDF (Resource Description Framework)](rdf.html)
+ [Security Assertion Markup Language (SAML)](saml.html)

## Related packages

+ [symfony/dom-crawler](https://packagist.org/packages/symfony/dom-crawler)
+ [spatie/array-to-xml](https://packagist.org/packages/spatie/array-to-xml)
+ [robrichards/xmlseclibs](https://packagist.org/packages/robrichards/xmlseclibs)
+ [sabre/xml](https://packagist.org/packages/sabre/xml)
