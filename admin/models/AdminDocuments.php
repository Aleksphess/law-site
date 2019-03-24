<?php

class admin_documents extends AdminTable
{

    public $TABLE = 'documents';
    public $IMG_SIZE = 223; // макс высота
    public $IMG_VSIZE = 140;
    public $IMG_RESIZE_TYPE = 1; //рeсайз по высоте
    public $IMG_BIG_SIZE = 740;
    public $IMG_BIG_VSIZE = 480;
    public $IMG_NUM = 1;
    public $IMG_TYPE = 'jpg';
    public $ECHO_NAME = 'name';
    public $SORT = 'created_at DESC';

    public $NAME = "Документы";
    public $NAME2 = "Документы";

    public $MULTI_LANG = 0;

    function __construct()
    {
        $this->fld[] = new Field("name", "Заголовок", 1);
        $this->fld[] = new Field("file", "файл", 11);
        $this->fld[] = new Field("created_at", "Date of creation", 4);
    }

}
