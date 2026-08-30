# \_\_halt\_compiler()
``__halt_compiler()`` halts the execution of the compiler. This is useful to embed data alongside code, like the installation files. 

Byte position of the data start can be determined by the ``__COMPILER_HALT_OFFSET__`` constant which is defined only if there is a ``__halt_compiler()`` presented in the file.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__halt_compiler.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__halt_compiler.html","name":"__halt_compiler()","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 06 Aug 2026 05:59:45 +0000","dateModified":"Thu, 06 Aug 2026 05:59:45 +0000","description":"__halt_compiler() halts the execution of the compiler","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/__halt_compiler.html"]}],"alternateName":["halt-compiler"],"keywords":["feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/compile.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-engine.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/php-engine.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.halt-compiler.php"},{"@type":"CreativeWork","name":"Use \"__halt_compiler\" to ... well, halt the PHP compiler","url":"https:\/\/coderwall.com\/p\/ts2kva\/use-__halt_compiler-to-well-halt-the-php-compiler"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"__halt_compiler"}]}]}</script>
```php
<?php

    // adapted from the manual
    
    // open this file
    $fp = fopen(__FILE__, 'r');
    
    // seek file pointer to data
    fseek($fp, __COMPILER_HALT_OFFSET__);
    
    // and output it
    var_dump(stream_get_contents($fp));
    
    // the end of the script execution
__halt_compiler(); This part of the file is read by the script.
```

**[Documentation](https://www.php.net/manual/en/function.halt-compiler.php)**
## See Also

+ [Use "__halt_compiler" to ... well, halt the PHP compiler](https://coderwall.com/p/ts2kva/use-__halt_compiler-to-well-halt-the-php-compiler)

## Related

+ [Compile](compile.html)
+ [Zend Engine](zend-engine.html)
+ [PHP Engine](php-engine.html)
