<?php

namespace app\components;

/**
 * Description of ImgBehavior
 *
 * @author kossworth
 *
 * @property array $imgs
 * @property array $sImgs
 * @property string $sImg
 * @property array $bImgs
 * @property bool|string $imgPath
 * @property string $bImg
 */
class ImgBehavior extends \yii\base\Behavior
{

    /**
     * Get image path
     */
    public function getImgPath()
    {
        $table_name = $this->owner->tableName();
        $path = __DIR__ . "/../../../../images/$table_name/{$this->owner->id}.1.b.jpg";
        if (file_exists($path)) {
            return $path;
        } else {
            return false;
        }
    }

    public function getImgs(): array
    {
        $i = 1;
        $res = [];
        $table_name = $this->owner->tableName();
        while ($i <= $this->owner->img_count_const()) {
            if (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".$i.b.jpg")) {
                $res[] = [
                    'bimg' => '/images/' . $table_name . '/' . $this->owner->id . ".$i.b.jpg",
                    'simg' => '/images/' . $table_name . '/' . $this->owner->id . ".$i.s.jpg"
                ];
            } elseif ($i == 1) {
                $res[] = [
                    'bimg' => '/images/no-img.png',
                    'simg' => '/images/no-img.png'
                ];
            }
            $i++;
        }
        return $res;
    }

    /**
     * @return array
     */
    public function getBImgs()
    {
        $i = 1;
        $res = [];
        $table_name = $this->owner->tableName();
        while ($i <= $this->owner->img_count_const()) {
            if (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".$i.b.jpg")) {
                $res[] = '/images/' . $table_name . '/' . $this->owner->id . ".$i.b.jpg";
            } elseif (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".$i.b.png")) {
                $res[] = '/images/' . $table_name . '/' . $this->owner->id . ".$i.b.png";
            } elseif ($i == 1) {
                $res[] = '/images/no-img.png';
            }
            $i++;
        }
        return $res;
    }


    /**
     * @return array
     */
    public function getSImgs(): array
    {
        $i = 1;
        $res = [];
        $table_name = $this->owner->tableName();
        while ($i <= $this->owner->img_count_const()) {
            if (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".$i.s.jpg")) {
                $res[] = '/images/' . $table_name . '/' . $this->owner->id . ".$i.s.jpg";
            } elseif (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".$i.s.png")) {
                $res[] = '/images/' . $table_name . '/' . $this->owner->id . ".$i.s.png";
            } elseif ($i == 1) {
                $res[] = '/images/no-img.png';
            }
            $i++;
        }
        return $res;
    }

    /**
     * @return string
     */
    public function getSImg(): string
    {
        $table_name = $this->owner->tableName();
        if (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".1.s.jpg")) {
            return '/images/' . $table_name . '/' . $this->owner->id . ".1.s.jpg";
        } elseif (is_file(__DIR__ . '/../../../../images/' . $table_name . '/' . $this->owner->id . ".1.s.png")) {
            return '/images/' . $table_name . '/' . $this->owner->id . ".1.s.png";
        } else {
            return '/images/no-img.png';
        }
    }

    /**
     * @return string
     */
    public function getBImg(): string
    {
        $table_name = $this->owner->tableName();
        if (is_file($_SERVER['DOCUMENT_ROOT'] . '/images/' . $table_name . '/' . $this->owner->id . ".1.b.jpg")) {
            return '/images/' . $table_name . '/' . $this->owner->id . ".1.b.jpg";
        } elseif (is_file($_SERVER['DOCUMENT_ROOT'] . '/images/' . $table_name . '/' . $this->owner->id . ".1.b.png")) {
            return '/images/' . $table_name . '/' . $this->owner->id . ".1.b.png";
        } else {

            return ($table_name == 'catalog_consist') ? '/images/not_found.png' : '/images/no-img.png';
        }
    }
}
