<?php
// Suppose we want to adopt a baby girl. First of all we have to find parents for baby. (Father and mother interface)
// Then make them agree to be parents. (Parents interface)
// Finally we have a baby girl (BabyGirl class) who has human features and comes from parents.


/* Abstract Class
#) Can't crate object from a abstract class
#) You can create both abstract and non abstract method inside abstract class
#) If you have any abstract method inside abstract class you must inplement this mehod inside extended class
*/

// Example: Laravel model clasas
abstract class HumanFeatures
{
  public function getSkeletonInfo()
  {
    return [
      'bones' => 206,
      'eyes' => 2,
      'teeth' => 32,
      'ear' => 2
    ];
  }
}


// Baby may have long hair as additional feature
trait AdditionalFeature
{
  function hasLongHair()
  {
    return "She long curly hair";
  }
}


/* Interface
#) Don't have instant variable
#) Interface is a wrapper of abstract method
#) All method must be public
#) We can achieve multiple inheritance
#) Interface can extend interface but not class
*/


interface Father
{
  function fatherName();
}

interface Mother
{
  function motherName();
}

// Packing Parent interface with father and mother interface
interface Parents extends Father, Mother
{
}

class BabyGirl extends HumanFeatures implements Parents
{
  use AdditionalFeature;

  function fatherName()
  {
    return 'John Doe';
  }

  function motherName()
  {
    return 'Jain Doe';
  }

  function hasLongHair()
  {
    return $this->hasLongHair();
  }
}
