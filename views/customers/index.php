<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Customers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	<h1><?= Html::encode($this->title) ?></h1>

	<table class="table table-striped">  
		<tr>
			<th>Full name</th>
			<th>Tel No</th>
			<th>Date of Birth</th>
		</tr>
		<?php
		foreach ($customers as $customer) {
			echo 
			"<tr>
			<td>".$customer->fname." ".$customer->lname."</td>
			<td>".$customer->telNo."</td>
			<td>".$customer->dob."</td>
			</tr>";
		}
		?>
	</table> 
</div>
