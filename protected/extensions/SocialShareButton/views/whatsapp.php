<?php
$link = Yii::app()->request->hostInfo . Yii::app()->request->url;
$href = "whatsapp://send?text=I wanted you to see this site ".$link;

?>
<a class="btn btn-success"
   style="border-radius: 0"
   href="<?php echo $href?>"
   title="Share by Whatsapp">
    <i class="fa fa-whatsapp fa-lg"></i>
</a>