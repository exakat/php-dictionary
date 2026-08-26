# BadFunctioncallException
The ``BadFunctioncallException`` exception is thrown if the callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` is defined by the SPL extension. It is not natively used.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/badfunctioncallexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/badfunctioncallexception.html","name":"BadFunctioncallException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 20 Aug 2026 08:11:55 +0000","dateModified":"Thu, 20 Aug 2026 08:11:55 +0000","description":"The BadFunctioncallException exception is thrown if the callback refers to an undefined function or if some arguments are missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/badfunctioncallexception.html"]}],"keywords":["exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.lengthexception.php"},{"@type":"CreativeWork","name":"PHP: SPL Exceptions","url":"https:\/\/www.php.net\/manual\/en\/spl.exceptions.php"},{"@type":"CreativeWork","name":"How to use built-in SPL exception classes for better error handling","url":"https:\/\/codeutopia.net\/blog\/2011\/05\/06\/how-to-use-built-in-spl-exception-classes-for-better-error-handling\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.27","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"badfunctioncallexception"}]}]}</script>
```php
<?php

    function foo(string $s) {
        if (empty($s)) {
           throw new \UnexpectedValueException('Foo() expects a non-empty string');
        }
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.lengthexception.php)**
## See Also

+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)
+ [How to use built-in SPL exception classes for better error handling](https://codeutopia.net/blog/2011/05/06/how-to-use-built-in-spl-exception-classes-for-better-error-handling/)

## Related

+ [Exception](exception.html)
+ [LogicException](logicexception.html)
