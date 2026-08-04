# Return Carriage
A return carriage is a whitespace character, that historically represents moving the cursor to the beginning of the line, without advancing to the next line.

A return carriage is represented by the escape sequence ``\r``, in double quote strings. It is also the ASCII code 13.

Return carriage are important when formatting code, as they are at the end of a line.
```php
<?php

    echo "\r";
    echo chr(13); // ASCII code 13

?>
```

Related : [Line Feed](Line Feed), [New Line](New Line)
