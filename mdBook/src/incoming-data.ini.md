# Incoming Data
Incoming data are data submitted to PHP by the user. They may come in different way: ``GET``, ``POST``, cookies or files; and, by extension, $_REQUEST. 

Incoming data should always be checked before usage. Their value may have been modified by the author of the source, and carry some malicious payload.

The encoding of the incoming data are controlled with the ``default_charset`` directive.

By extension, incoming data may be used to every source of data that is not PHP itself: files, databases, API, etc. Then, they should be treated the same way, with checks on format and value before usage.
```php
<?php

    if ($_GET['x'] === '1') {
        print "You provided a one digit. Thanks!";
    } else {
        print "No processable data was provided";
    }

?>
```

Related : [$_REQUEST]($_REQUEST), [$_POST]($_POST), [$_FILES]($_FILES), [$_GET]($_GET), [Outgoing Data](Outgoing Data), [default_charset](default_charset), [filter](filter)
