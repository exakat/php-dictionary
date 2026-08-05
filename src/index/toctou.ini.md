# Time Of Check To Time Of Use (TOCTOU)
TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it. This interval may be used by an attacker to replace the checked resource, and fool the code.

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/toctou.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/toctou.ini.html","name":"Time Of Check To Time Of Use (TOCTOU)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"TOCTOU, which stands for Time Of Check To Time Of Use, is a class of bug where there is a time interval between checking a resource and then using it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Time Of Check To Time Of Use (TOCTOU).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Security](security.ini.html)
+ [Race Condition](race-condition.ini.html)
