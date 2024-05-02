.. _destructor:

Destructor
----------

The destructor is a special method in a class, which is called at shutdown of an object, in order to do any last minute cleaning. 

Most of the time, the destructor is automatic : removing scalar values may be sufficient. In cases of resources, or other objects, it is recommended to issue the graceful commands to shut them down in turn. 

Destructors are usually called after the end of the script, and will not have access to any display. As such, calls to echo are ineffective.



.. code-block:: php
   
   <?php
   
   class X {
       private $file;
   
       function __construct($path) {
           $this->file = fopen($path, 'w');
       }
       
       function __destruct() {
           fwrite($this->file, "End");
           fclose($this->file);
       }
   }
   
   $x = new X("/tmp/test.txt");
   unset($x);
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php>`__

See also `Introduction to Destructor in PHP <https://www.educba.com/destructor-in-php/>`_

Related : :ref:`constructor <constructor>`
