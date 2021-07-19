<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
class C {
    public $fname = 'Ed';
    public $lname = 'Shelton';
}

$o = new C;
$p = $o;
$o->fname = "Beth";
echo "$o->fname"." "."$o->lname"."<br>";
echo "$p->fname"." "."$p->lname"."<br>";

$a = new C;
$b = &$a;
$b->fname = "Beth";
echo "$a->fname"." "."$a->lname"."<br>";
echo "$b->fname"." "."$b->lname"."<br>";

?>