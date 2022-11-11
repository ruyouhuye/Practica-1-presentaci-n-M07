<?php
declare(strict_types=1);
namespace Ssg;

require_once(__DIR__ . '/lib/utils.php');
require_once(__DIR__ . '/lib/table.php');

use Utils;
use nsTable;

// Blog

function make_blog(): void {

    $news_array = Utils\read_json('../db/news.json');
    $index_template_filename = "../src/template/blog.template.php";
    $template_vars = ['news_array' => $news_array];

    $blog_contents = Utils\render_template($index_template_filename, $template_vars);
    $blog_filename = "../public/blog.html";
    file_put_contents($blog_filename, $blog_contents);
    
}

// Galery

function make_galery(string $html_filename, string $dir_name): void {

    $path = __DIR__ . "/../db/Fotos/$dir_name/*";

    $path_image_array = glob($path);

    $web_links = array();

    foreach ($path_image_array as $image) {
        $filename = basename($image);
        $web_links[] = "/img/$dir_name/" . $filename;
    }

    $html_filename = "../public/$html_filename";

    $template_filename = 'template/galery.template.php';
    $template_vars     = ['images_array' => $web_links];
    $index_contents    = Utils\render_template($template_filename,$template_vars);

    file_put_contents($html_filename,$index_contents);
}

// Data Table

function make_table(): void{
    
    $tabla = file_get_contents('../db/liga - Hoja 1.csv');

    $table = [];
    $line_array = explode("\n", $tabla);
    foreach($line_array as $line){
        $row = explode(",", $line);
        array_push($table, $row);
    }

    $template_table= "../src/template/table.template.php";
    $filename_html = "../public/table.html";
    $template_vars = ['table' => $table];
    $end_index = Utils\render_template($template_table,$template_vars);
    file_put_contents($filename_html,$end_index);
}

// Web Service

function make_web_service(): void {
    $webs_array = json_decode( file_get_contents('https://www.balldontlie.io/api/v1/teams'), true );
    $index_template_filename = "../src/template/service.template.php";
    $template_vars = ['webs_array' => $webs_array];
    //echo file_get_contents('https://api.football-data.org/v4/matches');
    $web_contents = Utils\render_template($index_template_filename, $template_vars);
    $web_filename = "../public/web_service.html";
    file_put_contents($web_filename, $web_contents);
}

// Main

function main(): void {
    shell_exec("rm -r -f ../public/*");
    $origin = "../resources/*";
    $destin = "../public/";
    shell_exec("cp -r $origin $destin");
    shell_exec("cp -r ../db/Fotos/* $destin/img");
    make_blog();
    make_galery("galery.html","Logos");
    make_galery("ballondor.html","BallonDor");
    make_galery("champions.html","Champions");
    make_galery("promises.html","Promises");
    make_galery("worldcup.html","WorldCup");
    make_table();
    make_web_service();

}

/*****************************************************/
main();

// php -S 0.0.0.0:8080 -t dir(root_server)
