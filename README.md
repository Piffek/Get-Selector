Get selector of web page.

```php
$array = $parser->checkMethod('https://webpage.pl/', 'id', ['this_id']);
echo $array[0]['this_id'];
```
<br>
https://webpage.pl/ - page of with you want get element. <br>
id - selector. <br>
this_id - id of element, example(id="this_id"0
