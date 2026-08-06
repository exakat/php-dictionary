# Incoming Data
Incoming data are data submitted to PHP by the user. They may come in different way: ``GET``, ``POST``, cookies or files; and, by extension, $_REQUEST. 

Incoming data should always be checked before usage. Their value may have been modified by the author of the source, and carry some malicious payload.

The encoding of the incoming data are controlled with the ``default_charset`` directive.

By extension, incoming data may be used to every source of data that is not PHP itself: files, databases, API, etc. Then, they should be treated the same way, with checks on format and value before usage.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/incoming-data.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/incoming-data.html","name":"Incoming Data","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:33:47 +0000","dateModified":"Thu, 09 Jul 2026 07:33:47 +0000","description":"Incoming data are data submitted to PHP by the user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Incoming Data.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [$\_REQUEST]($_request.ini.html)
+ [$\_POST]($_post.ini.html)
+ [$\_FILES]($_FILES.ini.html)
+ [$\_GET]($_get.ini.html)
+ [Outgoing Data](outgoing-data.ini.html)
+ [default\_charset](default_charset.ini.html)
+ [filter](filter.ini.html)
