<?php
declare(strict_types=1);
namespace Table;

require_once(__DIR__ . '/utils.php');


//---------------------------------------------
class Table{

    // Properties
    public array $header;
    public array $body;


    // Constructor
    public function __construct(array $header = [], 
                                array $body = []){

        $this->$header = $header;
        $this->$body   = $body;
    }
    
}

function main():void {
    $empty_table = new Table();

    $header = ['Title','Volumes'];

    $body   = [
                ['Chainsaw JavaScript', 12],
                ['Attack on PHP',       27],
                ['Dragon CSS Z',        10],
                ['Apache Piece',        70],
    ];

    $manga_table = new Table($header,$body);
    var_dump($manga_table);
}