# RuntimeException
Exception thrown if an error which can only be found on runtime occurs.

``RuntimeException`` is part of the SPL exception hierarchy introduced in version 5.1, extending the base ``Exception`` class. It is the sibling hierarchy to ``LogicException``: while ``LogicException`` covers faults that could, in principle, be detected before runtime by inspecting the code, ``RuntimeException`` covers errors that can only be detected while the script is executing, such as I/O failures, unexpected external data, or a value becoming invalid only once it is used.

PHP rarely throws a bare ``RuntimeException`` itself; it mostly serves as the common base for more specific SPL exceptions such as ``OutOfBoundsException``, ``OverflowException``, ``RangeException``, ``UnderflowException`` and ``UnexpectedValueException``, and it is also the ancestor of extension-provided exceptions such as ``PDOException`` and ``mysqli_sql_exception``. Catching ``RuntimeException`` lets code handle all of these execution-time failures with a single ``catch`` block, without also swallowing programmer errors caught by ``LogicException``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtimeexception.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtimeexception.html","name":"RuntimeException","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 09:34:10 +0000","dateModified":"Fri, 28 Aug 2026 09:34:10 +0000","description":"Exception thrown if an error which can only be found on runtime occurs","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtimeexception.html"]}],"keywords":["exception","native exception"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/logicexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/rangeexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/overflowexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unexpectedvalueexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pdoexception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/mysqli_sql_exception.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/predefined-exception.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.runtimeexception.php"},{"@type":"CreativeWork","name":"LogicException","url":"https:\/\/www.php.net\/manual\/en\/class.logicexception.php"},{"@type":"CreativeWork","name":"PHP: SPL Exceptions","url":"https:\/\/www.php.net\/manual\/en\/spl.exceptions.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"runtimeexception"}]}]}</script>
```php
<?php

try {
    throw new RuntimeException('Connection lost while reading the stream');
} catch (RuntimeException $e) {
    print 'Runtime failure: ' . $e->getMessage();
}

?>
```

**[Documentation](https://www.php.net/manual/en/class.runtimeexception.php)**
## See Also

+ [LogicException](https://www.php.net/manual/en/class.logicexception.php)
+ [PHP: SPL Exceptions](https://www.php.net/manual/en/spl.exceptions.php)

## Related

+ [Exception](exception.html)
+ [LogicException](logicexception.html)
+ [RangeException](rangeexception.html)
+ [OverflowException](overflowexception.html)
+ [UnexpectedValueException](unexpectedvalueexception.html)
+ [PDOException](pdoexception.html)
+ [mysqli\_sql\_exception](mysqli_sql_exception.html)
+ [PHP Predefined Exception](predefined-exception.html)
