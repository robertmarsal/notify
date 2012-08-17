This is a simple wrapper class around the unix **notify-send** utility. 
Allows sending desktop notifications from php scripts. 

#### Usage
```php
<?php
  require_once 'Notify.php';
  \Notify\Notify::show('Test', 'Hello World');                                                
```
#### Requirements
Requires **libnotify-bin** to be installed

#### Tested On
* Ubuntu 10.10
* Ubuntu 12.04