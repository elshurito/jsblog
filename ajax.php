<?
if (!mysql_connect(localhost, root, indader88))
{
	exit;
}
mysql_select_db("test_ajax");
$q = mysql_query("SELECT * FROM test_table");
$res = mysql_fetch_assoc($q);
echo json_encode($res);