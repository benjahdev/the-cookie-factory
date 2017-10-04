<?php
/**
 * Created by PhpStorm.
 * User: benjah
 * Date: 04/10/17
 * Time: 23:03
 */

class Article
{
    private $cooker;
    private $name;

    public function __construct(string $name, string $cooker)
    {
        $this->cooker = $cooker;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCooker(): string
    {
        return $this->cooker;
    }

    /**
     * @param string $cooker
     * @return Article
     */
    public function setCooker(string $cooker): Article
    {
        $this->cooker = $cooker;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Article
     */
    public function setName(string $name): Article
    {
        $this->name = $name;
        return $this;
    }
}