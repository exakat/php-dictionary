# LogicException
Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.

``LogicException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It signals a fault that could, in principle, be detected before runtime by inspecting the code, a violated precondition, an unreachable code path, or a contract broken by the caller, as opposed to ``RuntimeException``, whose sibling hierarchy covers errors that can only be detected while the script is executing, such as I/O failures or unexpected external data.

PHP never throws a bare ``LogicException`` itself; it serves as the common base for more specific SPL exceptions: ``BadFunctionCallException``, and its child ``BadMethodCallException``, for calling an undefined function or method, ``DomainException`` for a value outside a defined set of valid values, ``InvalidArgumentException`` for an argument of the wrong type, ``LengthException`` for a value of invalid length, and ``OutOfRangeException`` for an illegal index requested outside of iteration. Catching ``LogicException`` lets code handle all of these programmer-error cases with a single ``catch`` block.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logicexception.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/logicexception.ini.html","name":"LogicException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 08:09:43 +0000","dateModified":"Thu, 16 Jul 2026 08:09:43 +0000","description":"Exception that represents error in the program logic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/LogicException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // No direct exemples. Use the children classes.

?>
```

**[Documentation](https://www.php.net/manual/en/class.logicexception.php)**
## Related

+ [BadFunctioncallException](badfunctioncallexception.ini.html)
+ [DomainException](domainexception.ini.html)
+ [LengthException](lengthexception.ini.html)
+ [OutOfRangeException](outofrangeexception.ini.html)
+ [InvalidArgumentException](invalidargumentexception.ini.html)
