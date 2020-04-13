<!-- получить заголовок раздела на сайте. -->
<!-- название раздела -->

<?
$sSectionName = "";
$sPath = $_SERVER["DOCUMENT_ROOT"].$APPLICATION->GetCurDir().".section.php";
include($sPath);
echo $sSectionName;
?>

<!-- свойство раздела -->

<?
$props = $APPLICATION->GetDirPropertyList();
foreach($props as $key=>$val)
   echo 'name="'.$key.'" content="'.htmlspecialchars($val).'"<br />';
?>
