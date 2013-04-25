<?php
	
	/**
	 * JwPlayer	用于插入视频
	 * @author istrone  - http://www.yiiframework.com/extension/jwplayer/ / edited by abkr on github
	 * @author++ riemann (belakhdar abdeldjalil)
	 * 
	 * how to use it
	 * In Example for the loop, call your videos like this
	 * <?php foreach($dataProvider as $video): ?>
	 * 	<div class="jwbox">
	 * <!--image link to be displayed-->
			<a href="<?php echo $video['flv']; ?>" title="jwplayer_video_<?php echo $video['id']; ?>" rel="gallery2" class="fancybox_vid">
				<img src="/thumbs/'.$video['image']; ?>">
			</a>
		<!--div to display when image link is clicked-->
			<div class="jwbox_hidden">
				<div id="jwplayer_video_<?php echo $video['id']; ?>" class="jwbox_content"></div>
			</div>	
		</div>	
		<?php endforeach; ?>
		<!-- call of jwplayer widget -->
		<?php $this->widget('ext.jwplayer.JwPlayer',array('autoStart'=>false));	?>	 
	 * 
	 * title of href must be equal with id of div that jwplayer will use
	 * the div that be called by jwplayer have to have class=jwbox_content contained in
	 * a div with class=jwbox_hidden
     * also the link to be clicked to view video must have the class value "fancybox_vid"
  	 * 
	 */
	class JwPlayer extends CWidget {
				
		public $thumb;
		
		public $rtmpPath;		//	rtmp://istrone.com/jwplayer
		public $width = 675;
		public $height = 438 ;
		public $statics;

		private $_path ;

		public $autoStart = false;
		
		public function init(){
			
			$this->_path =  dirname(__FILE__);
			
			$this->statics =  Yii::app()->getClientScript();
			$this->statics->registerCoreScript('jquery',CClientScript::POS_END);
			$this->statics->registerScriptFile(CHtml::asset($this->_path.'/jwplayer.js'),CClientScript::POS_END);
			$this->statics->registerScriptFile(CHtml::asset($this->_path.'/jquery.jwbox.js'),CClientScript::POS_END);
			$this->statics->registerCssFile(CHtml::asset($this->_path.'/jwbox.css'));
		

			parent::init();
		}
		
		public function run(){
			
			$this->statics->registerScript('jwplayer01','
					$(".fancybox_vid").click(function(){
						jwplayer($(this).attr("title")).setup({
								flashplayer: "'.CHtml::asset($this->_path."/player.swf").'",
								file:$(this).attr("href"),
								image:"'.$this->thumb.'",
								streamer: "'.$this->rtmpPath.'",
								skin:"'.CHtml::asset($this->_path.'/glow.zip').'",
								width:'.$this->width.',
								height:'.$this->height.',
								bufferlength:1,
								smoothing:true,
								wmode:" ",
							});
					})		
				',CClientScript::POS_END);
			
		}
		
	}
