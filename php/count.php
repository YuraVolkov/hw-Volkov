<?php
$text = file_get_contents('header.php');
$text_no_tags = strip_tags($text);
echo $text_no_tags;
echo '<br>';
var_dump($text_no_tags);
echo '<br>';
$wordCountheader = str_word_count($text_no_tags);
echo "Количество слов" . " " . $wordCountheader;
?>