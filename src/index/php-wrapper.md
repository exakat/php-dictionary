# PHP Wrappers
A wrapper is a custom way to access remote resources. It is designed to look like accessing to file, on the file system, but using other drivers than the ones of the hard drive. It is based on a configuration string, which looks like a URL: ``ftp://www.site.com/file.txt``, where the part before the ``://`` is the protocol.

Among the predefined PHP wrapper, there are ``http://``, ``ftp://``, ``zlib://``, ``phar://``, ``rar://``, ``expect://``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.14","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html","name":"PHP Wrappers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A wrapper is a custom way to access remote resources","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/PHP Wrappers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"PHP Wrappers"}]}]}</script>
```php
<?php

$html = file_get_content('http://www.php.net/');

?>
```

**[Documentation](https://www.php.net/manual/en/class.streamwrapper.php)**
## See Also

+ [Protocols and Wrapper in PHP](https://www.geeksforgeeks.org/protocols-and-wrapper-in-php/)
+ [Php wrapper and Local File Inclusion](https://medium.com/@robsfromashes/php-wrapper-and-local-file-inclusion-2fb82c891f55)

## Related

+ [Protocol](protocol.html)
+ [Wrapper](wrapper.html)
+ [file://](wrapper-file.html)
+ [Thin Method](thin-method.html)
+ [ftp://](wrapper-ftp.html)
+ [Wrapper Pattern](wrapper-pattern.html)
+ [php://](wrapper-php.html)
+ [http://](wrapper-http.html)
+ [zlib extension](zlib.html)

## Related packages

+ [bovigo/vfsStream](https://packagist.org/packages/bovigo/vfsStream)
