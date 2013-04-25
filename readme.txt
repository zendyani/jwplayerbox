Name:
jwplayerbox

Short Summary *:
Help to display multiple videos using jwplayer with fancybox model box

Description:
------------

This extension is based on the work of istrone http://www.yiiframework.com/extension/jwplayer/ 
I created the script to managed displaying more than one video in the same page with a model box
the script is done to manage flv file or youtube video (by calling youtube url)

##Requirements

Tested on Yii 1.1.*

##Usage

1-Unzip folder in extensions folder.
2-call widget in the classical way
~~~
[php]
	<?php $this->widget('ext.jwplayer.JwPlayer',array('autoStart'=>false));	?>	 
~~~	

3-create a link with an image thumb for example (when clicked jbox model will be displayed with jwplayer)
you have to note that in the link tag you must specify class attribute as "fancybox_vid" like the folowing 
example:
~~~
[php]
<a href="flv_link_here" title="jwplayer_video_example" rel="gallery2" class="fancybox_vid">
	<img src="/thumbs/someImage.jpg">
</a>
~~~

4-create code for jbox model (used by the script to display video)
~~~
[php]
<div class="jwbox_hidden">
	<div id="jwplayer_video_someId" class="jwbox_content"></div>
</div>
~~~


##Resources
For more informations:
-http://www.yiiframework.com/extension/jwplayer
-http://www.longtailvideo.com/players/jw-flv-player

