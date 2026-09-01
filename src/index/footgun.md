# Footgun
A ``footgun`` is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss.

Unlike a straightforward bug, a ``footgun`` is ``working as intended``: the language or the library designer chose that behavior on purpose, often for historical or backward-compatibility reasons. The danger comes from the gap between what the code looks like it does, and what it actually does.

PHP has accumulated a fair number of ``footguns`` over the years, among them:

+ ``eval()``, which executes arbitrary strings as PHP code, and opens the door to code injection when fed external data
+ The ``==`` comparison operator, whose type juggling once made ``'abc' == 0`` evaluate to ``true``
+ ``extract()``, which imports an entire array into the current symbol table, potentially overwriting existing variables
+ Variable variables ``$$name``, which make static analysis and refactoring unreliable
+ The ``@`` error suppression operator, which silences every error, warning, and notice of an expression, hiding real problems
+ ``unserialize()`` on untrusted data, which can trigger object injection through ``__wakeup()`` or ``__destruct()``
+ Passing arguments by reference, which lets a function silently modify a variable in the caller's scope
+ Loose typing in ``switch`` and ``in_array()``, which relies on the same type juggling rules as ``==``
+ ``array_merge()`` versus the ``+`` operator on arrays, which handle numeric keys and duplicate keys very differently

Static analysis tools can flag most of these ``footguns`` automatically, before they misfire in production.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/footgun.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/footgun.html","name":"Footgun","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 13 Aug 2026 08:28:05 +0000","dateModified":"Thu, 13 Aug 2026 08:28:05 +0000","description":"A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/footgun.html"]}],"keywords":["folklore","concept","bad practice","security"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/eval.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/extract.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/error-suppression.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/variable-variable.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/type-juggling.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/reference.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-injection.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/anti-pattern.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/code-smell.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/unserialize.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/language.operators.errorcontrol.php"},{"@type":"CreativeWork","name":"What is a footgun? \u2014 Wiktionary","url":"https:\/\/en.wiktionary.org\/wiki\/footgun"},{"@type":"CreativeWork","name":"PHP: a fractal of bad design","url":"https:\/\/eev.ee\/blog\/2012\/04\/09\/php-a-fractal-of-bad-design\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.31","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"footgun"}]}]}</script>
```php
<?php

    // Footgun: type juggling with ==
    var_dump('abc' == 0); // true in version 7, false in version 8

    // Footgun: extract() overwriting existing variables
    $isAdmin = false;
    extract($_GET); // if $_GET['isAdmin'] = 1, $isAdmin becomes 1

    // Footgun: eval() on external data
    eval('$name = ' . $_GET['name'] . ';'); // arbitrary code execution

    // Footgun: @ hides the actual error
    $data = @json_decode($json); // fails silently, $data is null

?>
```

**[Documentation](https://www.php.net/manual/en/language.operators.errorcontrol.php)**
## See Also

+ [What is a footgun? — Wiktionary](https://en.wiktionary.org/wiki/footgun)
+ [PHP: a fractal of bad design](https://eev.ee/blog/2012/04/09/php-a-fractal-of-bad-design/)

## Related

+ [Eval()](eval.html)
+ [extract()](extract.html)
+ [Error Suppression](error-suppression.html)
+ [Variable Variables](variable-variable.html)
+ [Type Juggling](type-juggling.html)
+ [References](reference.html)
+ [Code Injection](code-injection.html)
+ [Anti-Pattern](anti-pattern.html)
+ [Code Smell](code-smell.html)
+ [Unserialization](unserialize.html)
