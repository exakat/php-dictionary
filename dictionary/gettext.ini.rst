.. _gettext:
.. meta::
	:description:
		gettext Extension: gettext is a library that provides features to translate messages for the users.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: gettext Extension
	:twitter:description: gettext Extension: gettext is a library that provides features to translate messages for the users
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: gettext Extension
	:og:type: article
	:og:description: gettext is a library that provides features to translate messages for the users
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gettext.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"gettext Extension","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"gettext is a library that provides features to translate messages for the users","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/gettext Extension.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


gettext Extension
-----------------

gettext is a library that provides features to translate messages for the users. It includes the famous gettext() function, and its alias ``_()`` (underscore).

It is based on the locale system, and the .mo files.

.. code-block:: php
   
   <?php
   
   // example from the PHP manual: https://www.php.net/manual/en/function.gettext.php
   // Set language to German
   putenv('LC_ALL=de_DE');
   setlocale(LC_ALL, 'de_DE');
   
   // Specify location of translation tables
   bindtextdomain(myPHPApp, ./locale);
   
   // Choose domain
   textdomain(myPHPApp);
   
   // Translation is looking for in ./locale/de_DE/LC_MESSAGES/myPHPApp.mo now
   
   // Print a test message
   echo gettext(Welcome to My PHP Application);
   
   // Or use the alias _() for gettext()
   echo _(Have a nice day);
   ?>


`Documentation <https://www.php.net/manual/en/ref.gettext.php>`__

See also https://www.php.net/manual/en/function.gettext.php
