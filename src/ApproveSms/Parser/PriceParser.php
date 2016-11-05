<?php
namespace Src\ApproveSms\Parser;
/**
 * Class CodeParser
 * @package Src\ApproveSms\Parser
 *
 * парсит Спишется 904,53р.
 */
class PriceParser
{
    /**
     * @var float
     */
    private $value;

    /**
     * CodeParser constructor.
     * @param $text
     */
    public function __construct($text)
    {
        $this->value = $this->parse($text);
    }

    private function parse($text)
    {
        $parts = explode(' ', $text);
        if (!isset($parts[1])) {
            return  '';
        }
        return $this->toFloat($parts[1]);
    }

    /**
     * @param string $price
     * @return float
     */
    private function toFloat($price)
    {
        return (float)str_replace(',', '.', $price);
    }


    /**
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
