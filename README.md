Get selector of web page.

download this repository by add this to your composer.json

```json
"repositories" : [
        {
			"type" : "vcs",
			"url" : "https://github.com/Piffek/Get-Selector.git"
		}
	],
	"require" : {
		"Piffek/Get-Selector" : "dev-master"
	}
```
```php
$array = $parser->get('https://webpage.pl/', 'id', ['this_id']);
echo $array[0]['this_id'];
```
<br>
https://webpage.pl/ - page of with you want get element. <br>
id - selector. <br>
this_id - id of element, example(id="this_id").

if you get class
```php
$array = $parser->get('https://webpage.pl/', 'class', ['this_id']);
echo $array[0]['this_id'];
```

if you would like show all array use

```php
print_r($array);
```