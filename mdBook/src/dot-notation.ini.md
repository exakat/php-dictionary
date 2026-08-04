# Dot Notation
The dot notation refers to a syntax to access deeply-nested elements in arrays. Instead of repeating the classic ``[index]`` notation, dot notation offers a way to chain the indices with dots to reach the value. 

Dot notation is easier to read, in particular when there are numerous elements. 

Dot notation is not a PHP native feature. It is available via independent packages or as feature of frameworks.
```php
<?php

// example from https://github.com/adbario/php-dot-notation

$array['info']['home']['address'] = 'Kings Square';

echo $array['info']['home']['address'];

// Kings Square

$dot->set('info.home.address', 'Kings Square');

echo $dot->get('info.home.address');

?>
```

## See Also

+ [Dot Notation](https://medium.com/@assertchris/dot-notation-3fd3e42edc61)

Related : [Array, []](Array, []), [Multidimensional Array](Multidimensional Array)
