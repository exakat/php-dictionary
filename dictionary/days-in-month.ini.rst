.. _days-in-month:
.. meta::
	:description:
		Days In Month: Days in month is a classic bug when dealing with dates.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Days In Month
	:twitter:description: Days In Month: Days in month is a classic bug when dealing with dates
	:twitter:creator: @exakat
	:og:title: Days In Month
	:og:type: article
	:og:description: Days in month is a classic bug when dealing with dates
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/days-in-month.ini.html
	:og:locale: en


Days In Month
-------------

Days in month is a classic bug when dealing with dates. It happens when adding a month to a date and ending on two months later. 

This happens when adding a month to the last day of a month, while this month is longer than the next. For example, January 31st, or Halloween October 31st. After adding a month, PHP calculates it as the November 31st, which doesn't exists. Yet, PHP converts it to December 1st.

When dealing with months, it is recommended to use expressions like 'first day of this month', or 'next month', instead of adding a month to an existing date.

.. code-block:: php
   
   <?php
   
   echo date('d-m-Y', strtotime("+1 months", strtotime('31 October 2000')));
   
   echo (new DateTime('first day of this month'))->format('jS, F Y');
   echo (new DateTime('next month'))->format('jS, F Y');
   
   ?>


`Documentation <https://derickrethans.nl/obtaining-the-next-month-in-php.html>`__

See also `How to Get Number of Days in Current Month in PHP? <https://www.geeksforgeeks.org/how-to-get-number-of-days-in-current-month-in-php/>`_

Related : :ref:`Day Are Not 86400 Seconds <day-in-seconds>`
