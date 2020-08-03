<?php


namespace App;


class Containers
{
    protected $bindings=[];
    function bind($key,$value)
    {
        $this->bindings[$key]=$value;
    }

    /**
     * @return array
     */
    public function getBindings($key)
    {
        if(isset($this->bindings[$key]))
            //return $this->bindings[$key];
            return call_user_func($this->bindings[$key]);
    }

    /**
     * @param array $bindings
     */
    public function setBindings(array $bindings): void
    {
        $this->bindings = $bindings;
    }

}
