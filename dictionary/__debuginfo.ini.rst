.. _-__debuginfo:
.. meta::
	:description:
		__debugInfo() Method: ``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __debugInfo() Method
	:twitter:description: __debugInfo() Method: ``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __debugInfo() Method
	:og:type: article
	:og:description: ``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__debuginfo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__debuginfo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__debuginfo.ini.html","name":"__debugInfo() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 18:42:46 +0000","dateModified":"Mon, 13 Jul 2026 18:42:46 +0000","description":"``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__debugInfo() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__debugInfo() Method
--------------------

``__debugInfo()`` is a magic method: it is called by ``var_dump()`` to customize the information displayed for an object.

By default, ``var_dump()`` shows every property of an object, including private and protected ones. When ``__debugInfo()`` is defined, its return value is shown instead, allowing sensitive properties to be hidden, computed values to be added, or the output to be simplified.

``__debugInfo()`` must return an array. The keys become the displayed property names, and are not required to match actual property names.

``__debugInfo()`` was introduced in version 5.6. Before that version, ``var_dump()`` always displays the object's actual properties, and the method, if present, is simply ignored.

.. code-block:: php
   
   <?php
   
       class X {
           private $public = 'a';
           private $secret = 'password';
   
           function __debugInfo() {
               return ['public' => $this->public,
                       'secret' => '***redacted***'];
           }
       }
   
       var_dump(new X);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo>`__

See also `PHP __debugInfo Magic Method <https://www.php.net/manual/en/language.oop5.magic.php#object.debuginfo>`_.

Related : :ref:`Magic Methods <magic-method>`, :ref:`var_dump() <var_dump>`, :ref:`__toString() Method <-__tostring>`, :ref:`__sleep() Method <-__sleep>`, :ref:`__wakeup() Method <-__wakeup>`, :ref:`print_r() <print_r>`, :ref:`var_export() <var_export>`

Added in PHP 5.6
