<!-- template.php -->
<html>
<head>
    <title>My Page</title>
</head>
<body>
<p><?php  for($i = 0; $i < count($variables); $i++) {
    // Access each element of the array using $variables[$i]
    // You can access the 'person', 'age', and 'location' of each element like this:
    $person = $variables[$i]['person'];
    $age = $variables[$i]['age'];
    $location = $variables[$i]['location'];

    // Now you can use these variables in your code
    // For example, to print them, you can do:
    echo "Person: $person, Age: $age, Location: $location<br>";
}?></p>





</body>
</html>
