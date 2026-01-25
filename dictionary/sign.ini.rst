.. _sign:
.. meta::
	:description:
		Sign: A signed expression is an expression that starts with the ``+`` or the ``-`` token.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sign
	:twitter:description: Sign: A signed expression is an expression that starts with the ``+`` or the ``-`` token
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sign
	:og:type: article
	:og:description: A signed expression is an expression that starts with the ``+`` or the ``-`` token
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sign.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sign","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"A signed expression is an expression that starts with the ``+`` or the ``-`` token","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sign.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sign
----

A signed expression is an expression that starts with the ``+`` or the ``-`` token. 

``+`` is the default value, and omitted most of the time. When present, it has no impact on the value, except that it forces the conversion to ``float`` or ``int``, depending on the value. It may also yield a type error, if the conversion is not possible.

``-`` is the explicit value, and the most useful. When present, it turns the value into a ``float`` or ``int``, and multiply it with ``-1``.

PHP tolerate multiple distinct sign tokens: ``+-+-+1`` is the same as ``1``. It is strongly recommended to avoid using it. When an arbitrary number of sign change must be executed, a multiplication by ``-1`` works well.

The signs are distinct from numeric values: ``-9`` is not ``minus nine``, but rather ``-1 * 9``. This is needed to handle expressions such as ``- ( $a * 2)``, where ``-`` applies to the result of the parenthesis. 

It also leads to the unexpected result that ``-3 ** 2 == -9``. In this case, ``**`` power has priority over ``-``, so this is really ``-(3 ** 2) == -9``.

.. code-block:: php
   
   <?php
   
   $a = 2;
   $b = -$a; // -2
   
   $c = 123.4;
   $d = +$c; // float(123.4)
   
   // Warning
   
   $e = -3 ** 2; // -9
   
   $f = +-+-+-+-+-4; // -4
   
   ?>


Related : :ref:`Exponent <power>`, :ref:`integer <integer>`, :ref:`Floating Point Numbers <float>`, :ref:`Cast Operator <cast>`
