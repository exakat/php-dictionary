# Encode
To encode is to transform a piece of data, from a human readable format to a specialized format.

The conversion is lossless, and shall be reverted with a decode operation.
```php
<?php

    // convert an array to a JSON string
    // This is also called 'encoding', and may be decoded
    $array = ['a' => 1];
    $json = json_encode($array);
    
    $original = json_decode($json);

?>
```

## See Also

+ [PHP: Useful Encoding and decoding Functions You Need to Know](https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f)

Related : [Decode](Decode), [Convert](Convert)
