# LogTimer

This very simple package can be used to time processes in php.

## Installation
```
composer require jopmesman/logtimer
```
## To use the timer
Before a process youwish to time.
```
LogTimer::time('Any text');
```
After the process you wish to time, add the same line.
```
LogTimer::time('Any text');
```
At this moment the time between those 2 lines is timed. 
At the end of the complete script you could get all items you timed.
```
print_r(LogTimer::times());
```

This gives the following result:
```
Array 
(
  "Any text" => 2.0019979476929
)
```

Here is complete example:
```
LogTimer::time('Complete process');
LogTimer::time('Get all rows from the database');
$data = getAllDataFromDB();
LogTimer::time('Get all rows from the database');
//Loop over all the rows from the database
LogTimer::time('Looping');
$return = [];
foreach ($data as $row) {
    $return[$row['id']] = $row['name'];
}
LogTimer::time('Looping');
LogTimer::time('Complete process');

print_r(LogTimer::times());
```

The result of the print_r could someting like
```
Array
(
    [Get all rows from the database] => 1.0011401176453
    [Looping] => 2.0006589889526
    [Complete process] => 3.0018129348755
)
```
