# Usage

```php 
require_once('validator.php'); 


$data = [
        'name' => 'Test',
        'email' => 'test@email.com',
        'phone' => '+308964433221',
        'password' => 'password',
        'password_confirm' => 'password',
    ];

 
$vld = new validate;
$vld->name($data['name']);
$vld->email($data['email']);
$vld->phone($data['phone']);
$vld->password($data['password'], $data['password_confirm']);

```

