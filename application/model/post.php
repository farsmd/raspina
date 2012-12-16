<?php
class post extends appModel
{
	function __construct()
	{
		if(VIEW=='addcategory')
			$this->validate=array(
			'lrtrim'=>'name',
			'name'=>'data',
			'required'=>'name',
			'strip'=>'name'
			);
		elseif(VIEW=='list')
			$this->validate=array(
			'name'=>'data',
			'required'=>'title',
			);
		elseif(VIEW=='view')
			$this->validate=array(
			'name'=>'data',
			'required'=>array('mail','comment','post_id'),
			'mail'=>'mail',
			'strip'=>array('name','mail','site','comment')
			);			
		else
			$this->validate=array(
			'name'=>'data',
			'required'=>'post_title',
			'date'=>'post_date',
			'time'=>'post_time',
			'strip'=>array('tags','post_title')
			);			
		parent::__construct();
	}	
}
?>