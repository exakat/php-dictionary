# Lvalue
An lvalue is an expression that designates a storage location capable of holding a value, as opposed to an rvalue, which only produces a value. The name comes from ``left value``: historically, the kind of expression allowed on the left-hand side of an assignment.

An lvalue may be modifiable or non-modifiable. A modifiable lvalue, such as a variable, an array element or an object property, can be the target of an assignment or of a by-reference operation. A non-modifiable lvalue, such as a class constant or the result of a function returned by value, designates a location whose value cannot be changed through that expression.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lvalue.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lvalue.html","name":"Lvalue","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 27 Aug 2026 05:06:20 +0000","dateModified":"Thu, 27 Aug 2026 05:06:20 +0000","description":"An lvalue is an expression that designates a storage location capable of holding a value, as opposed to an rvalue, which only produces a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/lvalue.html"]}],"alternateName":["l-value"],"keywords":["concept","specification"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assignment.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/value.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/const.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/phplang.org\/spec\/03-terms-and-definitions.html"},{"@type":"CreativeWork","name":"Value (computer science): lvalue and rvalue - Wikipedia","url":"https:\/\/en.wikipedia.org\/wiki\/Value_(computer_science)#lvalue_and_rvalue"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"lvalue"}]}]}</script>
```php
<?php

    $a = 1;      // $a is a modifiable lvalue
    $arr[0] = 2; // $arr[0] is a modifiable lvalue
    
    class C {
        const X = 1;
    }
    
    // C::X is a non-modifiable lvalue: this is a compile-time error
    // C::X = 2;

?>
```

**[Documentation](https://phplang.org/spec/03-terms-and-definitions.html)**
## See Also

+ [Value (computer science): lvalue and rvalue - Wikipedia](https://en.wikipedia.org/wiki/Value_(computer_science)#lvalue_and_rvalue)

## Related

+ [Variables](variable.html)
+ [Assignment](assignment.html)
+ [References](reference.html)
+ [Value](value.html)
+ [Const](const.html)
