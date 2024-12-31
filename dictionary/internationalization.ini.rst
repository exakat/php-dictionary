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
	:og:title: Internationalization
	:og:type: article
	:og:description: Internationalization is the process to make the human interface of a program in a local language
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/internationalization.ini.html
	:og:locale: en


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
