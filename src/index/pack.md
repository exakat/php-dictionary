# pack
``pack()`` is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pack.html","name":"pack","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Aug 2026 07:18:00 +0000","dateModified":"Fri, 21 Aug 2026 07:18:00 +0000","description":"pack() is a native PHP function which converts given arguments into a binary string according to format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pack.html"]}],"keywords":["native function"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unpack.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.pack.php"},{"@type":"CreativeWork","name":"PHP: unpack - Manual","url":"https:\/\/www.php.net\/manual\/en\/function.unpack.php"},{"@type":"CreativeWork","name":"Handling binary data in PHP with pack() and unpack()","url":"https:\/\/adayinthelifeof.nl\/2010\/01\/14\/handling-binary-data-in-php-with-pack-and-unpack\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pack"}]}]}</script>
```php
<?php
  
  print pack("nvc*", 0x1234, 0x5678, 65, 66);
  // displays 4xVAB

?>
```

**[Documentation](https://www.php.net/manual/en/function.pack.php)**
## See Also

+ [PHP: unpack - Manual](https://www.php.net/manual/en/function.unpack.php)
+ [Handling binary data in PHP with pack() and unpack()](https://adayinthelifeof.nl/2010/01/14/handling-binary-data-in-php-with-pack-and-unpack/)

## Related

+ [Unpacking](unpack.html)
