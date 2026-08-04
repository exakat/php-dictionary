# JsonException
Exception thrown if ``JSON_THROW_ON_ERROR`` option is set for ``json_encode()`` or ``json_decode()``. code contains the error type, for possible values see ``json_last_error()``.
```php
<?php

try {
    $data = json_decode($incomingJSON, JSON_THROW_ON_ERROR);

    return base64_encode($data);
} catch (JsonException $e) {
    print 'Could not decrypt the data.';
}

?>
```

Related : [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON))
