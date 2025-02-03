.. _never:
.. _never-type:
.. meta::
	:description:
		Never Type: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Never Type
	:twitter:description: Never Type: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Never Type
	:og:type: article
	:og:description: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/never.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Never Type","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"``never`` is a special return type that signals a method that never returns : it only dies or throws an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Never Type.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Never Type
----------

``never`` is a special return type that signals a method that never returns : it only dies or throws an exception.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       headers('Location: https://www.exakat.io/');
       die();
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/noreturn_type>`__

See also `The "never" Return Type for PHP <https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303>`_

Related : :ref:`Type System <type>`

Added in PHP 8.1+
