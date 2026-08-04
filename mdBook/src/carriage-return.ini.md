# Carriage Return
A carriage return is a whitespace character, that historically represents moving the cursor to the beginning of the line, without changing line. It is often combined to the line feed: on a typewriter, that combination is needed to move the carriage to the beginning of the next line. This does not apply anymore on computers.

A carriage return is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Carriage return are important when formatting code, as they are at the end of a line.
```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

Related : [New Line](New Line), [Line Feed](Line Feed), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII))
