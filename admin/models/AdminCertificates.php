<?php

class admin_certificates extends AdminTable
{

    public $TABLE = 'certificates';
    public $IMG_SIZE = 223; // макс высота
    public $IMG_VSIZE = 140;
    public $IMG_RESIZE_TYPE = 1; //рeсайз по высоте
    public $IMG_BIG_SIZE = 740;
    public $IMG_BIG_VSIZE = 480;
    public $IMG_NUM = 1;
    public $IMG_TYPE = 'jpg';
    public $ECHO_NAME = 'id';
    public $SORT = 'id DESC';

    public $NAME = "Сертификаты";
    public $NAME2 = "Сертификат";

    public $MULTI_LANG = 0;

    public function __construct()
    {
        $this->fld[] = new Field("id","id",1);
    }


}
