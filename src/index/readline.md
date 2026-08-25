# Readline
``readline`` is the PHP extension to the GNU Readline library. This library provide features to interact with the command line, and its prompt.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readline.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readline.html","name":"Readline","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"readline is the PHP extension to the GNU Readline library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/readline.html"]}],"keywords":["extension","built-in"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/repl.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.readline.php"},{"@type":"CreativeWork","name":"GNU readline","url":"https:\/\/tiswww.case.edu\/php\/chet\/readline\/rltop.html"},{"@type":"CreativeWork","name":"How to read user or console input in PHP","url":"https:\/\/impactmillions.org\/how-to-read-user-or-console-input-in-php\/"},{"@type":"CreativeWork","name":"How to read user or console input in PHP ?","url":"https:\/\/www.geeksforgeeks.org\/php\/how-to-read-user-or-console-input-in-php\/"},{"@type":"CreativeWork","name":"How To Take Input From User In PHP Without Form","url":"https:\/\/www.talkerscode.com\/howto\/how-to-take-input-from-user-in-php-without-form.php"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.25","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"readline"}]}]}</script>
```php
<?php

    // read 3 commands from user
    for ($i=0; $i < 3; $i++) {
            $line = readline("Commande :");
            readline_add_history($line);
    }
    
    // list the command line history
    print_r(readline_list_history());

?>
```

**[Documentation](https://www.php.net/manual/en/book.readline.php)**
## See Also

+ [GNU readline](https://tiswww.case.edu/php/chet/readline/rltop.html)
+ [How to read user or console input in PHP](https://impactmillions.org/how-to-read-user-or-console-input-in-php/)
+ [How to read user or console input in PHP ?](https://www.geeksforgeeks.org/php/how-to-read-user-or-console-input-in-php/)
+ [How To Take Input From User In PHP Without Form](https://www.talkerscode.com/howto/how-to-take-input-from-user-in-php-without-form.php)

## Related

+ [Extensions](extension.html)
+ [Read Eval Print Loop (REPL)](repl.html)
