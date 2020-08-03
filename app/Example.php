<?php


namespace App;


class Example
{
   /* function go()
    {
        dd('It Workds!!');
    }*/



   /* protected $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }*/

    protected $collaborator;
    protected $foo;
    public function __construct(Collaborator $collaborator,$foo)
    {
        $this->collaborator = $collaborator;
        $this->foo=$foo;
    }


}
