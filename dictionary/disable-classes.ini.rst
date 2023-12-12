.. _disable_classes:

Disable classes
---------------

This directive disables the provided list of classes in the `php.ini`.

Once disabled, the classes may be created, via an extension or in the code of PHP. Custom classes may still be created and used. 


.. code-block:: php
   
   // in php.ini
   
   disable_classes="mysqli,socket,soapserver" 
   
   


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-classes>`__

Related : :ref:`Disable Functions <disable-functions>`, :ref:`php.ini <php.ini>`
