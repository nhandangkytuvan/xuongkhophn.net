<?php  $setting_web = json_decode($data['setting']->setting_web,true)  ?>
<div class="panel panel-default">
	<div class="panel-body">
		<?php if(isset($setting_web['web_logo'])): ?>
		<p><img src="<?php echo e(asset('public/img/'.$setting_web['web_logo'])); ?>" class="img-responsive center-block"></p>
		<?php endif; ?>
		<h4 class="text-center">xuongkhophn.net</h4>
	</div>
</div>