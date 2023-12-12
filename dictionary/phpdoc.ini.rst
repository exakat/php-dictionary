.. _phpdoc:

PHPdoc
------

PHPDoc is a style of PHP comments. Those comments are delimited by `/** */`. 

PHPdoc comments are different from the other styles of PHP comments in their syntax. They are also used for PHP annotations, and are sometimes confused with them. 

PHPDoc annotations are an adaptation of Javadoc for the PHP programming language. It is a formal way to comment specific PHP structures, that is machine readable.

PHPDoc has a special token, to make it easier to extract it from the code.

PHPdoc may be exploited by automated documentation tools, or static analyzer, IDE.



.. code-block:: php
   
   <?php
   /**
    * Check if a number is prime
    *
    * @param int     $int       The number to test
    *
    * @return bool : is it prime or not
    */
    public function prime(int $int): bool {
        // ...
    }
   
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/PHPDoc>`__

See also `Introduction to PHP Annotations <https://www.educba.com/php-annotations/>`_, `phpDocumentor <https://www.phpdoc.org/>`_

Related : :ref:`Attributes <attribute>`, :ref:`Annotations <annotation>`
