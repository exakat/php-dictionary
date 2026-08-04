# Sanitation
Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions to perform sanitation, as long as components.
```php
<?php

    echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;

?>
```

## See Also

+ [Data sanitization](https://en.wikipedia.org/wiki/Data_sanitization)

Related : [Validation](Validation), [filter](filter), [Parse](Parse), [Parser](Parser)
