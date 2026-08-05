# Return
``return`` ends the current method, and sends back a produced value to the calling module. Execution resumes at the expression following the called module's invocation.

``return`` may be typed: the returned value is then checked against that type, by static analysis or by the PHP engine, at execution time. 

The ``return`` type may not always be returned: this is the case for ``never``, which indicates that the method will not return. 

``return`` types are covariant: one may return a more precise type, aka a child class, than typed, but not more general, aka a parent class.

``return`` is optional: when omitted, PHP returns automatically ``null``. The returned value of ``return`` is also optional: in that case, PHP returns ``null``, but it also returns a distinct value when the method is typed with the return type ``void``.

``return`` does not prevent ``finally`` from being executed, when the ``return`` command is in a ``try`` block.

``return`` is considered a jump, as it stops the current sequential execution, and move the pointer to another part of the code. This is similar to ``if-then``, ``goto``, ``for``, ``yield``, etc.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/return.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/return.ini.html","name":"Return","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``return`` ends the current method, and sends back a produced value to the calling module","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Return.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Functions](function.ini.html)
+ [Method](method.ini.html)
+ [Closure](closure.ini.html)
+ [Control Flow](control-flow.ini.html)
+ [Impure Function](impure-function.ini.html)
+ [Jump](jump.ini.html)
+ [Pure Function](pure-function.ini.html)
+ [Return Type](return-type.ini.html)
+ [Covariance](type-covariance.ini.html)
