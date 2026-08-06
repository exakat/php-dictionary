# Process Control (pcntl)
Process Control is a set of native PHP function, that handles signals coming from the OS. 

``pcntl`` is suited for CLI operations, and not for web serving operations. 

``pcntl`` manage process creation, program execution, signal handling and process termination.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pcntl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/pcntl.html","name":"Process Control (pcntl)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"Process Control is a set of native PHP function, that handles signals coming from the OS","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Process Control (pcntl).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

$pid = pcntl_fork();
if ($pid == -1) {
     die('could not fork');
} else if ($pid) {
     // we are the parent
     pcntl_wait($status); //Protect against Zombie children
} else {
     // we are the child
}

?>
```

**[Documentation](https://www.php.net/manual/en/book.pcntl.php)**
## See Also

+ [Example: Parallel processing in PHP using pcntl_fork()](https://gist.github.com/nicksantamaria/21dce5ff2a6640cdff76ce7bc57d2981)

## Related

+ [PHP Handlers](handler.ini.html)
+ [Shell](shell.ini.html)
+ [System Event](system-event.ini.html)
+ [pcntl\_signal()](pcntl_signal.ini.html)
