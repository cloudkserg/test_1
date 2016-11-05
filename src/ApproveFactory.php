<?php
namespace Src;
use Src\ApproveSms\ApproveSms;
use Src\ApproveSms\Parser\PartParser;

/**

 */
class ApproveFactory
{


    /**
     * *  get example recieve with this information
     * Пароль: 7175<br />
     * Спишется 904,53р.<br />
     * Перевод на счет 41001513101722
     *
     * @param $text
     * @return ApproveSms
     */
    public static function createFromText($text)
    {
        $partParser = new PartParser($text);
        return new ApproveSms($partParser->getCode(), $partParser->getPrice(), $partParser->getPouncName());
    }


}
