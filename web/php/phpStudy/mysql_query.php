<?php 
// mysql -hlocalhost -uroot -pSQLseulgi1720; 
mysql_connect('localhost', 'root', 'SQLseulgi1720');
// use chase
mysql_select_db('chase');
mysql_query("set session character_set_connection=utf8;");
mysql_query("set session character_set_results=utf8;");
mysql_query("set session character_set_client=utf8;");

// select * from topic where id = 5;
$result = mysql_query("select * from topic where id = ".$_GET['id']);
$topic = mysql_fetch_array($result);
//print($topic['title']);
//var_dump($topic['title']); // it shows its data type

$result2 = mysql_query("select * from topic");

?>
<html>
    <head>
        <meta charset='utf-8' />
        <style>
            h1{
                border-bottom:1px solid grey;
                padding-bottom:20px;
            }
            nav{
                border-right:1px solid grey;
                padding-right:10px;
                width:200px;
                float:left;
            }
            article{
                float:left;
                width:500px;
                padding-left:20px;
            }
        </style>
    </head>
    <body>
        <h1>JavaScript</h1>
        <nav>
            <ol>
                <?php
                while($topics = mysql_fetch_array($result2)){
                    echo '<li><a href="mysql_query.php?id='.$topics['id'].'">'.$topics['title'].'</a></li>';
                }
                ?>
            </ol>
        </nav>
        <article>
            <h2><?= $topic['title'] ?></h2>
            <div><?= $topic['description']?></div>
        </article>
    </body>
</html>