<?php
declare(strict_types=1);
namespace nsTable;

require_once(__DIR__ . '/utils.php');
use function Utils\println;
use Utils;

//---------------------------------------------
class Table{

    // Constructor
    public function __construct(public array $header = [], 
                                public array $body = []){
    }

    public function __toString(): string
    {

        // $this->header;
        // $this->body;

        $result = "";

        $result .= implode(' | ', $this->header) . PHP_EOL;

        $result2 = '';

        foreach($this->body as $array){
            $result2 .= implode(' | ', $array) . PHP_EOL;
        }

        
        return $result . $result2;
    }
    
    public function write_csv(string $filename) {

        $header_str = implode(",", $this->header) . PHP_EOL;//unir por coma
        $body_str = "";

        foreach($this->body as $row){
            $body_str .= implode(",", $row) . PHP_EOL;//unir por coma y poner dentro de $body_str
        }

        $data = $header_str . $body_str; // unir dos strings

        file_put_contents($filename,$data); // escribir en disco
        
    } 
    
    public static function read_csv(string $filename): Table {

        $data = [];

        $contents_str = trim(file_get_contents($filename));//trim — Elimina espacio en blanco (u otro tipo de caracteres: \n\r\t\v\x00) del inicio y el final de la cadena
        $row_array    = explode("\n", $contents_str);//separar por cada salto de linea

        foreach($row_array as $row) {
            $field_array = explode(",", $row);//seprar por comas
            array_push($data, $field_array );//poner al final del array otro array
        }

        // Separate $data into $header and $body
        $header = $data[0];
        array_shift($data); // Remove first row (header)
        $body = $data;//body seria el nuevo data que no tiene el header

        $table = new Table($header, $body);
        return $table;
    }
}

function main():void {
    //$empty_table = new Table();

    $header = ['Title','Volumes'];

    $body   = [
                ['Chainsaw JavaScript', 12],
                ['Attack on PHP',       27],
                ['Dragon CSS Z',        10],
                ['Apache Piece',        70],
    ];

    $manga_table = new Table($header,$body);
    print($manga_table);

    $table = Table::read_csv('fichero.csv');
    
    $table->write_csv('fichero2.csv');

    echo $table;
}

main();