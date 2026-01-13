.. _internationalization:
.. _i18n:
.. _localization:
.. _localisation:
.. meta::
	:description:
		Internationalization: Internationalization is the process to make the human interface of a program in a local language.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Internationalization
	:twitter:description: Internationalization: Internationalization is the process to make the human interface of a program in a local language
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Internationalization
	:og:type: article
	:og:description: Internationalization is the process to make the human interface of a program in a local language
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/internationalization.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Internationalization","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Internationalization is the process to make the human interface of a program in a local language","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Internationalization.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Internationalization
--------------------

Internationalization is the process to make the human interface of a program in a local language. 

PHP includes some internationalization capabilities, via the locale, for dates or money format, or with the ext/intl extension. 

Most of the interface translations for application is done with specific components, such as `Symfony/translation`. Translation of interface messages is part of this concept.

Internationalization is also called `i18n`, aka i, 18 letters and n. This is shorter to write. This word may be written with a z or an s, depending on the flavor of English being used.


.. code-block:: php
   
   <?php
   /* Configure le script en hollandais */
   setlocale(LC_ALL, 'nl_NL');
   
   /* Affiche : vrijdag 22 december 1978 */
   echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));
   
   ?>


`Documentation <https://www.php.net/manual/en/book.intl.php>`__

See also `PHP internationalization - i18n mechanisms tutorial <https://lingohub.com/blog/2013/06/php-internationalization-i18n-mechanisms-tutorial>`_, `Implementing PHP localization: A complete guide <https://lokalise.com/blog/implementing-php-localization-complete-guide/>`_

Related : :ref:`Locale <locale>`, :ref:`Internationalization Functions <intl>`
