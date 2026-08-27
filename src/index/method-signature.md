# Method Signature
The signature of a method or a function is the list of arguments and constraints that apply when calling it. 

In its simplest form, signature of a method is its name, its argument's type and list, though modern syntax also includes default values, visibilities, attributes and parameter names.

Method signature also applies to functions and closures. It may also be referenced as signature.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-signature.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-signature.html","name":"Method Signature","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"The signature of a method or a function is the list of arguments and constraints that apply when calling it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method-signature.html"]}],"alternateName":["closure-signature","function-signature"],"keywords":["method","concept"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/signature.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/digital-signature.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/functions.arguments.php"},{"@type":"CreativeWork","name":"Function Signature Explained","url":"https:\/\/www.ituonline.com\/it-glossary\/function-signature\/"},{"@type":"CreativeWork","name":"Signature (functions)","url":"https:\/\/developer.mozilla.org\/en-US\/docs\/Glossary\/Signature\/Function"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"method-signature"}]}]}</script>
```php
<?php

    function foo(string &$s = 'abc') {}
    
    class X {
        function foo(string &$s = 'abc') {}
    }

?>
```

**[Documentation](https://www.php.net/manual/en/functions.arguments.php)**
## See Also

+ [Function Signature Explained](https://www.ituonline.com/it-glossary/function-signature/)
+ [Signature (functions)](https://developer.mozilla.org/en-US/docs/Glossary/Signature/Function)

## Related

+ [Signature](signature.html)
+ [Digital Signature](digital-signature.html)
