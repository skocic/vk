<?php

namespace Vk;

/**
 * Dummy class
 */
class Dummy
{
    /** @var int */
    private $var;

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param int $var
     *
     * @return Dummy
     */
    public function setVar($var)
    {
        $this->var = $var;

        return $this;
    }
}
