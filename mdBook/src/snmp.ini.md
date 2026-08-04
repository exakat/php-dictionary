# Simple Network Management Protocol (SNMP)
SNMP stands for 'Simple Network Management Protocol'. The SNMP extension provides a very simple and easily usable toolset for managing remote devices via the Simple Network Management Protocol.
```php
<?php
    $syscontact = snmp2_get('127.0.0.1', 'public', 'system.SysContact.0');
?>
```

## See Also

+ [A Guide to the PHP SNMP Library for Simple Network Management Protocol](https://reintech.io/blog/a-guide-to-php-snmp-library-for-simple-network-management-protocol)

Related : [SNMP3](SNMP3)
