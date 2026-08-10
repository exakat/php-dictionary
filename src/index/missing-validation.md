# Missing Validation
Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it. This can lead to a wide range of security issues, including injection attacks, data corruption, unauthorized access, or even system compromise.

Missing validation means the application does not check whether the input or data it receives is:

+ Correctly formatted, e.g., an email address, number, or date
+ Within expected boundaries, e.g., length, type, or range
+ Safe to process, e.g., free from malicious code or unexpected characters

It is important to remember that validation applies to incoming variables, such as ``$_GET``, but also with formatted data, like ``JSON`` or ``YAML``; formatted files like ``PDF`` or ``Zip``; database data, etc. In fact, every external source of data should be considered a potential vector of attack.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-validation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-validation.html","name":"Missing Validation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:10 +0000","dateModified":"Sat, 08 Aug 2026 14:32:10 +0000","description":"Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Missing Validation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Missing Validation"}]}]}</script>
```php
<?php

$file = $_GET['fileName'];

// Some validation on the name size.
if (strlen($file) > 150) { die('This file name is too long');}

// Validation is not sufficient, and any file may be reached on the system
fopen($filename);

?>
```

**[Documentation](https://owasp.org/www-project-top-10-for-business-logic-abuse/docs/the-top-10/missing-transition-validation)**
## Related

+ [Vulnerability](vulnerability.html)
+ [Static Application Security Testing (SAST)](sast.html)
