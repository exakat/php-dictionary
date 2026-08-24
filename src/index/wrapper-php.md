# php://
The ``php://`` wrapper is a native PHP wrapper, to access ``stdin``, ``stdout`` and ``stderr``. These are the incoming, outgoing and error streams of the executed PHP code.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-php.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-php.html","name":"php:\/\/","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 07 Aug 2026 14:45:45 +0000","dateModified":"Fri, 07 Aug 2026 14:45:45 +0000","description":"The php:\/\/ wrapper is a native PHP wrapper, to access stdin, stdout and stderr","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-php.html"]}],"keywords":["wrapper"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-filter.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/protocol.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.streamwrapper.php"},{"@type":"CreativeWork","name":"Mastering PHP Wrappers for Web Penetration Testing: A Hacker\u2019s Guide","url":"https:\/\/undercodetesting.com\/mastering-php-wrappers-for-web-penetration-testing-a-hackers-guide\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wrapper-php"}]}]}</script>
```php
<?php

    // display the raw incoming data
    print_r(file_get_content('php://stdin'));

?>
```

**[Documentation](https://www.php.net/manual/en/class.streamwrapper.php)**
## See Also

+ [Mastering PHP Wrappers for Web Penetration Testing: A Hacker’s Guide](https://undercodetesting.com/mastering-php-wrappers-for-web-penetration-testing-a-hackers-guide/)

## Related

+ [Wrapper](wrapper.html)
+ [PHP Wrappers](php-wrapper.html)
+ [php://filter](php-filter.html)
+ [Protocol](protocol.html)
