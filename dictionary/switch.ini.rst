.. _switch:
.. _endswitch:
.. meta::
	:description:
		Switch: The ``switch`` expression branches evaluation based on an equality check of a value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch
	:twitter:description: Switch: The ``switch`` expression branches evaluation based on an equality check of a value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Switch
	:og:type: article
	:og:description: The ``switch`` expression branches evaluation based on an equality check of a value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/switch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Switch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"The ``switch`` expression branches evaluation based on an equality check of a value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Switch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Switch
------

The ``switch`` expression branches evaluation based on an equality check of a value. It also handles a ``default`` case, when none of the explicit cases match.

Each case is an expression, and shall be used that way. 

``switch`` use a relaxed comparison between the parameter value and the case values. This means that some type juggling happens, and some literals might behave as identical.


.. code-block:: php
   
   <?php
   
   $b = 1;
   switch ($i) {
       case 0:
           echo 'i equals 0';
           break;
       case 1:
           echo 'i equals 1';
           break;
       case $b + 1:
           echo 'i equals '.($b + 1);
           break;
       default:
       	echo 'i is none of the expected values.';
   }
   
   switch (false) {
       case null:
       	// false == null so this is the case
           echo 'This is null';
           break;
       case '':
           echo 'This is empty string';
           break;
       default:
       	echo 'This is none of the expected values.';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.switch.php>`__

See also `Compact switch alternative <https://tomlankhorst.nl/compact-switch-alternative-php/>`_

Related : :ref:`Match <match>`, :ref:`Default <default>`, :ref:`Strict Comparison <strict-comparison>`, :ref:`Simple Switch <simple-switch>`, :ref:`If Then Else <if-then>`, :ref:`Break <break>`, :ref:`Case <case>`, :ref:`Comparison <comparison>`, :ref:`Conditional Structures <conditional-structure>`, :ref:`Control Flow <control-flow>`, :ref:`Relaxed Comparison <relaxed-comparison>`, :ref:`Semicolon <semicolon>`, :ref:`Switch Case <switch-case>`, :ref:`Switch Default <switch-default>`

Added in PHP 4.0
