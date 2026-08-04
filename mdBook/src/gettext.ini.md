# gettext Extension
``gettext`` is a library that provides features to translate messages for the users. It includes the famous ``gettext()`` function, and its alias ``_()``, the underscore.

It is based on the locale system, and the ``.mo`` files.
```php
<?php

    // example from the PHP manual: https://www.php.net/manual/en/function.gettext.php
    // Set language to German
    putenv('LC_ALL=de_DE');
    setlocale(LC_ALL, 'de_DE');
    
    // Specify location of translation tables
    bindtextdomain("myPHPApp", "./locale");
    
    // Choose domain
    textdomain("myPHPApp");
    
    // Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now
    
    // Print a test message
    echo gettext("Welcome to My PHP Application");
    
    // Or use the alias _() for gettext()
    echo "_(Have a nice day)";

?>
```

## See Also

+ [gettext site](https://www.gnu.org/software/gettext/)

Related : [Extensions](Extensions), [Internationalization](Internationalization), [Locale](Locale), [Underscore](Underscore)
