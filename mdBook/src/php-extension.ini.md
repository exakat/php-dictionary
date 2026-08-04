# PHP Extensions
Extensions are PHP engine module system. They are compiled into PHP, and offer extra features, such as functions, classes, traits and directive.

Extensions are published in the PIE repository. They were used to be published in the PECL repository, but it is being sunset at the moment.

Some are available by default, in the PHP standard configuration.
```php
<?php

    // Example with the ext/pspell extensions, for orthographic checks
    $pspell = pspell_new("en");
    
    if (pspell_check($pspell, "testt")) {
        echo "This is a valid spelling";
    } else {
        echo "Sorry, wrong spelling";
    }

?>
```

## See Also

+ [PECL repository (deprecated)](https://pecl.php.net/)

Related : [PHP Engine](PHP Engine)
