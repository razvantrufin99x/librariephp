//modifica_act.php
 <?
  mysql_connect("localhost","root","");
 mysql_select_db("librarie");
 #sql = " update carti set titlu='".$_POST['titlu']."', descriere='".$_POST['delete']."' where id_carte=".$_POST['id_carte];
 
 mysql_query($sql);
 
 header("location: lista_carti.php");
 ?>
 