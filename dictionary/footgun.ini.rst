.. _footgun:
.. meta::
	:description:
		Footgun: A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Footgun
	:twitter:description: Footgun: A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Footgun
	:og:type: article
	:og:description: A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/footgun.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/footgun.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/footgun.ini.html","name":"Footgun","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 10:04:48 +0000","dateModified":"Mon, 13 Jul 2026 10:04:48 +0000","description":"A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Footgun.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Footgun
-------

A footgun is a feature or a piece of code that makes it easy to unintentionally shoot oneself in the foot: it works as documented, yet its default behavior, its naming, or its side effects are so counter-intuitive that developers routinely misuse it and cause bugs, security holes, or data loss.

Unlike a straightforward bug, a footgun is ``working as intended``: the language or the library designer chose that behavior on purpose, often for historical or backward-compatibility reasons. The danger comes from the gap between what the code looks like it does, and what it actually does.

PHP has accumulated a fair number of footguns over the years, among them:

+ ``eval()``, which executes arbitrary strings as PHP code, and opens the door to code injection when fed external data
+ The ``==`` comparison operator, whose type juggling once made ``'abc' == 0`` evaluate to ``true``
+ ``extract()``, which imports an entire array into the current symbol table, potentially overwriting existing variables
+ Variable variables ``$$name``, which make static analysis and refactoring unreliable
+ The ``@`` error suppression operator, which silences every error, warning, and notice of an expression, hiding real problems
+ ``unserialize()`` on untrusted data, which can trigger object injection through ``__wakeup()`` or ``__destruct()``
+ Passing arguments by reference, which lets a function silently modify a variable in the caller's scope
+ Loose typing in ``switch`` and ``in_array()``, which relies on the same type juggling rules as ``==``
+ ``array_merge()`` versus the ``+`` operator on arrays, which handle numeric keys and duplicate keys very differently

Static analysis tools like Exakat can flag most of these footguns automatically, before they misfire in production.

.. code-block:: php
   
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


`Documentation <https://www.php.net/manual/en/language.operators.errorcontrol.php>`__

See also `What is a footgun? — Wiktionary <https://en.wiktionary.org/wiki/footgun>`_ and `PHP: a fractal of bad design <https://eev.ee/blog/2012/04/09/php-a-fractal-of-bad-design/>`_.

Related : :ref:`Eval() <eval>`, :ref:`extract() <extract>`, :ref:`Error Suppression <error-suppression>`, :ref:`Variable Variables <variable-variable>`, :ref:`Type Juggling <type-juggling>`, :ref:`References <reference>`, :ref:`Code Injection <code-injection>`, :ref:`Anti-Pattern <anti-pattern>`, :ref:`Code Smell <code-smell>`, :ref:`Unserialization <unserialize>`
