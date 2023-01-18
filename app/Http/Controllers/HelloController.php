<?php
namespace App\Http\Controllers;


global $head,$style,$body,$end;
$head = '<html><head>';
$style = <<<EOF
<style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee;
        margin:-40px 0px -50px 0px;}
</style>
EOF;

$body = '</head><body>';
$end = '</body></html>';
function tag($tag,$txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}




use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(){
        global $head,$style,$body,$end;
        $html = $head . tag('title','Hello World') . $style . $body
        . '<a href = "/hello/other"> go to other page</a>' . $end;
        return $html;
    }

    public function other(){
        global $head,$style,$body,$end;
        $html = $head . tag('title','Hello/Other') . $style . $body
        . tag('h1','other') . tag('p','this is other page') . $end;
        return $html;
    }
//
/*
public function index($id = "noName",$pass='unknown'){
    return <<<EOF
    <html>
    <head>
    <title>Index</title>
    <style>
    body {font-size:16pt; color:#999;}
    h1 {font-size:100pt; text-align:right; color:#eee;
    margin:-40px 0px -50px 0px;}
    </style>
    </head>
    <body>
    <h1>Hello/Index</h1>
    <p>Index</p>
    <p>This is Index page.</p>
    <ul>
        <li>ID:{$id}</li>
        <li>ID:{$pass}</li> 
    </ul>
    </body>
    </html>
    EOF;

    //return $html;
}
*/
}
