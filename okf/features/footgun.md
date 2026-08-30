---
type: "folklore"
title: "Footgun"
description: "A ``footgun`` is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss."
resource: "https://www.php.net/manual/en/language.operators.errorcontrol.php"
tags: ["folklore", "concept", "bad practice", "security"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/language.operators.errorcontrol.php](https://www.php.net/manual/en/language.operators.errorcontrol.php)

## See Also
- [What is a footgun? — Wiktionary](https://en.wiktionary.org/wiki/footgun)
- [PHP: a fractal of bad design](https://eev.ee/blog/2012/04/09/php-a-fractal-of-bad-design/)

## Related
- [Eval()](/features/eval.md)
- [extract()](/features/extract.md)
- [Error Suppression](/features/error-suppression.md)
- [Variable Variables](/features/variable-variable.md)
- [Type Juggling](/features/type-juggling.md)
- [References](/features/reference.md)
- [Code Injection](/features/code-injection.md)
- [Anti-Pattern](/features/anti-pattern.md)
- [Code Smell](/features/code-smell.md)
- [Unserialization](/features/unserialize.md)

