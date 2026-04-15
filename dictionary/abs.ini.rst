.. _abs:
.. meta::
	:description:
		abs(): ``abs()`` calculates the absolute value of a number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: abs()
	:twitter:description: abs(): ``abs()`` calculates the absolute value of a number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: abs()
	:og:type: article
	:og:description: ``abs()`` calculates the absolute value of a number
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/abs.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"abs()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``abs()`` calculates the absolute value of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/abs().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


abs()
-----

``abs()`` calculates the absolute value of a number. It is the value itself, when the number is positive or zero, and it is the opposite of the number when the number is negative.

Almost all integers have an absolute value: the only exception is ``PHP_INT_MIN``. Its value is ``-9223372036854775808``, and the actual absolute value would be ``9223372036854775808``, which is bigger than ``PHP_INT_MAX``. 

``abs()`` takes ``float`` and ``int`` as types. Except for the exception above, giving a float to ``abs()`` produces a float, and giving it an integer, produces an integer. Other types are forbidden. Object have to be turned explictly into a number.

.. code-block:: php
   
   <?php
   
       $a = -2;
       print abs($a); // 2
       print abs(abs($a)); // 2
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Absolute_value>`__

Related : :ref:`Floating Point Numbers <float>`, :ref:`integer <integer>`, :ref:`Number <number>`
