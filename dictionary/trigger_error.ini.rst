.. _trigger_error:
.. meta::
	:description:
		trigger_error(): trigger_error() is a PHP native function, which raise error, in the style of PHP engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: trigger_error()
	:twitter:description: trigger_error(): trigger_error() is a PHP native function, which raise error, in the style of PHP engine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: trigger_error()
	:og:type: article
	:og:description: trigger_error() is a PHP native function, which raise error, in the style of PHP engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/trigger_error.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"trigger_error()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:49:55 +0000","dateModified":"Thu, 22 Jan 2026 12:49:55 +0000","description":"trigger_error() is a PHP native function, which raise error, in the style of PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/trigger_error().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


trigger_error()
---------------

trigger_error() is a PHP native function, which raise error, in the style of PHP engine. It can raise ``notice``, ``warning``, ``deprecated`` and ``error``.

.. code-block:: php
   
   <?php
   
   echo $a;
   
   trigger_error('This is a warning, that says: Undefined variable $x', E_USER_WARNING);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.trigger-error.php>`__

Related : :ref:`@, No Scream Operator <noscream>`, :ref:`Error Reporting <error-reporting>`
