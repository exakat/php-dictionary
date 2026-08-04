# htmlentities()
``htmlentities()`` is a native PHP function which convert special characters in a string to their equivalent in HTML. 

``htmlentities()`` takes the string to be encoded, as argument. It also accepts an argument ``$encoding`` to specify which is the original encoding of the string, in particular when it is not ``utf-8``, which is the default configuration. 

There are options to control which characters shall be encoded: for example, single and double quotes may be converted to not, with ``ENT_QUOTES`` and ``ENT_NOQUOTES``, respectively. 

Finally, ``$double_encode`` makes ``htmlentities()`` skip encoding a second time any entities already set in the string. 

The contrary to ``htmlentities()`` is ``html_entity_decode()``.
```php
<?php

    $str = "A 'quote' is <b>bold</b>";
    
    echo htmlentities($str);
    echo "\n\n";
    echo htmlentities($str, ENT_COMPAT);

?>
```

## See Also

+ [HTML Entity List](https://www.freeformatter.com/html-entities.html)

Related : [HyperText Markup Language (HTML)](HyperText Markup Language (HTML)), [Entities](Entities), [default_charset](default_charset), [html_entity_decode](html_entity_decode), [htmlspecialchars](htmlspecialchars)
