<?php
	if($this->style == 'vertical')
		$data_type = 'top';
	else
		$data_type = 'right';
?>

<script src="//platform.linkedin.com/in.js" type="text/javascript">
  lang: en_US
</script>
<script type="IN/Share" data-url="<?php echo Yii::app()->request->hostInfo . Yii::app()->request->url; ?>" data-counter="<?php echo $data_type; ?>"></script>
