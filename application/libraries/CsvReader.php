<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Content-Type: text/html; charset=utf-8');

/**
 * Class CSVReader
 *
 * @role : Class permettant de convertir un fichier CSV en tableau PHP
 *
 * @author : Aurélien BIGUET
 * @date : 17/09/2013
 *
 */

class CsvReader {
    private $separator, $endLine;

    /**
     * @param $params : Tableau contenant le caractere de fin de ligne('endLine') et la caratere de separation('separator')
     */
    function __construct($params) {
        $this->endLine = $params['endLine'];
        $this->separator = $params['separator'];
    }

    /**
     * @param $csvContain : String contenant le contenu du fichier CSV
     * @return array|bool : Tableau PHP contenant les donnees CSV / False si le tableau est vide
     */
    public function textParser($csvContain) {
        $lines = explode($this->endLine, $csvContain);
        return $this->parseLines($lines);
    }

    /**
     * @param $filePath : String du chemin du fichier
     * @return array|bool : Tableau PHP contenant les donnees CSV / False si le tableau est vide
     */
    public function fileParser($filePath) {
            $lines = file($filePath);
            return $this->parseLines($lines);
    }

    /**
     * @param $csvLines : Tableaux contenant les lignes du fichichier CSV
     * @return array|bool : Tableau PHP contenant les donnees CSV / False si le tableau est vide
     */
    public function parseLines($csvLines) {
        $content = FALSE;
        foreach( $csvLines as $lineNum => $line ) {
            if($line != ''){
                $elements = explode($this->separator, $line);
                $item = array();
                foreach( $elements as $id => $field ) {
                        $item[] = $this->utf8_for_all($elements[$id]);
                        //$item[] = $elements[$id];
                }
                $content[] = $item;
            }
        }
        return $content;
    }

    private function utf8_for_all($str) {
        $type=array("Windows-1252", "UTF-8", "ISO-8859-1");
        $encodage= mb_detect_encoding($str, $type);
        return iconv("ISO-8859-1", 'UTF-8',$str);
    }
}

/* End of file CsvReader.php */
/* Location: /libraries/CsvReader.php */