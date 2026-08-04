# Haystack
Haystack is a classic name, used to designate a dataset where something will be searched in. For example, with the functions ``strstr()``, ``strpos()``, ``strrchr()``, ``array_search()``, ``mb_strstr()``, ``Grapheme::stristr()``, etc. 

This name refers to the expression 'to search for a needle in a haystack': when something is difficult to find in a large stack. In this context, the haystack is usually the data that is searched, while the needle is the thing that is searched for.

Traditionaly, the haystack is the first argument, and the needle the second one. With named parameters, the 'haystack' name made its way in the PHP syntax.
```php
<?php

    var_dump(strpos(haystack: 'abc', needle: 'b'));

?>
```

## See Also

+ [strstr](http://www.php.net/strstr)
+ [strpos](http://www.php.net/strpos)
+ [strrchr](http://www.php.net/strrchr)
+ [array_search](http://www.php.net/array_search)
+ [what is 'needle' and 'haystack' in PHP ??](https://teamtreehouse.com/community/what-is-needle-and-haystack-in-php)

Related : [Needle](Needle)
