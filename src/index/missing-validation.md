# Missing Validation
Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it. This can lead to a wide range of security issues, including injection attacks, data corruption, unauthorized access, or even system compromise.

Missing validation means the application does not check whether the input or data it receives is:

+ Correctly formatted, e.g., an email address, number, or date
+ Within expected boundaries, e.g., length, type, or range
+ Safe to process, e.g., free from malicious code or unexpected characters

It is important to remember that validation applies to incoming variables, such as ``$_GET``, but also with formatted data, like ``JSON`` or ``YAML``; formatted files like ``PDF`` or ``Zip``; database data, etc. In fact, every external source of data should be considered a potential vector of attack.

<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-validation.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/missing-validation.html","name":"Missing Validation","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:15:55 +0000","dateModified":"Thu, 13 Aug 2026 08:15:55 +0000","description":"Missing Validation is a common security vulnerability that occurs when an application fails to validate user input or data before processing it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Missing Validation.html"]}],"keywords":["security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/vulnerability.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sast.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/owasp.org\/www-project-top-10-for-business-logic-abuse\/docs\/the-top-10\/missing-transition-validation"},{"@type":"CreativeWork","name":"Improper Data Validation","url":"https:\/\/owasp.org\/www-community\/vulnerabilities\/Improper_Data_Validation"},{"@type":"CreativeWork","name":"Input Validation Errors: The Root of All Evil in Web Application Security","url":"https:\/\/www.invicti.com\/blog\/web-security\/input-validation-errors-root-of-all-evil"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.22","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"missing-validation"}]}]}</script>
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
## See Also

+ [Improper Data Validation](https://owasp.org/www-community/vulnerabilities/Improper_Data_Validation)
+ [Input Validation Errors: The Root of All Evil in Web Application Security](https://www.invicti.com/blog/web-security/input-validation-errors-root-of-all-evil)

## Related

+ [Vulnerability](vulnerability.html)
+ [Static Application Security Testing (SAST)](sast.html)
