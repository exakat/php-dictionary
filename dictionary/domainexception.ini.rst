.. _domainexception:

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
