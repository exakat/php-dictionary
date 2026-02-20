.. _numeric-string:
.. meta::
	:description:
		Numeric String: A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric (integer or float).
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Numeric String
	:twitter:description: Numeric String: A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric (integer or float)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Numeric String
	:og:type: article
	:og:description: A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric (integer or float)
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/numeric-string.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Numeric String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 19:30:53 +0000","dateModified":"Wed, 18 Feb 2026 19:30:53 +0000","description":"A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric (integer or float)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Numeric String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Numeric String
--------------

A numeric string, is a string that contains a numeric value, or can be easily converted from string to numeric (integer or float). 

Some of such strings are obvious, and commonly used: ``123`` or ``'45.67'``. HereDocs string may also be a numeric string. 

Non numeric strings are mostly obvious too, such as: ``abc`` or ``'中文'``. 

Then, there are some various cases: 

+ '123db': leading strings, starting with digits and finished by non-digit characters are converted as much as possible.
+ '2e3': the exponent is recognized: when ``e`` (case insensitive), is between two digit, the float notation is used. This is 2000.
+ '+00', '-10': leading ``+`` and ``-`` are handled. There can only be one, unlike for hardcoded integers.
+ ' 20 ': leading and trailing spaces, tabulations, new lines, new feed are omitted. 
+ ``str_repeat('0', 10001).2``: PHP tries to convert as much as possible. Leading 0 will basically be ignored, however numerous they are.
+ ``(int) str_repeat('1', 10001)``: PHP returns 0 when conversion fails
+  ``str_repeat('1', 10001) + 0``: PHP returns ``INF`` when the conversion fails and is silent.
+ '三', 'CM': other ways of counting are not recognized

A string may be checked with the ``is_numeric()`` function. It cannot be checked with ``is_int()`` and ``is_float()``.

.. code-block:: php
   
   <?php
   
       var_dump(is_numeric('中文'));
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.numeric-strings.php>`__

Related : :ref:`Leading Numeric String <leading-numeric-string>`
