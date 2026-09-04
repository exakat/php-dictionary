# AssertionError
``AssertionError`` is thrown when an assertion made with ``assert()`` fails.

Unlike most engine errors, ``AssertionError`` is raised by user-controlled code: it only fires when the ``zend.assertions`` directive enables assertion execution, and the ``assert.exception`` directive is left at its default of ``1``, so that a failed assertion is turned into a thrown error instead of a silent or warning-based failure.

``AssertionError`` extends ``Error``, not ``Exception``, which places it alongside engine-level failures such as ``TypeError`` and ``ArithmeticError`` rather than the SPL exception hierarchy. Since assertions are meant to be a zero-cost development aid, ``AssertionError`` should generally not be relied upon in production flow control: when ``zend.assertions`` is set to ``-1`` the assertion code is not even compiled, and no error is thrown at all.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertionerror.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertionerror.html","name":"AssertionError","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 28 Aug 2026 10:17:36 +0000","dateModified":"Fri, 28 Aug 2026 10:17:36 +0000","description":"AssertionError is thrown when an assertion made with assert() fails","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertionerror.html"]}],"keywords":["error","native error"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/assertion.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/zend-assertions.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/typeerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/arithmeticerror.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/runtime-checks.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/class.assertionerror.php"},{"@type":"CreativeWork","name":"assert - Manual","url":"https:\/\/www.php.net\/manual\/en\/function.assert.php"},{"@type":"CreativeWork","name":"PHP assertions and their usage","url":"https:\/\/www.exakat.io\/en\/php-assertions-usage\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.32","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"assertionerror"}]}]}</script>
```php
<?php

    $age = -5;
    
    try {
        assert($age >= 0, 'Age cannot be negative');
    } catch (AssertionError $e) {
        print 'Assertion failed: ' . $e->getMessage();
    }

?>
```

**[Documentation](https://www.php.net/manual/en/class.assertionerror.php)**
## See Also

+ [assert - Manual](https://www.php.net/manual/en/function.assert.php)
+ [PHP assertions and their usage](https://www.exakat.io/en/php-assertions-usage/)

## Related

+ [Assertions](assertion.html)
+ [zend\\.assertions](zend-assertions.html)
+ [Error](error.html)
+ [TypeError](typeerror.html)
+ [ArithmeticError Error](arithmeticerror.html)
+ [Runtime Checks](runtime-checks.html)
