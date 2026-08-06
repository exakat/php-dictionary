# Outgoing Data
Outgoing data are data submitted by PHP to an external user. The default may be the user's browser, and the usual formats may be HTML, or JSON. Yet, there are many other destinations, such as databases, files, API, other process and formats, such as CSV, text, PDF, etc.

Outgoing data should always be formatted with the target technology. For example, text should use HTML entities for HTML output, or be provided as prepared statement with a database. Each target has its own system of protection.

The encoding of the incoming data are controlled with the ``default_charset`` directive.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outgoing-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/outgoing-data.html","name":"Outgoing Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Outgoing data are data submitted by PHP to an external user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Outgoing Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

// raw text, for the browser
echo "Hello world.";

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.default-charset)**
## Related

+ [Incoming Data](incoming-data.ini.html)
+ [default\_charset](default_charset.ini.html)
