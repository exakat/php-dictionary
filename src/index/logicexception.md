# LogicException
Exception that represents error in the program logic. This kind of exception should lead directly to a fix in your code.

``LogicException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It signals a fault that could, in principle, be detected before runtime by inspecting the code, a violated precondition, an unreachable code path, or a contract broken by the caller, as opposed to ``RuntimeException``, whose sibling hierarchy covers errors that can only be detected while the script is executing, such as I/O failures or unexpected external data.

PHP never throws a bare ``LogicException`` itself; it serves as the common base for more specific SPL exceptions: ``BadFunctionCallException``, and its child ``BadMethodCallException``, for calling an undefined function or method, ``DomainException`` for a value outside a defined set of valid values, ``InvalidArgumentException`` for an argument of the wrong type, ``LengthException`` for a value of invalid length, and ``OutOfRangeException`` for an illegal index requested outside of iteration. Catching ``LogicException`` lets code handle all of these programmer-error cases with a single ``catch`` block.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html","name":"LogicException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Aug 2026 08:26:10 +0000","dateModified":"Sat, 15 Aug 2026 08:26:10 +0000","description":"Exception that represents error in the program logic","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/LogicException.html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.20","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"logicexception"}]}]}</script>
```php
<?php

    // No direct exemples. Use the children classes.

?>
```

**[Documentation](https://www.php.net/manual/en/class.logicexception.php)**
## See Also

+ [RuntimeException](https://www.php.net/manual/en/class.runtimeexception.php)
+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related

+ [BadFunctioncallException](badfunctioncallexception.html)
+ [DomainException](domainexception.html)
+ [LengthException](lengthexception.html)
+ [OutOfRangeException](outofrangeexception.html)
+ [InvalidArgumentException](invalidargumentexception.html)
