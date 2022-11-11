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

        $result .= implode(' | ', $this->header);

        return $result;
    }

    public static function read_csv(){
        
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


}

main();