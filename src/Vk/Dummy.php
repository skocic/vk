<?php

namespace Vk;

class Dummy
{
    private $var;

    /**
     * @return mixed
     */
    public function getVar()
    {
        return $this->var;
    }

    /**
     * @param mixed $var
     *
     * @return Dummy
     */
    public function setVar($var)
    {
        $this->var = $var;

        return $this;
    }

}