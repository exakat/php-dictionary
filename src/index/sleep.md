# sleep
``sleep()`` is a PHP function which stops the execution for a given number of seconds. 

In web security, stopping a process makes it vulnerable to DOS attack: the process waits, doing nothing yet using resources, allowing an attacker to saturate the server.

On the other hand, slowing down a process reduces the efficiency of a brute force attack. A millisecond of sleep may not be significant for a legit user, but it may slow down dramatically any brute force attack, that requires millions of tests.

This also covers ``usleep()``, which stops the execution of PHP for a given number of milliseconds; ``time_sleep_until()``, which sleeps until a specified date; ``time_nanosleep()``, which stops the execution of PHP for a given number of nanoseconds.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.16","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sleep.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sleep.html","name":"sleep","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 14:32:45 +0000","dateModified":"Sat, 08 Aug 2026 14:32:45 +0000","description":"``sleep()`` is a PHP function which stops the execution for a given number of seconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/sleep.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"sleep"}]}]}</script>
```php
<?php

    // sleeps for 3 seconds
    sleep(3);
    
    // sleeps for 2 seconds
    usleep(2000000);

?>
```

**[Documentation](https://www.php.net/manual/en/features.commandline.php)**
## See Also

+ [Mastering PHP's sleep() and usleep() Functions for Time Delays](https://reintech.io/blog/mastering-php-sleep-usleep-functions-time-delays)

## Related

+ [hrtime()](hrtime.html)
+ [Polling](polling.html)
