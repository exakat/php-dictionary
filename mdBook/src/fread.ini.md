# fread()
``fread()`` is a PHP native function that reads up to ``length`` bytes from the file pointer referenced by ``stream``. It is one of the fundamental file reading functions.

Key characteristics:

+ Returns a string of up to ``length`` bytes, or ``false`` on failure
+ Reads binary-safe data, making it suitable for both text and binary files
+ Stops reading when EOF, end of file, is reached or the specified length is reached
+ For character encodings like UTF-8, reading by byte length may split multi-byte characters; consider using ``fgetc()`` or ``fgets()`` for text files

``fread()`` is typically used after ``fopen()`` and should be paired with ``fclose()`` to free resources. For reading entire files at once, ``file_get_contents()`` is more convenient. For line-by-line reading, ``fgets()`` is preferred.
```php
<?php

    $fp = fopen('data.txt', 'r');
    if ($fp) {
        // Read first 100 bytes
        $content = fread($fp, 100);
        echo $content;

        // Read remaining content
        $remaining = fread($fp, filesize('data.txt') - 100);
        echo $remaining;

        fclose($fp);
    }

?>
```

## See Also

+ [Filesystem functions](https://www.php.net/manual/en/ref.filesystem.php)

Related : [fopen()](fopen()), [fgets()](fgets()), [fgetc()](fgetc()), [file_get_contents()](file_get_contents()), [File](File), [Stream](Stream), [fclose()](fclose()), [fwrite()](fwrite()), [fseek()](fseek()), [ftell()](ftell()), [rewind()](rewind()), [Readable](Readable), [Binary](Binary), [Resource Leak](Resource Leak)
