<?php
declare(strict_types=1);
require_once(__DIR__ . '/lib/utils.php');


/*news_reader***********************************************/

function make_blog(): void {

    $news_array = read_json('../db/news.json');
    $index_template_filename = "../src/template/blog.template.php";
    $template_vars = ['news_array' => $news_array];

    $blog_contents = render_template($index_template_filename, $template_vars);
    $blog_filename = "../public/blog.html";
    file_put_contents($blog_filename, $blog_contents);
    
}



/*Galery **************************************************/
function galery(): void{
    $img_array = glob('../../db/Fotos/Logos/*');//recoger imagenes de carpeta
    print_r($img_array);
    $template_index = "src/template/galery.template.php";//la ruta template
    $new_img_array = make_path($img_array);//array con nuevas rutas 
    print_r($new_img_array);
    //make_index_html($template_index, $new_img_array);
}
function make_path(array $img_array):array{
    $result = [];
    foreach($img_array as $img){
        $path = basename($img);
        $new_path = "/img/" . $path;
        array_push($result, $new_path);
    }
    return $result;
}
/*
function make_index_html(string $index_template_filename , array $img_array): void{
    
    $template_vars = ['img_array' => $img_array];//cada vez que en el template encuentre 'img_array' lo cambia a $img_array
    $galery_html = render_template($index_template_filename, $template_vars);//devuelve plantilla del template con $template_vars cambiados
    $index_html = "public/galery.html";//la ruta donde genera el .html, contiene 4 fotos que son albumes
    file_put_contents($index_html, $galery_html);
    
}
*/




/*Main **************************************************/
function main(): void {
    //galeria generator
    //galery();

    make_blog();
    //news_reader();

}

/*****************************************************/
main();

// php -S 0.0.0.0:8080 -t dir(root_server)