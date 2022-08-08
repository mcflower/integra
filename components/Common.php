<?php
namespace app\components;

use yii\base\Component;

class Common extends Component
{

    public function rus2eng($text)
    {
        // Русский алфавит
        $rus_alphabet = array(
            'А', 'Б', 'В', 'Г', 'Д', 'Е', 'Ё', 'Ж', 'З', 'И', 'Й',
            'К', 'Л', 'М', 'Н', 'О', 'П', 'Р', 'С', 'Т', 'У', 'Ф',
            'Х', 'Ц', 'Ч', 'Ш', 'Щ', 'Ъ', 'Ы', 'Ь', 'Э', 'Ю', 'Я',
            'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и', 'й',
            'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т', 'у', 'ф',
            'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь', 'э', 'ю', 'я',
            ' ', '_', '-', '', '?', '!', '(', ')', '.', ','
        );

        // Английская транслитерация
        $rus_alphabet_translit = array(
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
            'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
            'h', 'c', 'ch', 'sh', 'sh', '', 'y', '', 'e', 'iu', 'ia',
            'a', 'b', 'v', 'g', 'd', 'e', 'io', 'zh', 'z', 'i', 'i',
            'k', 'l', 'm', 'n', 'o', 'p', 'r', 's', 't', 'u', 'f',
            'h', 'c', 'ch', 'sh', 'sh', '', 'y', '', 'e', 'iu', 'ia',
            '-', '-', '-', '', '', '', '', '', '', ''
        );

        return str_replace($rus_alphabet, $rus_alphabet_translit, $text);
    }

    public function getExtension($filename) {
        return substr(strrchr($filename, '.'), 1);
    }

    public function randomName()
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < 12; $i++) {
            $randstring .= $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

    public function fgetcsv2($f_handle, $length, $delimiter=';', $enclosure='"') {
        if (!strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
            return fgetcsv($f_handle, $length, $delimiter, $enclosure);

        //если указатель на файл не задан, то возвращаем false
        if (!$f_handle || feof($f_handle))
            return false;

        //если разделитель не задан, то возвращаем false
        if (strlen($delimiter) > 1)
            $delimiter = substr($delimiter, 0, 1);
        elseif (!strlen($delimiter))
            return false;

        if (strlen($enclosure) > 1)         // There _MAY_ be an enclosure
            $enclosure = substr($enclosure, 0, 1);

        $line = fgets($f_handle, $length);
        if (!$line)
            return false;
        $result = array();
        $csv_fields = explode($delimiter, trim($line));
        $csv_field_count = count($csv_fields);
        $encl_len = strlen($enclosure);
        for ($i = 0; $i < $csv_field_count; $i++) {
            if ($encl_len && $csv_fields[$i]{0} == $enclosure)
                $csv_fields[$i] = substr($csv_fields[$i], 1);
            if ($encl_len && $csv_fields[$i]{strlen($csv_fields[$i]) - 1} == $enclosure)
                $csv_fields[$i] = substr($csv_fields[$i], 0, strlen($csv_fields[$i]) - 1);
            $csv_fields[$i] = str_replace($enclosure . $enclosure, $enclosure, $csv_fields[$i]);
            $result[] = $csv_fields[$i];
        }
        return $result;
    }
}
