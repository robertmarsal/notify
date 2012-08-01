This is a simple wrapper class around the **notify-send** utility. 
Allows sending desktop notifications from php scripts. 

### Usage
```php
<?php
    require_once 'Notify.php';
    \Notify\Notify::show('Test', 'Hello World');                                                
```
