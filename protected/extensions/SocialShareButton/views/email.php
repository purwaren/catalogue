<?php
$link = Yii::app()->request->hostInfo . Yii::app()->request->url;
$href = "mailto:?subject=I wanted you to see this site&amp;body=".$link;

?>
<li class="list-inline-item">
    <a class="email"
        href="<?php echo $href?>"
        title="Share by Email">
        <i class="fa fa-envelope-o"></i>
    </a>
</li>