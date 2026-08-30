# Process Control (pcntl)
Process Control is a set of native PHP function, that handles signals coming from the OS. 

``pcntl`` is suited for CLI operations, and not for web serving operations. 

``pcntl`` manage process creation, program execution, signal handling and process termination.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html","name":"Process Control (pcntl)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 08 Aug 2026 08:10:54 +0000","dateModified":"Sat, 08 Aug 2026 08:10:54 +0000","description":"Process Control is a set of native PHP function, that handles signals coming from the OS","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/handler.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/shell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/system-event.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/pcntl_signal.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.pcntl.php"},{"@type":"CreativeWork","name":"Example: Parallel processing in PHP using pcntl_fork()","url":"https:\/\/gist.github.com\/nicksantamaria\/21dce5ff2a6640cdff76ce7bc57d2981"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.30","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"pcntl"}]}]}</script>
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

+ [PHP Handlers](handler.html)
+ [Shell](shell.html)
+ [System Event](system-event.html)
+ [pcntl\_signal()](pcntl_signal.html)
