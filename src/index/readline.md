# Readline
``readline`` is the PHP extension to the GNU Readline library. This library provide features to interact with the command line, and its prompt.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readline.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/readline.html","name":"Readline","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``readline`` is the PHP extension to the GNU Readline library","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Readline.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

+ [Extensions](extension.ini.html)
+ [Read Eval Print Loop (REPL)](repl.ini.html)
