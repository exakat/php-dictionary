.. _setlocale:
.. meta::
	:description:
		setlocale: ``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: setlocale
	:twitter:description: setlocale: ``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: setlocale
	:og:type: article
	:og:description: ``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/setlocale.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"setlocale","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/setlocale.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


setlocale
---------

``setlocale()`` is a built-in PHP function that sets locale information, affecting string functions such as ``strtolower()``, ``strtoupper()``, ``strcmp()``, ``strftime()`` and number formatting.

``setlocale()`` changes a global state: once called, it affects all subsequent locale-sensitive operations in the same process. This makes it fragile in long-running applications or when multiple locales are needed simultaneously. The locale must be available on the host system, and availability varies across platforms.

For locale-aware string handling, the ``Intl`` extension provides a more robust and portable alternative, with classes such as ``Collator``, ``NumberFormatter``, and ``IntlDateFormatter``.

``setlocale()`` returns the new locale string on success, or ``false`` if the locale cannot be set.


.. code-block:: php
   
   <?php
   
       // Set locale to French
       setlocale(LC_ALL, 'fr_FR.UTF-8');
   
       // Affects string and number functions globally
       echo strtolower('É'); // may behave differently depending on locale
   
       // Locale may not be available on all systems
       if (setlocale(LC_ALL, 'fr_FR.UTF-8') === false) {
           // locale not available on this host
       }
   
       // Prefer Intl for portable locale-aware operations
       $formatter = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
       echo $formatter->format(1234567.89); // 1 234 567,89
   
   ?>


`Documentation <https://www.php.net/manual/en/function.setlocale.php>`__

See also `Implementing PHP localization: A complete guide <https://lokalise.com/blog/implementing-php-localization-complete-guide/>`_.

Related : :ref:`Internationalization Functions <intl>`, :ref:`strtolower() <strtolower>`, :ref:`strtoupper() <strtoupper>`, :ref:`Locale <locale>`
