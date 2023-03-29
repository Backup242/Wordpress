# Wordpress

---
Login:

<details>
<summary>Local wp Login</summary>

- username: bgoonz
- Password: Ruletheweb2023!

</details>
---

## PHP

- this tag begins a php block

```php
<?php
```

- this tag ends a php block

```php
?>
```

**Creating a variable in php:**

```php
<?php
 $myname = "Bryan";
?>
```

**Echoing a variable in php:**

```php
<?php
echo 2 + 2;
 $myname = "Bryan";
?>
<h1>This page is about <?php echo $myname ?><h1>
    <?php echo 5* 5 ?>
<h2>All about <?php echo $myname ?><h2>
```

**Creating a custom theme**

- create a folder in wp-content/themes
- In that folder you need to create an `index.php` file and a `style.css` file
  In the `style.css` file you need to add the following:

```css
/*
Theme Name: Fictional University
Author: Bryan Guner
Version: 1.0
Description: Fictional University Theme
*/
```

- In order to have a screenshot of your theme you need to create a `screenshot.png` file in the root of your theme folder
- In order to have a custom logo you need to create a `logo.png` file in the root of your theme folder
  **Functions in PHP**

```php
<?php
function myFirstFunction() {
  echo "<p>Hello World!</p>";
}
myFirstFunction();
myFirstFunction();
?>
```

- more advanced version

```php
<?php
function greet($name, $color = "blue"){
    echo "<p>Hi, my name is $name and my favorite color is $color.</p>";
}
greet("John", "red");
greet("Jane", "green");
greet("Bryan");
?>
```

**Tapping into Wordpress builtin functions**

```php
<h1><?php bloginfo(); ?></h1>
<p><?php bloginfo('description'); ?></p>
```


**Array in PHP**

```php
<?php
$myname = "Bryan";
$names = array("Bryan", "John", "Jane");

?>
```


combined with the following html

```html
<p>My name is <?php echo $names[2]; ?></p>
```

outputs: `My name is Jane`


- Lets say we wanted to output a list from 0 to 100...


```php
<?php
$count =1;
while($count <= 100) {
    echo "<li>$count</li>";
    $count++;
}
?>



```


- listing items in an array

```php
<?php

$names = array("Bryan", "Jane", "Jim", "Jill");
$count = 0;
while($count < count($names)){
    echo "<li>Hi, my name is $names[$count]</li>";
    $count++;
}
?>
```

**Looping through blog posts**
`the_post();` is a wordpress function that loops through all the posts in the database

```php
<?php

while(have_posts()){
    the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
    <?php the_content() ?>
    <hr>
<?php }

?>


```


**Our home page uses index.php ... but wordpress is always on the lookout for some specific file names; for instance, single.php ... which dictates what we should see when viewing a single post**
> if a single.php is not found wordpress will use index.php as a universal fallback


**For individual pages we can use page.php**

> index, single, page, header, and footer are all template files that wordpress will look for
> functions.php is a file that wordpress will look for and run automatically

- add_action() is a wordpress function that allows us to tap into wordpress' builtin functions

```php
add_action() // add_action() is a function that takes two arguments: the first is the name of the action we want to hook into, and the second is the function we want to run when that action is triggered.
```

