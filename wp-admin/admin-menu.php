<?php
/**
 * Import WordPress Administration Screen
 *
 * @package WordPress
 * @subpackage Administration
 */


/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );
require_once( ABSPATH . 'wp-admin/admin-header.php' );
global $wpdb;
if ($_POST['act']== edit2 ) {
	$newid=$_POST['id'];
	$newname=$_POST['name'];
	$newpercent=$_POST['percent'];
	$newminsrok=$_POST['minsrok'];
	$newmaxsrok=$_POST['maxsrok'];
	$newminSumma=$_POST['minSumma'];
	$newmaxSumma=$_POST['maxSumma'];
	
	$newVPercent=$_POST['VPercent'];
	
	$previd=$_POST['previd'];
	$result=$wpdb->update(sberejenia,
	array(
	'id'=>$newid, 
	'name'=>$newname, 
	'percent'=>$newpercent, 
	'minsrok'=>$newminsrok, 
	'maxsrok'=>$newmaxsrok, 
	'minSumma'=>$newminSumma, 
	'maxSumma'=>$newmaxSumma, 
	'VPercent'=>$newVPercent),array(id=>$previd));
		$edit=false;
}

if ($_POST['act']== add2 ) {

	$newid=$_POST['id'];
	$newname=$_POST['name'];
	$newpercent=$_POST['percent'];
	$newminsrok=$_POST['minsrok'];
	$newmaxsrok=$_POST['maxsrok'];
	$newminSumma=$_POST['minSumma'];
	$newmaxSumma=$_POST['maxSumma'];
	
	$newVPercent=$_POST['VPercent'];
	
	$result=$wpdb->insert(sberejenia,array(
	'id'=>$newid, 
	'name'=>$newname, 
	'percent'=>$newpercent, 
	'minsrok'=>$newminsrok, 
	'maxsrok'=>$newmaxsrok, 
	'minSumma'=>$newminSumma, 
	'maxSumma'=>$newmaxSumma, 
	'VPercent'=>$newVPercent));
	$add=false;
	
      }
if ($_GET['act']== del  ) {
      $id = $_GET['id'];
	  $wpdb->query("DELETE FROM `sberejenia` WHERE id=$id");
     }
if ($_GET['act']== add && $_POST['act']!= add2) 
    $add=true;
	else
	$add=false;
    	  

if ($_GET['act']== edit&&$_POST['act']!= edit2)	{
	$editid=$_GET['id'];
	$edit=true;
	echo "asdad";}
	else
	$edit=false;
	
	  
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '</pre>
<div class="wrap">';
$pages = $wpdb->get_results("SELECT * FROM `sberejenia`");
 echo '
<H1 align="center">Настройка Тарифов</H1>
<br>
<br>
<table border="1" align="center">
';
?>
<td></td>
		<td></td>
		<td style="width: 40px;">ИД</td>
		<td style="width: 110px;">Имя</td>
		<td style="width: 40px;">Процент</td>
		<td style="width: 40px;">Мин.Срок</td>
		<td style="width: 40px;">Макс.Срок</td>
		<td width="50px" style="width: 70px;">Мин.Сумма</td>
		<td width="50px" style="width: 80px;">Макс.Сумма</td>
		<td style="width: 100px;">Возврат %</td>
<?php
if( $pages ) {
	foreach ( $pages as $page ) {
		$id=$page->id;
		echo '<tr>';
		
		if ($edit&&$editid==$id) {
		echo '<form action="" method="POST">';
		echo '<td colspan="2"><center><input type="hidden" name="act" value="edit2"><input type="submit" value="Изменить" style="width: 100%;"><center></td>
		<td style="width: 40px;"><input type="hidden" name="previd" value="'.$page->id.'"><input  type="text" style="width: 40px;"  name="id" value="'.$page->id.'"></td>
		<td style="width: 110px;"><input  type="text" style="width: 110px;"  name="name" value="'.$page->name.'"></td>
		<td style="width: 40px;"><input  type="text" style="width: 40px;"  name="percent" value="'.$page->percent.'"></td>
		<td style="width: 40px;"><input  type="text" style="width: 40px;"  name="minsrok" value="'.$page->minsrok.'"></td>
		<td style="width: 40px;"><input  type="text" style="width: 40px;"  name="maxsrok" value="'.$page->maxsrok.'"></td>
		<td style="width: 70px;"><input  type="text" style="width: 70px;"  name="minSumma" value="'.$page->minSumma.'"></td>
		<td style="width: 80px;"><input  type="text" style="width: 80px;"  name="maxSumma" value="'.$page->maxSumma.'"></td>
		<td style="width: 100px;"> <input  type="text" style="width: 100px;"  name="VPercent" value="'.$page->VPercent.'"></td>';
		echo '</form >';
		}
		else
		{echo '<td><a href="?act=edit&id='.$id.'">Изменить</a></td>
		<td><a href="?act=del&id='.$id.'" >Удалить</a></td>
		<td style="width: 40px;">'.$page->id.'</td>
		<td style="width: 110px;">'.$page->name.'</td>
		<td style="width: 40px;">'.$page->percent.'</td>
		<td style="width: 40px;">'.$page->minsrok.'</td>
		<td style="width: 40px;">'.$page->maxsrok.'</td>
		<td width="50px" style="width: 70px;">'.$page->minSumma.'</td>
		<td width="50px" style="width: 80px;">'.$page->maxSumma.'</td>
		<td style="width: 100px;"> '.$page->VPercent.'</td>';}
		echo '</tr>';
	}
	if( $add) 
	{
		echo '<form action="" method="POST"><tr>';
		echo '<td colspan="2"><center><input type="hidden" name="act" value="add2"><input type="submit" value="OK" style="width: 100%;"><center></td>
		<td style="width: 40px;"><input name="id" type="text" style="width: 40px;" ></td>
		<td style="width: 110px;"><input name="name" type="text" style="width: 110px;"></td>
		<td style="width: 40px;"><input name="percent" type="text" style="width: 40px;"></td>
		<td style="width: 40px;"><input name="minsrok" type="text" style="width: 40px;"></td>
		<td style="width: 40px;"><input name="maxsrok" type="text" style="width: 40px;"></td>
		<td  style="width: 70px;"><input name="minSumma" type="text" style="width: 70px;"></td>
		<td  style="width: 80px;"><input name="maxSumma" type="text" style="width: 80px;"></td>
		<td style="width: 100px;"><input name="VPercent" type="text" style="width: 100px;"></td>';
		echo '</tr></form>';
	}
	
}

 echo ' </table>';
 
 ?>
<?php if (!($add)) {
echo '<center><a href="?act=add"><button align="center">Добавить</button></a></center>';}?>
 <?php echo '</div><pre>';


include( ABSPATH . 'wp-admin/admin-footer.php' );
