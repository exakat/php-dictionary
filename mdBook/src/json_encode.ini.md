# json_encode()
``json_encode()`` encodes a data structure into a JSON string.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.

```php
<?php

$data = [1,2,3];
try {
    $json = json_encode($data);
} catch(ValueError $e) {
    print "JSON encoding error";
}
// $json === '[1,2,3]';

?>
```

## See Also

+ [Mastering PHP json_encode: A Complete Guide](https://www.alldevutils.com/blog/php-json-encode.html)

Related : [JavaScript Object Notation (JSON)](JavaScript Object Notation (JSON)), [JSON Lines (JSONC)](JSON Lines (JSONC)), [json_decode()](json_decode()), [get_object_vars()](get_object_vars())
