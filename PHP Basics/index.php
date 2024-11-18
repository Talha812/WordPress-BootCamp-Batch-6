<?php
    // This is the header of the page, defining basic site info
    include 'header.php'; // Include header content

    // 1. Basic PHP Syntax
    // PHP code starts with <?php and ends with 
    echo "<div class='content-container'>";
    echo "<h2>Welcome to PHP Basics!</h2>";
    echo "<p>Hello, PHP! Welcome to WordPress development.</p>";

    // 2. Variables and Data Types
    $siteTitle = "My WordPress Site";
    $postCount = 10;       // Integer
    $averageViews = 4.5;   // Float
    $isPublished = true;   // Boolean

    // Displaying variables
    echo "<p>Site Title: <span class='highlight'>$siteTitle</span>, Post Count: <span class='highlight'>$postCount</span></p>";

    // 3. Constants
    define("SITE_NAME", "My WordPress Site"); // Defining a constant
    echo "<p>Constant SITE_NAME: <span class='highlight'>" . SITE_NAME . "</span></p>";

    // 4. Operators
    $a = 10;
    $b = 20;
    // Arithmetic operators
    $sum = $a + $b;
    echo "<p>Sum of $a and $b is <span class='highlight'>$sum</span></p>";

    // Comparison operators
    if ($a == $b) {
        echo "<p>$a is equal to $b</p>";
    } else {
        echo "<p>$a is not equal to $b</p>";
    }

    // Logical operators
    if ($a < $b && $b > 15) {
        echo "<p>$b is greater than 15 and greater than $a</p>";
    }

    // 5. Conditional Statements
    $userRole = "editor"; // Sample role
    if ($userRole == "admin") {
        echo "<p>Welcome, Admin!</p>";
    } elseif ($userRole == "editor") {
        echo "<p>Welcome, Editor!</p>";
    } else {
        echo "<p>Welcome, Guest!</p>";
    }

    // 6. Loops
    // Looping through numbers
    for ($i = 1; $i <= 5; $i++) {
        echo "<p>Loop number: $i</p>";
    }

    // 7. Functions
    // Defining a function
    function greet_user($name) {
        return "Hello, $name!";
    }
    echo "<p>" . greet_user("John") . "</p>";

    // 8. Arrays
    $categories = ["Tech", "Travel", "Lifestyle"];
    echo "<p>Categories: ";
    foreach ($categories as $category) {
        echo "<span class='highlight'>$category</span> ";
    }

    echo "</p>";

    // Associative Array
    $post = [
        "title" => "Intro to PHP",
        "author" => "Admin",
        "views" => 200
    ];
    echo "<p>Post Title: <span class='highlight'>" . $post["title"] . "</span></p>";

    // 9. String Manipulation
    $title = "Welcome to WordPress";
    $title_lowercase = strtolower($title);
    echo "<p>Lowercase title: <span class='highlight'>$title_lowercase</span></p>";

    // 10. Superglobals: Handling Form Data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = htmlspecialchars($_POST['name']);
        echo "<p>Hello, <span class='highlight'>$name</span>!</p>";
    }

    echo "</div>";
?>

    <form method="POST" class="form-container">
        <input type="text" name="name" placeholder="Enter your name" required>
        <button type="submit">Submit</button>
    </form>

<?php
    // Including footer content
    include 'footer.php';
?>
