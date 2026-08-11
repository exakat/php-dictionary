# Outgoing Data
Outgoing data are data submitted by PHP to an external user. The default may be the user's browser, and the usual formats may be HTML, or JSON. Yet, there are many other destinations, such as databases, files, API, other process and formats, such as CSV, text, PDF, etc.

Outgoing data should always be formatted with the target technology. For example, text should use HTML entities for HTML output, or be provided as prepared statement with a database. Each target has its own system of protection.

The encoding of the incoming data are controlled with the ``default_charset`` directive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outgoing-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/outgoing-data.html","name":"Outgoing Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Outgoing data are data submitted by PHP to an external user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Outgoing Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"outgoing-data"}]}]}</script>
```php
<?php

// raw text, for the browser
echo "Hello world.";

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.default-charset)**
## See Also

+ [Everything You Need to Know About Preventing XSS Vulnerabilities in PHP](https://paragonie.com/blog/2015/06/preventing-xss-vulnerabilities-in-php-everything-you-need-know)
+ [PHP htmlspecialchars Function: Prevent XSS in HTML Output](https://flatcoding.com/tutorials/php/php-htmlspecialchars-function-prevent-xss-in-html-output/)

## Related

+ [Incoming Data](incoming-data.html)
+ [default\_charset](default_charset.html)
