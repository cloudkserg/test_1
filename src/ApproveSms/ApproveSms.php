<?php
namespace Src\ApproveSms;
/**
 * Class ApproveSms
 * @package Src\Parser
 */
class ApproveSms
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
     * ApproveSms constructor.
     * @param string $code
     * @param float $price
     * @param string $pouncName
     */
    public function __construct($code, $price, $pouncName)
    {
      $this->code = $code;
      $this->price = $price;
      $this->pouncName = $pouncName;
    }


    /**
     * Get the value of Code
     *
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of Code
     *
     * @param mixed code
     *
     * @return self
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of Price
     *
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of Price
     *
     * @param mixed price
     *
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of Pounc Name
     *
     * @return mixed
     */
    public function getPouncName()
    {
        return $this->pouncName;
    }

    /**
     * Set the value of Pounc Name
     *
     * @param mixed pouncName
     *
     * @return self
     */
    public function setPouncName($pouncName)
    {
        $this->pouncName = $pouncName;

        return $this;
    }

}
