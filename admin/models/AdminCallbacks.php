<?php


class admin_callbacks extends AdminTable
{

    public $TABLE       = 'callbacks';
    public $IMG_NUM     = 0;
    public $ECHO_NAME   = 'name';
    public $SORT        = 'created_at DESC';
    public $NAME        = "заявки";
    public $NAME2       = "заявку";

    function __construct()
    {
        $this->fld[] = new Field("name","Имя пользователя",1);
        $this->fld[] = new Field("phone","Телефон пользователя",1, array('showInList'=>1, 'editInList'=>0));
        $this->fld[] = new Field("email","Email пользователя",1, array('showInList'=>1, 'editInList'=>0));
        $this->fld[] = new Field("text","Сообщение",16);
        $this->fld[] = new Field("created_at","Дата создания",4, array('showInList'=>1, 'editInList'=>0));
    }
    
    function show_created_at($row)
    {
        return date("d.m.Y H:i" , $row['created_at']);
    }

}
