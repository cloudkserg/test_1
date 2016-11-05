<?php
namespace Src\ApproveSms\Parser;
/**
 * Class CodeParser
 * @package Src\ApproveSms\Parser
 *
 * парсит Пароль: 7175
 */
class CodeParser
{
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
        $parts = explode(':', $text);
        if (!isset($parts[1])) {
            return  '';
        }
        return $parts[1];
    }


    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
