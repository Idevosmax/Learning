<?php

// This piece of code checks whether a number is prime, returns true if the number is a prime number and false if otherwise without any loop;
class PrimeCheck
{
    private $biggestPrime = 1;
    private $primes = [];

    /**
    * Generates a list of primes that are greater than the $current up to $num
    */
    private function generatePrimes(int $current, int $num)
    {
        $top = sqrt($num);
        if ($current > $top) {
            return $this->primes;
        }
        if ($this->isprime($current)) {
            $this->primes[] = $current;
            $this->biggestPrime = $current;
        }
        $this->generatePrimes($current + 1, $num);

        return $this->primes;
    }

    public function isprime(int $num): bool
    {
        if ($num == 2) {
            return true;
        } else {
            $primesToCheck = $this->generatePrimes($this->biggestPrime + 1, $num);
            $divisible = array_map(
                function ($item) use ($num) {
                    return is_int($num / $item);
                },
                $primesToCheck
            );
            return !in_array(true, $divisible);
        }
    }
}
$check = new PrimeCheck();

// pass the number to check as an argument to the @isprime method
// This number should not be prime.
$bool = $check->isprime(522);
if ($bool) {
    echo "true";
} else {
    echo "false";
}
echo PHP_EOL;

// This number should be prime
$bool = $check->isprime(521);
if ($bool) {
    echo "true";
} else {
    echo "false";
}
