# Time Of Check To Time Of Use (TOCTOU)
``TOCTOU``, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it. This interval may be used by an attacker to replace the checked resource, and fool the code.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toctou.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/toctou.html","name":"Time Of Check To Time Of Use (TOCTOU)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Aug 2026 17:02:32 +0000","dateModified":"Mon, 10 Aug 2026 17:02:32 +0000","description":"TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Time Of Check To Time Of Use (TOCTOU).html"]}],"0":{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.17","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"toctou"}]}]}</script>
```php
<?php

    function foo($file) {
        // Checking is the file exists
        if (!file_exists($file)) {
            return false;
        }
        
        $fp = fopen($file, 'r');
        // $fp should be available, because it was checked just before
        // The TOCTOU is here
        $string = fget($fp, 1000);
    }

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Time-of-check_to_time-of-use)**
## See Also

+ [Practical Race Condition Vulnerabilities in Web Applications](https://defuse.ca/race-conditions-in-web-applications.htm)

## Related

+ [Security](security.html)
+ [Race Condition](race-condition.html)
