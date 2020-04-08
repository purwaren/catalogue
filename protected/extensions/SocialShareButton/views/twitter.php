<?php $link = 'https://twitter.com/intent/tweet?url='.Yii::app()->request->hostInfo . Yii::app()->request->url; ?>

<li class="list-inline-item">
    <a href="#" class="external twitter"
   onclick="window.open('<?php echo $link?>', 'newwindow', 'width=560, height=250')"
  >
    <i class="fa fa-twitter"></i>
</a>

