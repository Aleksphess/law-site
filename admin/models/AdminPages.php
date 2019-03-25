<?php

class admin_pages extends AdminTable
{

    public $TABLE = 'pages';
    public $IMG_SIZE = 223; // макс высота
    public $IMG_VSIZE = 140;
    public $IMG_RESIZE_TYPE = 1; //рeсайз по высоте
    public $IMG_BIG_SIZE = 740;
    public $IMG_BIG_VSIZE = 480;
    public $IMG_NUM = 1;
    public $IMG_TYPE = 'jpg';
    public $ECHO_NAME = 'name';
    public $SORT = 'created_at DESC';

    public $NAME = "Страницы";
    public $NAME2 = "страница";

    public $MULTI_LANG = 0;

    function __construct()
    {
        $this->fld[] = new Field("alias", "Alias (геренерируеться, если не заполнен)", 1);
        $this->fld[] = new Field("name", "Заголовок", 1);
        $this->fld[] = new Field("text", "Текст", 2);
        $this->fld[] = new Field("created_at", "Date of creation", 4);
    }

    function afterAdd($row)
    {
        if (empty($row['alias'])) {
            $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit($row['name']) . "' WHERE id = "
                . $row['id'];
            pdoExec($qup);
        }

    }

    function afterEdit($row)
    {

        if (empty($row['alias'])) {
            $qup = "UPDATE " . $this->TABLE . " SET alias = '" . Translit($row['name']) . "' WHERE id = "
                . $row['id'];
            pdoExec($qup);
        }


    }
}
