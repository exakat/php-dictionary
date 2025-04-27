.. _sanitation:
.. _sanitization:
.. meta::
	:description:
		Sanitation: Sanitation is the process to clean data and remove any unwanted parts.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sanitation
	:twitter:description: Sanitation: Sanitation is the process to clean data and remove any unwanted parts
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sanitation
	:og:type: article
	:og:description: Sanitation is the process to clean data and remove any unwanted parts
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sanitation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Sanitation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Sanitation is the process to clean data and remove any unwanted parts","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sanitation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sanitation
----------

Sanitation is the process to clean data and remove any unwanted parts. The data may end up modified by this process, sometimes quite a lot. There are native and extension functions in PHP to perform sanitation, as long as components.

.. code-block:: php
   
   <?php
   
   echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
   
   ?>


`Documentation <https://www.php.net/manual/en/filter.examples.validation.php>`__

See also `Data sanitization <https://en.wikipedia.org/wiki/Data_sanitization>`_

Related : :ref:`Validation <validation>`

Related packages : `waavi/sanitizer <https://packagist.org/packages/waavi/sanitizer>`_, `waavi/sanitizer <https://packagist.org/packages/waavi/sanitizer>`_
