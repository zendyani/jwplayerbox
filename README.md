This extension is based on the work of istrone http://www.yiiframework.com/extension/jwplayer/ I created the script to manage displaying more than one video in the same page with a modal box the script is done to manage flv file or youtube video (by calling youtube url)

Requirements 

Tested on Yii 1.1.*

Usage 

1-Unzip folder in extensions folder.<br>
2-call widget in the classical way<br>
<?php $this->widget('ext.jwplayer.JwPlayer',array('autoStart'=>false)); ?><br>
3-create a link with an image thumb for example (when clicked jbox model will be displayed with jwplayer) you have to note that in the link tag you must specify class attribute as "fancybox_vid" like the folowing example:<br>
<a href="flv_link_here" title="jwplayer_video_someId" rel="gallery2" class="fancybox_vid"><br>
    <img src="/thumbs/someImage.jpg"><br>
</a><br>
4-create code for jbox modal (used by the script to display video), you have to note that id="jwplayer_video_someId" have to be the same as title attribute of link tag.<br>

<div class="jwbox_hidden">
    <div id="jwplayer_video_someId" class="jwbox_content"></div>
</div>
