

<?php $link = 'https://www.facebook.com/sharer/sharer.php?u='.Yii::app()->request->hostInfo . Yii::app()->request->url; ?>

<li class="list-inline-item">
    <a href="#" class="external facebook"
       onclick="window.open('<?php echo $link?>', 'newwindow', 'width=560, height=250')">
        <i class="fa fa-facebook"></i>
    </a>
</li>