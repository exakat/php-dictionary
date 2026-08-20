# file://
The ``file://`` wrapper is a native PHP wrapper, to access files on a local filesystem, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-file.html","name":"file:\/\/","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Aug 2026 09:44:01 +0000","dateModified":"Mon, 17 Aug 2026 09:44:01 +0000","description":"The file:\/\/ wrapper is a native PHP wrapper, to access files on a local filesystem, on the host system","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file:\/\/.html"]}],"keywords":["wrapper"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-wrapper.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/file.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/security.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/thin-method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/wrapper-pattern.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/wrappers.file.php"},{"@type":"CreativeWork","name":"Testing for File Inclusion","url":"https:\/\/owasp.org\/www-project-web-security-testing-guide\/latest\/4-Web_Application_Security_Testing\/07-Input_Validation_Testing\/11.1-Testing_for_File_Inclusion"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.24","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"wrapper-file"}]}]}</script>
```php
<?php

    // display the content of a file
    // 3 / : two for protocol, one for path
    print_r(file_get_content('file:///tmp/file.txt'));
    
    // also possible
    print_r(file_get_content('/tmp/file.txt'));

?>
```

**[Documentation](https://www.php.net/manual/en/wrappers.file.php)**
## See Also

+ [Testing for File Inclusion](https://owasp.org/www-project-web-security-testing-guide/latest/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_File_Inclusion)

## Related

+ [Wrapper](wrapper.html)
+ [PHP Wrappers](php-wrapper.html)
+ [File](file.html)
+ [Security](security.html)
+ [Thin Method](thin-method.html)
+ [Wrapper Pattern](wrapper-pattern.html)
