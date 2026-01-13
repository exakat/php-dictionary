.. _nan:
.. meta::
	:description:
		Not A Number (NAN): Not A Number is a PHP constant, also called ``NAN``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Not A Number (NAN)
	:twitter:description: Not A Number (NAN): Not A Number is a PHP constant, also called ``NAN``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Not A Number (NAN)
	:og:type: article
	:og:description: Not A Number is a PHP constant, also called ``NAN``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nan.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Cannot redeclare foo() (previously declared in file:3).html","name":"Not A Number (NAN)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:12:02 +0000","dateModified":"Wed, 05 Mar 2025 15:12:02 +0000","description":"Not A Number is a PHP constant, also called ``NAN``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Not A Number (NAN).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Not A Number (NAN)
------------------

Not A Number is a PHP constant, also called ``NAN``. It represents the result of a math function, when the provided arguments are out of the application domain of that function. For example, ``acos()`` only works with values between -1 and 1, so processing ``acos(10)`` returns a ``NAN``. 

This is slightly different from ``tan($x)``, with ``$x = M_PI;``. In this case, the returned value is ``INF``. 

While a Not A Number value is a float, it is possible to test a number with ``is_nan()``. It is not possible to compare ``NAN`` together.

``NAN`` is displayed as ``NAN``.

.. code-block:: php
   
   <?php
   
   $nan = NAN;
   
   var_dump(is_nan($nan)); // true 
   
   var_dump(acos(3) === NAN);  // false 
   
   var_dump(acos(3));  // float(NAN)
   
   ?>


`Documentation <https://www.php.net/manual/en/math.constants.php>`__

See also `is_nan() <https://www.php.net/manual/en/function.is-nan.php>`_

Related : :ref:`Floating Point Numbers <float>`
