.. _htmlspecialchars:
.. _htmlspecialchars_decode:
.. meta::
	:description:
		htmlspecialchars: ``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: htmlspecialchars
	:twitter:description: htmlspecialchars: ``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: htmlspecialchars
	:og:type: article
	:og:description: ``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/htmlspecialchars.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/htmlspecialchars.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/htmlspecialchars.ini.html","name":"htmlspecialchars","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/htmlspecialchars.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


htmlspecialchars
----------------

``htmlspecialchars()`` is a built-in PHP function that converts special characters to their HTML entity equivalents.

It is commonly used to prevent Cross-Site Scripting, XSS, attacks when outputting user-supplied data in HTML. The characters it converts include ``&``, ``"``, ``'``, ``<`` and ``>``.

The flags parameter controls which quotes are converted: ``ENT_QUOTES`` converts both double and single quotes, which is recommended when outputting values in HTML attributes. Omitting quote handling is a classic source of XSS vulnerabilities.

``htmlspecialchars()`` has an inverse function called ``htmlspecialchars_decode()``, and a more exhaustive variant called ``htmlentities()``, which converts all applicable characters.


.. code-block:: php
   
   <?php
   
       $userInput = '<script>alert("XSS")</script>';
   
       // Safe output: converts < > " & to HTML entities
       echo htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
   
       // Dangerous: missing ENT_QUOTES leaves single quotes unescaped
       echo htmlspecialchars($userInput, ENT_COMPAT, 'UTF-8');
   
       // Reverse the conversion
       $html = '&lt;b&gt;Hello&lt;/b&gt;';
       echo htmlspecialchars_decode($html, ENT_QUOTES);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.htmlspecialchars.php>`__

See also `OWASP XSS Prevention Cheat Sheet <https://cheatsheetseries.owasp.org/cheatsheets/Cross_Site_Scripting_Prevention_Cheat_Sheet.html>`_.

Related : :ref:`htmlentities() <htmlentities>`, :ref:`Cross Site Scripting (XSS) <xss>`, :ref:`Security <security>`, :ref:`default_charset <default_charset>`, :ref:`html_entity_decode <html_entity_decode>`
