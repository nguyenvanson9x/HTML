<?php
function checkNum($number)
{
    if ($number > 1) {
        throw new Exception("Value must be 1 or below");
    }
    return true;
}
try {
    checkNum(2);
    echo "OK";
} catch (Exception $e) {
    echo "Message: " . $e->getMessage();
}
echo "<br>";

class customException extends Exception
{
    public function errorMessage()
    {
        $errorMsg = "Error on line " . $this->getLine() . "in " . $this->getLine() . ": <br>" . $this->getMessage() . "</br> is not a valid Email address";
        return $errorMsg;
    }
}

$email = "some@example...com";

try {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //throw exception if email is not valid
        throw new customException($email);
    }
} catch (customException $e) {
  echo $e->errorMessage();
}
