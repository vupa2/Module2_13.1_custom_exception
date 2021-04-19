<?php
class DivideByZeroException extends Exception
{
    public function __toString()
    {
        return "Can't divide by zero";
    }
}

function divide($numerator, $denominator)
{
    if ($denominator === 0) {
        throw new DivideByZeroException();
    }
    return $numerator / $denominator;
}

try {
    $result = divide(100, 5);
    echo $result . '<br>';
    $result = divide(100, 0);
    echo $result . '<br>';
} catch (DivideByZeroException $e) {
    echo 'Có lỗi xảy ra: ' . $e;
}
