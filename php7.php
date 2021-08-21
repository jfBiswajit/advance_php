<?php

// Type hinting
function sum(int $num)
{
  return 'sum';
}
// ------------------------------------------------------------------------------------------------------------------

// Return type
function intSum($num): int
{
  return 10;
}
// ------------------------------------------------------------------------------------------------------------------

// Null Coalescing
//  It is used to replace the ternary operation in conjunction with isset() function. The Null coalescing operator returns its first operand if it exists and is not NULL; otherwise it returns its second operand.
$_GET['username'] ?? 'not passed';
// ------------------------------------------------------------------------------------------------------------------


// Use keyword
$calculateTax = function ($quantity) use ($tax) {
  // With closures, to access variables that are outside of the context of the function you need to explicitly grant permission to the function using the use function. What it means in this case is that you're granting the function access to the $tax variable.
};
// ------------------------------------------------------------------------------------------------------------------

// The <=> ("Spaceship") operator
echo 1 <=> 1; //output  0
echo 3 <=> 4; //output -1
echo 4 <=> 3; //output  1
// ------------------------------------------------------------------------------------------------------------------

// Yield keyword
function a($items)
{
  foreach ($items as $item) {
    yield $item + 1;
  }
}

function b($items)
{
  $result = [];
  foreach ($items as $item) {
    $result[] = $item + 1;
  }
  return $result;
}

// The only one difference is that a() returns a generator and b() just a simple array. You can iterate on both.
// ------------------------------------------------------------------------------------------------------------------
