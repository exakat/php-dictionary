# Legacy
Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current. It typically predates modern PHP features such as namespaces, type declarations, object-oriented design, or PSR standards.

Common PHP legacy patterns include procedural scripts, the use of ``mysql_*`` functions, which was removed in version 7.0, the ``var`` keyword for properties, global variables, ``register_globals``, the absence of autoloading, and short open tags.

Maintaining and evolving legacy code requires careful refactoring to avoid regressions, since test coverage is often absent or incomplete. Static analysis tools can help identify outdated constructs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/legacy.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/legacy.ini.html","name":"Legacy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:48:26 +0000","dateModified":"Sat, 11 Jul 2026 14:48:26 +0000","description":"Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Legacy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    // Legacy PHP 4/5 style
    global $db;
    var $property;
    mysql_connect('localhost', 'root', '');

?>
```

**[Documentation](https://en.wikipedia.org/wiki/Legacy_code)**
## See Also

+ [Working Effectively with Legacy Code (book)](https://www.goodreads.com/book/show/44919.Working_Effectively_with_Legacy_Code)

## Related

+ [Var](var.ini.html)
+ [Deprecated](deprecated.ini.html)
+ [Backward Compatible](backward-compatible.ini.html)
+ [Backward Incompatible](backward-incompatible.ini.html)
+ [Refactoring](refactoring.ini.html)
+ [Dead Code](dead-code.ini.html)
+ [Technical Debt](debt.ini.html)
+ [Upgrade](upgrade.ini.html)
+ [Global Variables](global-variable.ini.html)
+ [Register Globals](register-globals.ini.html)
+ [Maintenance](maintenance.ini.html)
+ [Total Cost Of Ownership (TCO)](tco.ini.html)
