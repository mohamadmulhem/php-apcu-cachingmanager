# PHP  APCu CachingManager

Simple caching manager depends on Alternative PHP Cache.

## Requirements

Enable APCu module in php.ini, by adding the following settings

```
extension=php_apcu.dll

[APCu]
extension=php_apcu.dll
apc.enabled=1
apc.shm_size=32M
apc.ttl=7200
apc.enable_cli=1
apc.serializer=php
```



## Usage

```php
<?php
//store a value
CachingManager::Store("name", "Mike");
//check if exists
$valueExists = CachingManager::Exists("name")? 'Yes':'No';
$value = CachingManager::Get("name");
//echo results
echo "Value Exists: " . $valueExists . "</br>";
echo "-------- </br>";
echo "Value: " . $value . "</br>";

//clear value
echo "-------- </br>";
CachingManager::Reset("name");
echo "clearing value ..." . '</br>';

echo "-------- </br>";
$value = CachingManager::Get("name");
if(!$value){
    $value = "None";
}
$valueExists = CachingManager::Exists("name")? 'Yes':'No';
echo "Value Exists: " . $valueExists . "</br>";
echo "-------- </br>";
echo "Value: " . $value . "</br>";
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](https://choosealicense.com/licenses/mit/)