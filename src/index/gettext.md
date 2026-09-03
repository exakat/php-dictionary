# gettext Extension
``gettext`` is a library that provides features to translate messages for the users. It includes the famous ``gettext()`` function, and its alias ``_()``, the underscore.

It is based on the locale system, and the ``.mo`` files.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettext.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettext.html","name":"gettext Extension","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 03 Sep 2026 08:40:24 +0000","dateModified":"Thu, 03 Sep 2026 08:40:24 +0000","description":"gettext is a library that provides features to translate messages for the users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/gettext.html"]}],"keywords":["extension"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extension.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/internationalization.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/locale.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/underscore.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/ref.gettext.php"},{"@type":"CreativeWork","name":"gettext site","url":"https:\/\/www.gnu.org\/software\/gettext\/"},{"@type":"CreativeWork","name":"GNU gettext (.po, .pot, .mo)","url":"https:\/\/www.locize.com\/file-formats\/gettext"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"gettext"}]}]}</script>
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
+ [GNU gettext (.po, .pot, .mo)](https://www.locize.com/file-formats/gettext)

## Related

+ [Extensions](extension.html)
+ [Internationalization](internationalization.html)
+ [Locale](locale.html)
+ [Underscore](underscore.html)
