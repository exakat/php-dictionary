.. _e:
.. _m_e:
.. _euler:
.. meta::
	:description:
		E: The letter ``e``, or ``E``, plays several distinct roles:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: E
	:twitter:description: E: The letter ``e``, or ``E``, plays several distinct roles:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: E
	:og:type: article
	:og:description: The letter ``e``, or ``E``, plays several distinct roles:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/e.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"E","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The letter ``e``, or ``E``, plays several distinct roles:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/E.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


E
-

The letter ``e``, or ``E``, plays several distinct roles:

+ Floating number format: ``e`` is used as part of a float literal to denote a power of 10. ``1.5e3`` means ``1.5 × 10³ = 1500``, and ``7E-10`` means ``7 × 10⁻¹⁰``. The letter is case-insensitive in this context. It is not an operator; it is part of the numeric syntax
+ Exponential constant: ``M_E`` is a PHP predefined math constant equal to Euler's number ``e ≈ 2.718281828459045``. It is the base of the natural logarithm, and satisfies ``log(M_E) === 1``. The function ``exp(1)`` also returns this value, although floating-point rounding means ``exp(1) === M_E`` may evaluate to ``false``
+ Euler constant: ``M_EULER`` is a distinct PHP constant, equal to the Euler constant ``γ ≈ 0.5772156649015329``. It is also called Euler-Mascheroni, or gamma. It should not be confused with ``M_E``
+ Error constant prefix: all PHP error level constants start with ``E_``: ``E_ERROR``, ``E_WARNING``, ``E_NOTICE``, ``E_DEPRECATED``, ``E_ALL``, and others. They are used with ``error_reporting()`` and combined with bitwise operators
+ Escape sequence for escape character: in double-quoted strings and heredocs, ``\e`` is the escape sequence for the ESC character, ASCII 27, ``0x1B``. It is used in ANSI terminal escape codes.


.. code-block:: php
   
   <?php
   
       // e in float scientific notation
       $a = 1.5e3;   // 1500.0
       $b = 7E-10;   // 0.0000000007
       $c = 1e308;   // close to PHP_FLOAT_MAX
   
       // M_E : Euler's number
       echo M_E;             // 2.718281828459
       echo exp(1);          // 2.718281828459
       echo log(M_E);        // 1
   
       // M_EULER : Euler-Mascheroni constant (different from M_E)
       echo M_EULER;         // 0.57721566490153
   
       // E_ error level constants
       error_reporting(E_ALL);
       error_reporting(E_ERROR | E_WARNING);
   
       // \e escape sequence : ESC character for ANSI terminal codes
       echo "\e[31mRed text\e[0m\n";
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.float.php>`__

See also `Math constants <https://www.php.net/manual/en/math.constants.php>`_ and `Float syntax <https://www.php.net/manual/en/language.types.float.php>`_.

Related : :ref:`Floating Point Numbers <float>`, :ref:`Exponential <exponential>`, :ref:`Logarithm <logarithm>`, :ref:`Not A Number (NAN) <nan>`, :ref:`INF <inf>`, :ref:`Error Reporting <error-reporting>`, :ref:`Escape Sequences <escape-sequence>`, :ref:`Exponent <exponent>`
