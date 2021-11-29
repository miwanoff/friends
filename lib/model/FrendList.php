<?php
require_once $baseDir . '\lib\model\Frend.php';
class FrendList
{
    private $oneKey;
    private function getFrendList()
    {
        return array(
            new Frend("Александр", "2003", "alex@mail.com"),
            new Frend("Юрий", "2004", "yury@gmail.com"),
            new Frend("Алексей", "2002", "alexey@yahoo.com"),
        );
    }
    private function getIndexedList()
    {
        $list = array();
        foreach ($this->getFrendList() as $val) {
            echo $val->getKey() . "<br/>";
            //print_r($val);
            echo "<br/>";
            $list[$val->getKey()] = $val;
        }
        return $list;
    }
    public function setKey($key)
    {
        $this->oneKey = $key;
    }
    public function fetch()
    {
        $aFrend = $this->getIndexedList();
        return ($this->oneKey) ? $aFrend[$this->oneKey] : $aFrend;
    }
}