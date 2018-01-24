<?php
Class UnholyFactory{

	private $array = NULL;
    public function absorb($s){
        if (!($s instanceof Fighter))
        {
            print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
            return ;
        }
        if (isset($this->array[$s->getName()]) == false){
            $this->array[$s->getName()] = $s;
            print("(Factory absorbed a fighter of type ".$s->getName().")".PHP_EOL);
        }
        else
            print("(Factory already absorbed a fighter of type ".$s->getName().")".PHP_EOL);
    }
    public function fabricate($val){
        $exists = false;
        foreach ($this->array as $key => $value) {
            if ($key === $val)
            {
                $exits = true;
                $s = $this->array[$key];
                break;
            }
        }
        if ($exits == true)
        {
            print("(Factory fabricates a fighter of type ".$val.")".PHP_EOL);
            return (clone($s));
        }
        print("(Factory hasn't absorbed any fighter of type ".$val.")".PHP_EOL);
        return (NULL);
    }
}