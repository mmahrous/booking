<?php include('_header.php'); ?>
<div class="user_in" >
	<center>
<?php
// if you need the user's information, just put them into the $_SESSION variable and output them here
echo "<h5> <span class='fi-torso'></span> Welcome " . $_SESSION['user_name'];

//echo WORDING_PROFILE_PICTURE . '<br/><img src="' . $login->user_gravatar_image_url . '" />;
?>
    <a href="?logout" class="fi-x"></a>
    <a href="edit.php" class="fi-pencil"></a>
<a href="#" data-reveal-id="book" class="button small alert radius"><span class="fi-plus"></span>   Book a space</a>
</h5>	

<div id="book" class="reveal-modal tiny" data-reveal>
  <h2>This is a modal.</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
</center>
</div>