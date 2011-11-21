<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3c.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>親交会会計管理 - 仕訳</title>
</head>

<body>
<h2>親交会会計管理/仕訳</h2>
<hr>

<?php
echo form_open("shiwake/save/");

echo form_input(array(
         "name" => "year",
         "maxlength" => "6",
         "size" => "6",
         ));
echo ('年');

echo form_input(array(
         "name" => "month",
         "maxlength" => "6",
         "size" => "6",
         ));
echo ('月');

echo form_input(array(
         "name" => "day",
         "maxlength" => "6",
         "size" => "6",
         ));
echo ('日');

echo ("<br>\n");

echo ('借方科目');
echo form_input('karikata');
echo ('貸方科目');
echo form_input('kashikata');
echo ('金額');
echo form_input('kingaku');

echo ("<br>\n");
echo form_submit('submit', '保存');

echo form_close();

echo ("<br>\n");

echo ("<table>\n");
echo ("<tbody>\n");
echo ("<tr><th>日付</th><th>借方</th><th>貸方</th><th>金額</th></tr>\n");
echo ("<tr>\n");
echo ("<td>2011-11-19</td><td>親交会貸付</td><td>普通預金</td><td>100,000</td>\n");
echo ("</tr>\n");
echo ("<tr>\n");
echo ("<td>2011-11-20</td><td>親交会貸付</td><td>普通預金</td><td>50,000</td>\n");
echo ("</tr>\n");
echo ("<tr>\n");
echo ("<td>2011-11-21</td><td>親交会貸付</td><td>普通預金</td><td>100,000</td>\n");
echo ("</tr>\n");
echo ("</tbody>\n");
echo ("</table>\n");
?>
</body>
</html>
