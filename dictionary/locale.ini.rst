.. _locale:
.. meta::
	:description:
		Locale: Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Locale
	:twitter:description: Locale: Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Locale
	:og:type: article
	:og:description: Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/locale.ini.html
	:og:locale: en


Locale
------

Locale are a set of configuration which describe how to handle different formats of data, such as monetary values, dates and time.

Locales are extracted from the system, and depends on a country name and a language name. For example, `fr-FR` for French French, `nl_NL` for Dutch, or `zh_CN` for Chinese Chinese. 

Locale are supported with the ext/icu extension, and also, natively with the setlocale() function. 


.. code-block:: php
   
   <?php
   /* Set locale to Dutch */
   setlocale(LC_ALL, 'nl_NL');
   
   /* Output: vrijdag 22 december 1978 */
   echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));
   
   ?>
   


`Documentation <https://www.php.net/manual/en/class.locale.php>`__

See also `setlocale() <https://www.php.net/manual/en/class.locale.php>`_
