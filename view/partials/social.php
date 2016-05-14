<?php
  $current_url ="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<div class="container-fluid hidden-sm-down">
  <div class="row">
    <div class="col-lg-12">
      <hr>
      <h3>Share this : </h3>
      <div id="share-buttons">

          <!-- Buffer -->
          <a href="https://bufferapp.com/add?url=<?php echo $current_url;?>&amp;text=MEA IEEE Student Branch" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/buffer.png" alt="Buffer" />
          </a>

          <!-- Digg -->
          <a href="http://www.digg.com/submit?url=<?php echo $current_url;?>" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/diggit.png" alt="Digg" />
          </a>

          <!-- Email -->
          <a href="mailto:?Subject=MEA IEEE Student Branch&amp;Body=I%20saw%20this%20and%20thought%20of%20you!%20 <?php echo $current_url;?>">
              <img src="https://simplesharebuttons.com/images/somacro/email.png" alt="Email" />
          </a>

          <!-- Facebook -->
          <a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url;?>" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
          </a>

          <!-- Google+ -->
          <a href="https://plus.google.com/share?url=<?php echo $current_url;?>" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/google.png" alt="Google" />
          </a>

          <!-- LinkedIn -->
          <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $current_url;?>" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/linkedin.png" alt="LinkedIn" />
          </a>

          <!-- Pinterest -->
          <a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
              <img src="https://simplesharebuttons.com/images/somacro/pinterest.png" alt="Pinterest" />
          </a>

          <!-- Print -->
          <a href="javascript:;" onclick="window.print()">
              <img src="https://simplesharebuttons.com/images/somacro/print.png" alt="Print" />
          </a>

          <!-- Reddit -->
          <a href="http://reddit.com/submit?url=<?php echo $current_url;?>&amp;title=MEA IEEE Student Branch" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/reddit.png" alt="Reddit" />
          </a>

          <!-- StumbleUpon-->
          <a href="http://www.stumbleupon.com/submit?url=<?php echo $current_url;?>&amp;title=MEA IEEE Student Branch" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/stumbleupon.png" alt="StumbleUpon" />
          </a>

          <!-- Tumblr-->
          <a href="http://www.tumblr.com/share/link?url=<?php echo $current_url;?>&amp;title=MEA IEEE Student Branch" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/tumblr.png" alt="Tumblr" />
          </a>

          <!-- Twitter -->
          <a href="https://twitter.com/share?url=<?php echo $current_url;?>&amp;text=Simple%20Share%20Buttons&amp;hashtags=simplesharebuttons" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/twitter.png" alt="Twitter" />
          </a>

          <!-- VK -->
          <a href="http://vkontakte.ru/share.php?url=<?php echo $current_url;?>" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/vk.png" alt="VK" />
          </a>

          <!-- Yummly -->
          <a href="http://www.yummly.com/urb/verify?url=<?php echo $current_url;?>&amp;title=MEA IEEE Student Branch" target="_blank">
              <img src="https://simplesharebuttons.com/images/somacro/yummly.png" alt="Yummly" />
          </a>
      </div>
    </div>
  </div>
</div>
