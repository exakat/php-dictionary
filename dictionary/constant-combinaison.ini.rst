.. _constant-combinaison:
.. meta::
	:description:
		Constant Combinaison: PHP combines predefined constants using bitwise operators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constant Combinaison
	:twitter:description: Constant Combinaison: PHP combines predefined constants using bitwise operators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constant Combinaison
	:og:type: article
	:og:description: PHP combines predefined constants using bitwise operators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-combinaison.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Constant Combinaison","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Mar 2026 15:47:19 +0000","dateModified":"Sat, 07 Mar 2026 15:47:19 +0000","description":"PHP combines predefined constants using bitwise operators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Constant Combinaison.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Constant Combinaison
--------------------

PHP combines predefined constants using bitwise operators. This is heavily used with error level constants, file permissions, and various flags.

Combine two constants into one, with the ``|`` or operator: ``E_NOTICE | E_WARNING``. This might also be achieved with ``+`` operator.

Check if a flag is set, with the ``&`` and operator: ``E_ALL | E_WARNING``.

Exclude one flag, with the ``~`` tilde operator: ``E_ALL & ~E_WARNING``.

Toggle flags, with the ``^``xor operator: ``E_ALL ^ E_WARNING``.

These combinaisons are possible when the constants are distinct powers of 2. That way, combining ``E_WARNING = 2   // 0010`` and ``E_NOTICE  = 8   // 1000`` gives ``E_WARNING | E_NOTICE = 10  // 1010 (both bits set)``.

Constant combinaison is used with such functions as ``error_reporting()``, ``phpcredits()``, ``htmlentities()``, ``sort()`` though not with all constants, etc.

.. code-block:: php
   
   <?php
   
   // Combine multiple error levels
   error_reporting(E_NOTICE | E_WARNING | E_ERROR);
   
   // More common: start from ALL and exclude some
   error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
   
   // -1 represents a flag with ALL activated 
   error_reporting(-1); 
   ?>


Related : , :ref:`Sort <sort>`, :ref:`Bitfield <bitfield>`
