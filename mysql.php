<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Document</title>
</head>
<body>
  <?php
      $conn = mysql_connect("bdm271206512.my3w.com","bdm271206512","5651411a");��//����mysql���ݿ⡡��

mysql_select_db("bdm271206512_db");  //ѡ�����ݿ⡡��
$result = mysql_query("select from lgf");//�ڶ�����ѡ������ָ���򿪵����ӡ���

$row = mysql_fetch_row( $result ) ) //ֻȡһ�����ݡ���

echo $row[0]; //�����һ���ֶε�ֵ����
  ?>
</body>
</html>