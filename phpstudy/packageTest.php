<?php 
require 'vendor/autoload.php';
use dflydev\markdown\MarkdownParser; // namespace
$markdownParser = new MarkdownParser();
echo $markdownParser->transformMarkdown('#Hello world!'); // # means <h1> ~ </h1>
?>