<?php
namespace Src\ApproveSms\Parser;
/**
 * Class PartParser
 * @package Src\ApproveSms\Parser
 */
class PartParser
{

    /**
     * @var string
     */
    private $code;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $pouncName;

    /**
     * PartParser constructor.
     * @param string $text
     */
    public function __construct($text)
    {
        $this->parseText($text);
    }

    /**
     * @param $text
     */
    private function parseText($text)
    {
      $parts = $this->trimParts($this->getParts($text));
      if (isset($parts[0])) {
          $this->code = (new CodeParser($parts[0]))->getValue();
      }
      if (isset($parts[1])) {
        $this->price = (new PriceParser($parts[1]))->getValue();
      }
      if (isset($parts[2])) {
        $this->pouncName = (new PouncNameParser($parts[2]))->getValue();
      }
    }

    /**
     * @param $text
     * @return array
     */
    private function getParts($text)
    {
        return explode("\n", $text);
    }

    /**
     * @param array $parts
     * @return array
     */
    private function trimParts(array $parts)
    {
        return array_map(function ($part) {
            return str_replace('<br />', '', $part);
        }, $parts);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getPouncName()
    {
        return $this->pouncName;
    }
}
