# http://
The ``http://`` wrapper is a native PHP wrapper, to access files on a remote ``HTTP`` web server. It handles both ``HTTP`` and ``HTTPS``.
```php
<?php

// display the raw incoming data
print_r(file_get_content('https://www.php.net/'));

?>
```

Related : [Wrapper](Wrapper), [PHP Wrappers](PHP Wrappers)
