<?php
// Error reporting
error_reporting(E_ALL);
ini_set("display_errors", 1);

// Access the global array called $_POST to get the values of the chosen options
$Q1 = $_POST["Question1"];
$Q2 = $_POST["Question2"];
$Q3 = $_POST["Question3"];
$Q4 = $_POST["Question4"];
$Q5 = $_POST["Question5"];

// Show the choice and the solution to each question
echo "Your Results:<br><br>";

echo "Question 1: What color is my bicycle?<br>";
echo "You answered: " . $Q1 . "<br>";
echo "Correct answer: black<br><br>";

echo "Question 2: What is Ruby the Cat's favorite food?<br>";
echo "You answered: " . $Q2 . "<br>";
echo "Correct answer: chicken<br><br>";

echo "Question 3: What is Ruby the Cat's favorite activity (joy)?<br>";
echo "You answered: " . $Q3 . "<br>";
echo "Correct answer: sprint<br><br>";

echo "Question 4: What is Ruby the Cat's favorite activity (time spent)?<br>";
echo "You answered: " . $Q4 . "<br>";
echo "Correct answer: sleep<br><br>";

echo "Question 5: Why is this the best question?<br>";
echo "You answered: " . $Q5 . "<br>";
echo "Correct answer: it's the last one<br><br>";

// Determine the score
$correct = 0;
if ($Q1 == "black") {
    $correct++;
}
if ($Q2 == "chicken") {
    $correct++;
}
if ($Q3 == "sprint") {
    $correct++;
}
if ($Q4 == "sleep") {
    $correct++;
}
if ($Q5 == "it's the last one") {
    $correct++;
}

$score = ($correct/5)*100;

echo "You got $correct questions correct.<br>";
echo "Your percent score is: $score";
?>