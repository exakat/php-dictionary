# pack
``pack()`` is a native PHP function which converts given arguments into a binary string according to format. By extension, pack is the string that defines that format.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pack.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pack.html","name":"pack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``pack()`` is a native PHP function which converts given arguments into a binary string according to format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php
  
  print pack("nvc*", 0x1234, 0x5678, 65, 66);
  // displays 4xVAB

?>
```

**[Documentation](https://www.php.net/manual/en/function.pack.php)**
## Related

+ [Unpacking](unpack.ini.html)
