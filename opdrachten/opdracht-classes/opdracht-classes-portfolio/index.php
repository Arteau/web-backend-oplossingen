<?php 
    spl_autoload_register(function ($name) {
        include 'classes/'.$name.'.php';
    });
    if(isset($_GET['page']))
    {
        switch($_GET['page']){
            case 'contact':
            $body="html/contact.partial.html";
            break;
            case 'body':
            $body="html/body.partial.html";
            break;
            default:
            $body="html/body.partial.html";
            break;
        }
    }else{
        $body="html/body.partial.html";
        
    }
    // $body=
    $HtmlBuilder1 = new HTMLBuilder("html/header.partial.html", $body, "html/footer.partial.html");



    $HtmlBuilder1->buildHeader();
    // if(isset())
    $HtmlBuilder1->buildBody();
    $HtmlBuilder1->buildFooter();


?>

