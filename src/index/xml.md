# Extensible Markup Language (XML)
XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use.

PHP offers several sets of functions to handle XML: ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html","name":"Extensible Markup Language (XML)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 21:00:48 +0000","dateModified":"Tue, 11 Aug 2026 21:00:48 +0000","description":"XML, Extensible Markup Language, is a markup language similar to HTML, but without predefined tags to use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html"]}],"keywords":["acronym","format"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/simplexml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/domxml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlwriter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xmlreader.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/schema.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sitemap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soap.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/yaml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/document-database.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/dom.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/svg.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/ajax.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/interoperability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rdf.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/saml.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/refs.xml.php"},{"@type":"CreativeWork","name":"PHP XML Tutorial: Create, Parse, Read with Example","url":"https:\/\/www.guru99.com\/php-and-xml.html"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"xml"}]}]}</script>
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
