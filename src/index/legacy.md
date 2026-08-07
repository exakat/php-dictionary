# Legacy
Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current. It typically predates modern PHP features such as namespaces, type declarations, object-oriented design, or PSR standards.

Common PHP legacy patterns include procedural scripts, the use of ``mysql_*`` functions, which was removed in version 7.0, the ``var`` keyword for properties, global variables, ``register_globals``, the absence of autoloading, and short open tags.

Maintaining and evolving legacy code requires careful refactoring to avoid regressions, since test coverage is often absent or incomplete. Static analysis tools can help identify outdated constructs.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.13","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/legacy.html","name":"Legacy","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 14:48:26 +0000","dateModified":"Sat, 11 Jul 2026 14:48:26 +0000","description":"Legacy code refers to existing code written under older practices, PHP versions, or conventions that are no longer considered current","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/Legacy.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":2,"name":"Legacy"}]}]}</script>
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

+ [Var](var.html)
+ [Deprecated](deprecated.html)
+ [Backward Compatible](backward-compatible.html)
+ [Backward Incompatible](backward-incompatible.html)
+ [Refactoring](refactoring.html)
+ [Dead Code](dead-code.html)
+ [Technical Debt](debt.html)
+ [Upgrade](upgrade.html)
+ [Global Variables](global-variable.html)
+ [Register Globals](register-globals.html)
+ [Maintenance](maintenance.html)
+ [Total Cost Of Ownership (TCO)](tco.html)
