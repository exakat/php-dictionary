# Line Feed
A line feed is a whitespace character, that historically represents moving the cursor to the next line, without going back to the beginning of the line.

A line feed is represented by the escape sequence ``\f``, in double quote strings. It is also the ASCII code 12.

Line feed are important when formatting code, as they are at the end of a line.
```php
<?php

    echo "\f";
    echo chr(12); // ASCII code 12

?>
```

Related : [New Line](New Line), [Carriage Return](Carriage Return), [American Standard Code for Information Interchange (ASCII)](American Standard Code for Information Interchange (ASCII)), [Return Carriage](Return Carriage)
