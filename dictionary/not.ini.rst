.. _not:
.. _!:
.. meta::
	:description:
		Not Operator: The not operator return the opposite boolean of a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Not Operator
	:twitter:description: Not Operator: The not operator return the opposite boolean of a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Not Operator
	:og:type: article
	:og:description: The not operator return the opposite boolean of a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/not.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Not Operator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The not operator return the opposite boolean of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Not Operator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Not Operator
------------

The not operator return the opposite boolean of a value. The value is first converted to boolean, according to classic PHP rules, then, negated. This operator returns a boolean.

.. code-block:: php
   
   <?php
   
   $a = 3;
   
   if (!$a) {
       print 'OK';
   } else {
       print 'KO';
   }
   
   ?>

