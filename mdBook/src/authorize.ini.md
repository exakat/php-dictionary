# Authorize
To authorize means to give permission or approval for someone to do something, or to officially empower them to take a certain action.

To authorize relies on a system of permission and privilege, that represents what action or resource is impacted; it also relies on an identification system, to know who is requesting the permission.

The authorizations may be local to the current application, or it may be remote, such as an SSO.

```php
<?php

    if ($user->isAuthorized()) {
        doSomething();
    }

?>
```

Related : [Single Sign On (SSO)](Single Sign On (SSO)), [Role Based Access Control (RBAC)](Role Based Access Control (RBAC)), [Identification](Identification), [Permission](Permission), [Access Control List (ACL)](Access Control List (ACL))
