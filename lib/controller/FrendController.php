<?php
require_once $baseDir . '\lib\model\FrendList.php';
class FrendController
{
    public $oFrendList;
    public function __construct()
    {
        $this->oFrendList = new FrendList();
    }
    public function invoke()
    {
        global $baseDir;
        $oFrendList = $this->oFrendList;
        if (isset($_GET['key'])) {
            $oFrendList->setKey($_GET['key']);
            $oFrend = $oFrendList->fetch();
            include $baseDir . '\lib\view\frendone.php';
        } else {
            $aFrend = $oFrendList->fetch();
            include $baseDir . '\lib\view\frendlist.php';
        }
    }
}