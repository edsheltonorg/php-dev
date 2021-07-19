<?php header('Content-type: text/html; charset=utf-8'); ?>
<?php
class C {
    public $fname = 'Ed';
    public $lname = 'Shelton';
}
echo "
class C {
    public $fname = 'Ed';
    public $lname = 'Shelton';
}
<br>";

$o = new C;
echo "$o->fname"." "."$o->lname"."<br>";
$p = $o;
$o->fname = "Bob";
echo "$o->fname"." "."$o->lname"."<br>";
echo "$p->fname"." "."$p->lname"."<br>";
?>