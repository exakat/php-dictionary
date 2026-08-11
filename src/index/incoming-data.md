# Incoming Data
Incoming data are data submitted to PHP by the user. They may come in different way: ``GET``, ``POST``, cookies or files; and, by extension, $_REQUEST. 

Incoming data should always be checked before usage. Their value may have been modified by the author of the source, and carry some malicious payload.

The encoding of the incoming data are controlled with the ``default_charset`` directive.

By extension, incoming data may be used to every source of data that is not PHP itself: files, databases, API, etc. Then, they should be treated the same way, with checks on format and value before usage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/incoming-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/incoming-data.html","name":"Incoming Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Incoming data are data submitted to PHP by the user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Incoming Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"incoming-data"}]}]}</script>
```php
<?php

    if ($_GET['x'] === '1') {
        print "You provided a one digit. Thanks!";
    } else {
        print "No processable data was provided";
    }

?>
```

**[Documentation](https://www.php.net/manual/en/ini.core.php#ini.default-charset)**
## Related

+ [$\_REQUEST]($_request.html)
+ [$\_POST]($_post.html)
+ [$\_FILES]($_FILES.html)
+ [$\_GET]($_get.html)
+ [Outgoing Data](outgoing-data.html)
+ [default\_charset](default_charset.html)
+ [filter](filter.html)
