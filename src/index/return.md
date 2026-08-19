# Return
``return`` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation.

``return`` may be typed: the returned value is then checked against that type, by static analysis or by the PHP engine, at execution time. 

The ``return`` type may not always be returned: this is the case for ``never``, which indicates that the method will not return. 

``return`` types are covariant: one may return a more precise type, aka a child class, than typed, but not more general, aka a parent class.

``return`` is optional: when omitted, PHP returns automatically ``null``. The returned value of ``return`` is also optional: in that case, PHP returns ``null``, but it also returns a distinct value when the method is typed with the return type ``void``.

``return`` does not prevent ``finally`` from being executed, when the ``return`` command is in a ``try`` block.

``return`` is considered a jump, as it stops the current sequential execution, and moves the pointer to another part of the code. This is similar to ``if-then``, ``goto``, ``for``, ``yield``, etc.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return.html","name":"Return","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 19 Aug 2026 06:47:17 +0000","dateModified":"Wed, 19 Aug 2026 06:47:17 +0000","description":"return ends the current method, and sends back a produced value to the calling module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Return.html"]}],"keywords":["keyword","feature"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/method.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/closure.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/control-flow.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/impure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/jump.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pure-function.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/return-type.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-covariance.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/function.return.php"},{"@type":"CreativeWork","name":"PHP return Keyword","url":"https:\/\/zetcode.com\/php\/return-keyword\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.23","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"return"}]}]}</script>
```php
<?php

    function foo() {
        if (rand(0, 1)) {
            return 'tail';
        }
        
        return 'face';
    }
    echo foo();
    
    interface X {
        function m(Y $z): X;
    }

    interface Y extends X {
      function m(X $z): Y;
    }

?>
```

**[Documentation](https://www.php.net/manual/en/function.return.php)**
## See Also

+ [PHP return Keyword](https://zetcode.com/php/return-keyword/)

## Related

+ [Functions](function.html)
+ [Method](method.html)
+ [Closure](closure.html)
+ [Control Flow](control-flow.html)
+ [Impure Function](impure-function.html)
+ [Jump](jump.html)
+ [Pure Function](pure-function.html)
+ [Return Type](return-type.html)
+ [Covariance](type-covariance.html)
