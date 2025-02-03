.. _domainexception:
.. meta::
	:description:
		DomainException: Exception thrown if a value does not adhere to a defined valid data domain.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DomainException
	:twitter:description: DomainException: Exception thrown if a value does not adhere to a defined valid data domain
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DomainException
	:og:type: article
	:og:description: Exception thrown if a value does not adhere to a defined valid data domain
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/domainexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"DomainException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Exception thrown if a value does not adhere to a defined valid data domain","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DomainException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DomainException
---------------

Exception thrown if a value does not adhere to a defined valid data domain. For example, it might be an invalid value for a class property and not just its type.

.. code-block:: php
   
   <?php
   function renderImage($imageResource, $imageType)
   {
     switch ($imageType) {
     case 'jpg':
     case 'jpeg':
       header('Content-type: image/jpeg');
       imagejpeg($imageResource);
       break;
     case 'png':
       header('Content-type: image/png');
       imagepng($imageResource);
       break;
     default:
       throw new DomainException('Unknown image type: ' . $imageType);
       break;
     }
     imagedestroy($imageResource);
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.domainexception.php>`__

See also `PHP Exception Handling - DomainException <https://blog.airbrake.io/blog/php-exception-handling/domainexception>`_

Related : :ref:`Exception <exception>`, :ref:`RangeException <rangeexception>`
