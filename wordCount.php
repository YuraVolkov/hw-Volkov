<?php
$text_1 = strip_tags(file_get_contents('index.php'));
$wordCountIndex = str_word_count($text_1, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
$text_2 = strip_tags(file_get_contents('php/content.php'));
$wordCountContent = str_word_count($text_2, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
$text_3 = strip_tags(file_get_contents('php/container.php'));
$wordCountContainer = str_word_count($text_3, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
$text_4 = strip_tags(file_get_contents('php/container_2.php'));
$wordCountContainer_2 = str_word_count($text_4, 0, "АаБбВвГгДдЕеЁёЖжЗзИиЙйКкЛлМмНнОоПпРрСсТтУуФфХхЦцЧчШшЩщЪъЫыЬьЭэЮюЯя");
$wordCount = $wordCountIndex + $wordCountContent + $wordCountContainer + $wordCountContainer_2;
echo "Количество слов на странице " . $wordCount . "<br>";
$text = $text_1 . $text_2 . $text_3 . $text_4;
$str = preg_match_all('/[АаЕеЁёИиОоУуЭэЮюЯя]/u', $text);
echo "Количество гласных на странице " . $str;
?>