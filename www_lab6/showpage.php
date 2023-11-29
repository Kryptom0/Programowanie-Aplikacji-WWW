<?
function PokazPodstrone($id)
{
	//czyscimy $id, aby przez GET ktoś nie probował wykonac ataku SQL INJECTION
	$id_clear = htmlspecialchars($id);
	 $query="SELECT * FROM page_list WHERE id='$id_clear' LIMIT 1";
	  $result = mysql_query($query);
	   $row = mysql_fetch_array($result);
	   
	//wywolywanie strony z bazy
	 if(empty($row['id']))
	 {
		$web = '[nie_znaleziono_strony]';
	 }
	 else
	 {
		$web = $row['page_content'];
	 }
 return $web;
 }
 
 ?>