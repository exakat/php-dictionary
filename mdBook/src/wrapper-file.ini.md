# file://
The ``file://`` wrapper is a native PHP wrapper, to access files on a local files, on the host system.

It may also be omitted, as the default behavior is to read files on the local system.
```php
<?php

// display the content of a file
// 3 / : two for protocol, one for path
print_r(file_get_content('file:///tmp/file.txt'));

// also possible
print_r(file_get_content('/tmp/file.txt'));

?>
```

Related : [Wrapper](Wrapper), [PHP Wrappers](PHP Wrappers), [File](File), [Thin Method](Thin Method), [Wrapper Pattern](Wrapper Pattern)
