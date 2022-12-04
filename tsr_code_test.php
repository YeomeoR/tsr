<?php

// ============================= 1 =======================
// Write a function that, given an array of size n, finds the first repeating element. It
// should return the element that repeats, and the index of its first occurrence.

function repeaterPos($array)
{
    $unique = array_unique($array);

     foreach($array as $key => $value) {
         if ($unique[$key] !== $value) {
             $idx = array_search($value, $array);
            return 'index: ' . $idx . ' => value: ' . $value;
         }
     }
}

var_dump(repeaterPos(['e','f','t','y','r','t','e','f','g','h']),
    2, 't');
var_dump(repeaterPos([1,2,3,4,2,3,4,1,1,5,6,7,8]),
    1, 2);


// =============================== 2 =======================

// Write a function that returns the number of vowels and consonants in a string (as
// separate values).

function vowelsAndConsonants($str)
{
    $trimmed = str_replace(' ', '', $str);
    $vowels = array();
    $strArr = str_split($trimmed);

    foreach($strArr as $letter) {
        if (preg_match('/[aeiou]/i', $letter)) {
            array_push($vowels, $letter);
        }
    }
    // calculate num consonants
    $consonantsLength = count($strArr) - count($vowels);

    return count($vowels) . ' ' . $consonantsLength;
}

var_dump(vowelsAndConsonants('This is a very long sentence to count the vowels and the consonants', ),
    19,36);
var_dump(vowelsAndConsonants('The lazy brown fox jumps over the picnic table', ),
    12,26);


// ================================ 3 ======================
// Write a function that takes a string containing a sentence or (body of text) and a
// second string containing a word and returns the number of times the word appears in
// the string.

function matchingWordCount($str, $w)
{
     // normalise the strings
     $str = strtolower($str);
     $w = strtolower($w);

     return 'Number of occurrences of "' . $w . '" in the string is ' . substr_count($str, $w);

}

var_dump(matchingWordCount('This is the only time this sentence will be used in this function', 'this'),
    3);
var_dump(matchingWordCount('No way are we going to find a way to weigh up all of the options!', 'way'),
    2);


// =============================== 4 ========================
// write a function that takes a number and returns the volume of a sphere with that
// diameter.

function spherical($d)
{
    // volume of a sphere -> 6V = πd3
    return (M_PI * ($d**3)) / 6;
}

var_dump(spherical(21),
    4849.048260);
var_dump(spherical(5),
    65.45);


// =============================== 5 ========================
// Function to check if a number is a prime

function isPrime($num)
{
    // 1 is not a prime
    if ($num == 1) return false;

    // 2 is the only even prime number
    if ($num == 2) return true;

    // Check if number is divisible by 2
    if ($num % 2 == 0) return false;

    // Check only odd numbers up to the sq-root of $num
    for ($i = 3; $i <= sqrt($num); $i += 2) {
        if ($num % $i == 0) return false;
    }

    return true;
}

// Function to find the next 20 primes after a given integer

function nextTwentyPrimes($num)
{
    // Initialise count to 0
    $count = 0;

    // Initialise next to the given integer
    $next = $num;

    // Loop while count is less than 20
    while ($count < 20) {
        // Increment the next int
        $next++;

        // Check if prime
        if (isPrime($next)) {
            // Print it
            echo $next . " ";

            // Increment the count
            $count++;
        }
    }
}

var_dump(nextTwentyPrimes(100));
var_dump(nextTwentyPrimes(23));
var_dump(nextTwentyPrimes(4620));


// ==================== SQL =====================
// Write an SQL query to find the user “jimbob”

$sql = "SELECT username FROM users WHERE username = 'jimbob'";

// Write an SQL query to find all of the posts created by user “the_gary”
$sqlGary = "SELECT created_by_id, post_content, date_created, post_status FROM posts INNER JOIN users ON posts.created_by_id = users.id WHERE username = 'the_gary'";

// Write an SQL query to find all posts by “the_gary”, with a status of ‘published’,
//created this year.
$sqlGaryPublished = "SELECT created_by_id, post_content, year(date_created), post_status FROM posts INNER JOIN users ON posts.created_by_id = users.id WHERE username = 'the_gary' AND date_created = '2022'";

// Imagine the users table has 20000 entries; how would you approach indexing it?
echo '';

// Why is it not recommended to index small tables of data?
echo 'Indexing small tables may not be optimal because it can take the query optimizer longer to traverse the index searching for data than to perform a simple table scan.';

