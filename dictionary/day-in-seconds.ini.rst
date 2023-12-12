.. _day-in-seconds:

Day Are Not 86400 Seconds
-------------------------

Days in seconds is a classic bug when dealing with dates. It happens when adding 86400 seconds to a time to get the same time on the next day. 

The bug will happen most commonly twice a year, at the change of time from winter to summer time. Those days are one hour longer or shorter and lead to calculating the wrong time on the next day. 

Thig bug may also have impact when the internal clock of the server is updated, or when extra leap seconds are added, by December 31st or June 30th (it depends on the years).

When dealing with days, it is recommended to use an interval, or use relative expression like 'tomorrow'.


.. code-block:: php
   
   <?php
   
   $tomorrow = new DateTime('tomorrow');
   $secondsLeft = $tomorrow->getTimestamp() - time();
   echo $secondsLeft;
   
   ?>


`Documentation <https://medium.com/@dotcom.software/a-day-is-not-86400-seconds-51d95848b622>`__

Related : :ref:`Days In Month <days-in-month>`
