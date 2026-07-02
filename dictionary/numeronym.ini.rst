.. _numeronym:
.. _numerical-abbreviation:
.. meta::
	:description:
		Numeronym: A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Numeronym
	:twitter:description: Numeronym: A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Numeronym
	:og:type: article
	:og:description: A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/numeronym.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Numeronym","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 30 Jun 2026 08:56:03 +0000","dateModified":"Tue, 30 Jun 2026 08:56:03 +0000","description":"A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Numeronym.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Numeronym
---------

A numeronym is an abbreviation where a number replaces the omitted middle letters of a word, typically the count of letters skipped. The pattern is: first letter + count + last letter.

Common examples in the PHP and broader software ecosystem:
- ``i18n``: internationalization, with 18 letters between i and n
- ``l10n``: localization
- ``a11y``: accessibility
- ``k8s``: Kubernetes, with 8 letters between K and s
- ``c10k``: a special case: the letter c plus 10,000 connections, not strictly first/last but widely understood
- ``p13n``: personalization
- ``o11y``: observability

PHP uses ``i18n`` and ``l10n`` pervasively in documentation, library names like ``symfony/translation``, ``gettext``, and configuration keys. Recognising numeronyms reduces friction when reading technical documentation, RFC titles, and dependency names.

.. code-block:: php
   
   <?php
   
   // i18n: internationalization
   // The intl extension and gettext are PHP's native i18n tools
   $fmt = new MessageFormatter('fr_FR', 'Bonjour {name}');
   echo $fmt->format(['name' => 'Damien']); // Bonjour Damien
   
   // l10n: localization — formatting numbers, dates, currencies per locale
   $numFmt = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);
   echo $numFmt->formatCurrency(1234.56, 'EUR'); // 1 234,56 €
   
   // a11y: accessibility — not a PHP runtime concept,
   // but relevant when generating HTML output from PHP templates
   
   // c10k: see c10k.ini — the concurrency problem, not a strict numeronym
   // but universally treated as one in server engineering discourse
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Numeronym>`__

See also `Wikipedia: Numeronym <https://en.wikipedia.org/wiki/Numeronym>`_ and `PHP Internationalization <https://www.php.net/manual/en/book.intl.php>`_.

Related : :ref:`Internationalization <internationalization>`, :ref:`C10K <c10k>`, :ref:`Encoding <encoding>`, :ref:`Internationalization Functions <intl>`
