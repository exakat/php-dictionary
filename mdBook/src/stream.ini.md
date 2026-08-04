# Stream
Streams are a generalisation of the notion of files. Just like files, they can be opened, read, written and closed. 

Unlike files, they may be a lot of things: archive, compressed data, sockets, other programs, etc. They also may not support all the range of features of files.

PHP offers native functions to create, configure, filter streams and process their data.

Streams may be extended with the notion of wrapper and protocols.
```php
<?php

    if ($stream = fopen('https://www.php.net', 'r')) {
        // print the first 100 chars of the HTML page.
        echo stream_get_contents($stream, -1, 100);
    
        fclose($stream);
    }

?>
```

## See Also

+ [Streams in PHP: What you really need to know](https://dev.to/gabrieloliverio/streams-in-php-55kb)

Related : [Abstraction Layer](Abstraction Layer), [Stream Wrapper](Stream Wrapper), [Stream Wrapper](Stream Wrapper), [File](File), [php://input](php://input), [php://output](php://output), [php://memory](php://memory), [php://tmp](php://tmp), [php://filter](php://filter), [file_get_contents()](file_get_contents()), [Path](Path), [Polling](Polling), [Web Hypertext Application Technology Working Group (WHATWG)](Web Hypertext Application Technology Working Group (WHATWG)), [STDOUT](STDOUT), [fclose()](fclose()), [fgetc()](fgetc()), [fgets()](fgets()), [fread()](fread()), [ftell()](ftell()), [fwrite()](fwrite()), [Non-blocking](Non-blocking)
