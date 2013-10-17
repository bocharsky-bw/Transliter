<?php

namespace BW;

class Transliter {

    private $alphabet = array(
            'А' =>  'A',
            'Б' =>  'B',
            'В' =>  'V',
            'Г' =>  'G',
            'Д' =>  'D',
            'Е' =>  'E',
            'Ё' =>  'E',
            'Ж' =>  'J',
            'З' =>  'Z',
            'И' =>  'I',
            'Й' =>  'Y',
            'К' =>  'K',
            'Л' =>  'L',
            'М' =>  'M',
            'Н' =>  'N',
            'О' =>  'O',
            'П' =>  'P',
            'Р' =>  'R',
            'С' =>  'S',
            'Т' =>  'T',
            'У' =>  'U',
            'Ф' =>  'F',
            'Х' =>  'H',
            'Ц' =>  'TS',
            'Ч' =>  'CH',
            'Ш' =>  'SH',
            'Щ' =>  'SCH',
            'Ъ' =>  'Y',
            'Ы' =>  'YI',
            'Ь' =>  '',
            'Э' =>  'E',
            'Ю' =>  'YU',
            'Я' =>  'YA',
            'а' =>  'a',
            'б' =>  'b',
            'в' =>  'v',
            'г' =>  'g',
            'д' =>  'd',
            'е' =>  'e',
            'ё' =>  'e',
            'ж' =>  'j',
            'з' =>  'z',
            'и' =>  'i',
            'й' =>  'y',
            'к' =>  'k',
            'л' =>  'l',
            'м' =>  'm',
            'н' =>  'n',
            'о' =>  'o',
            'п' =>  'p',
            'р' =>  'r',
            'с' =>  's',
            'т' =>  't',
            'у' =>  'u',
            'ф' =>  'f',
            'х' =>  'h',
            'ц' =>  'ts',
            'ч' =>  'ch',
            'ш' =>  'sh',
            'щ' =>  'sch',
            'ъ' =>  'y',
            'ы' =>  'yi',
            'ь' =>  '',
            'э' =>  'e',
            'ю' =>  'yu',
            'я' =>  'ya',
        );

    /**
     * Транслитерация строки
     * 
     * @param string $string Строка для транслитерации
     * @return string Строка транслитом
     **/
    public function getTranslit($string) {
        
        return strtr($string, $this->alphabet);
    }

    /**
     * Транслитерация строки для slug (для использования в адресной строке браузера)
     *  
     * @param string $string Строка для транслитерации
     * @return string Slug транслитом
     **/
    public function getSlug($string) {
        
        return preg_replace( '/[^0-9A-Za-z_-]/', '', preg_replace( '/\s+/i', '-', strtr($string, $this->alphabet) ) );
    }
}