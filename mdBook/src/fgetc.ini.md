# fgetc()
``fgetc()`` is a PHP native function that reads a single character from an open file pointer. It returns a string containing one byte, or ``false`` when the end of the file, EOF, is reached.

Key characteristics:

+ Reads exactly one byte per call, making it the slowest way to read a file, but the finest-grained
+ Returns ``false`` on EOF, which must be checked with ``===`` since ``"0"`` or an empty string are otherwise valid, falsy-looking results
+ Binary-safe, like the other stream functions

``fgetc()`` is typically used to build custom character-by-character parsers, for instance for CSV-like formats with unusual quoting rules, or for reading protocols where the message boundary is not a newline. For line-based reading, ``fgets()`` is far more efficient; for reading arbitrary chunks, ``fread()`` is preferred.
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        while (($char = fgetc($fp)) !== false) {
            echo $char;
        }
        fclose($fp);
    }

?>
```

## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

Related : [fgets()](fgets()), [fread()](fread()), [fopen()](fopen()), [fclose()](fclose()), [Stream](Stream), [File](File), [Binary](Binary)
