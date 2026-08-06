# gettext Extension
``gettext`` is a library that provides features to translate messages for the users. It includes the famous ``gettext()`` function, and its alias ``_()``, the underscore.

It is based on the locale system, and the ``.mo`` files.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gettext.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gettext.html","name":"gettext Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 07:30:14 +0000","dateModified":"Thu, 09 Jul 2026 07:30:14 +0000","description":"``gettext`` is a library that provides features to translate messages for the users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/gettext Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/ref.gettext.php)**
## See Also

+ [gettext site](https://www.gnu.org/software/gettext/)

## Related

+ [Extensions](extension.ini.html)
+ [Internationalization](internationalization.ini.html)
+ [Locale](locale.ini.html)
+ [Underscore](underscore.ini.html)
