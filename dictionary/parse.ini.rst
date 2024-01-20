.. _parse:
.. _parsing:

Parse
-----

To parse, or parsing, refers to the process of analyzing and interpreting the structure of a data to extract meaningful information. 

Parsing is commonly used when working with data formats like XML, JSON, HTML, YAML, or even custom text formats. It involves breaking down a string into its individual components or tokens to understand its underlying structure.

The simplest usage of parsing is to identify errors in the structure, leading to an early aborting of the processing. 



.. code-block:: php
   
   <?php
   
   if (!json_validate($json)) {
   	throw new Exception('invalid JSON data');
   }
   
   $object = json_decode($json);
   
   ?>


See also `Parse, don’t validate <https://lexi-lambda.github.io/blog/2019/11/05/parse-don-t-validate/>`_

Related : :ref:`Sanitation <sanitation>`, :ref:`Validation <validation>`
