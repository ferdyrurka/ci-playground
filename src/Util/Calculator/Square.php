<?php
declare(strict_types=1);

namespace App\Util\Calculator;

use \Exception;

/**
 * Class Square
 * @package App
 */
class Square implements CalculatorInterface
{
    /**
     * @var float
     */
    private $a;

    /**
     * Square constructor.
     * @param $a
     */
    public function __construct(float $a)
    {
        $this->a = $a;
    }

    /**
     * @return float
     * @throws Exception
     */
    public function calc(): float
    {
        if ($this->a < 0) {
            throw new Exception('Arguments a must be greater than 0');
        }

        return $this->a * $this->a;
    }
}