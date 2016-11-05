<?php
namespace Src\ApproveSms\Parser;
/**
 * Class CodeParser
 * @package Src\ApproveSms\Parser
 *
 * парсит Перевод на счет 41001513101722
 */
class PouncNameParser
{

    const STRING = 'Перевод на счет';

    /**
     * @var string
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
        $isMatch = preg_match(sprintf('/%s (\d+)/', self::STRING), $text, $matches);
        if (!$isMatch and !isset($matches[1])) {
            return  '';
        }
        return $matches[1];
    }


    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
