Get selector of web page.

```php
$array = $parser->checkMethod('https://webpage.pl/', 'id', ['this_id']);
echo $array[0]['this_id'];
```

https://webpage.pl/ - page of with you want get element.
id - selector
this_id - id of element, example(<div id="this_id">text</div>
