<?php
/**
 * comment_tracker language extender
 * 
 * @package ElggCommentTracker
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
 * @copyright Copyright (c) 2007-2011 Cubet Technologies. (http://cubettechnologies.com)
 * @version  1.0
 * @author Akhilesh @ Cubet Technologies
 */

	$english = array(
		'comments' => "Comments",
		'comment:notification:settings' => 'Comment notifications',
		'comment:notification:settings:description' => 'To receive notifications when a user added new comments to an entity, find it below and select the notification method you would like to use.',
		'comment:notification:settings:success' => 'Your notifications settings have been saved.',
		'allow:comment:notification' => 'Do you want to enable notification? ',
		'email:content:type' => 'Do you want to support HTML Email? ',
		'text:email' => 'No',
		'html:email' => 'Yes',
		'comment:subscribe' => 'Subscribe',
		'comment:unsubscribe' => 'Unsubscribe',
		'show:subscribers' => 'Show Subscribers',
		'comment:subscribe:success' => 'You have successfully subscribed to this post or topic.',
		'comment:subscribe:failed' => "Sorry! You couldn't subscribe this post or topic.",
		'comment:subscribe:entity:not:access' => "Sorry! we couldn't find the post or topic for some reason.",
		'comment:unsubscribe:success' => 'You have successfully unsubscribed from this post or topic.',
		'comment:unsubscribe:failed' => "Sorry! You couldn't unsubscribe from this post or topic.",
		'comment:unsubscribe:not:valid:url' => 'Sorry! This is not a valid url to unsubscribe from this post or topic.',
		'comment:unsubscribe:entity:not:access' => "Sorry! we couldn't find the post or topic.",
		'comment:notify:subject' => 'There is a new comment on %s',
		'comment:notify:group:subject' => 'There is a new post in the thread %s',
		'comment:notify:body:web' => 'Hi %s,
<br/>There is a new comment on %s
<br/>%s wrote: %s
<br/>%s
<br/>
<font color="#888888" size="2">
You have received this notification because you have subscribed to it, or are involved in it.<br/>
To change your notification preferences, please click here: %s<br/>
Or unsubscribe from this particular post or topic, please click here: %s
</font>
		',
	  	'comment:notify:group:body:web' => 'Hi %s,
<br/>There is a new post in the thread %s
<br/>%s wrote: %s
<br/>%s
<br/>
<font color="#888888" size="2">
You have received this notification because you have subscribed to it, or are involved in it.<br/>
To change your notification preferences, please click here: %s<br/>
Or unsubscribe from this particular post or topic, please click here: %s
</font>
		',
		'comment:notify:body:email:text' => 'Hi %s,

There is a new comment on %s

%s wrote: %s

%s

Regards,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Please note you may have to login before viewing the post or topic.

You have received this notification because you have subscribed to it, or are involved in it.

To change your notification preferences for all such messages, please click here: %s

Or unsubscribe from this particular post or topic, please click here: %s
</font>
		',
	  	'comment:notify:group:body:email:text' => 'Hi %s,

There is a new post in the thread %s

%s wrote: %s

%s

Regards,
%s

_________________________________________________________________________________
<font color="#888888" size="2">
Please note you may have to login before viewing the post or topic.

You have received this notification because you have subscribed to it, or are involved in it.

To change your notification preferences for all such messages, please click here: %s

Or unsubscribe from this particular post or topic, please click here: %s
</font>
		',
	
	'comment:notify:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new comment on %s</div>
	<div>%s wrote: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div></div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
		<div>To unsubscribe from this particular post or topic, please click here: %s</div>
	</div>
</div>
		',
	  	'comment:notify:group:body:email:html' => '
<div>
	<div>Hi %s,</div>
	<div>There is a new post in the thread %s</div>
	<div>%s wrote: %s</div>
	<div>%s</div>
	<div>&nbsp;</div>
	<div>Regards,</div>
	<div>%s</div>
	<div style="border-top:1px solid #CCCCCC;color:#888888;">
		<div>Please note you may have to login before viewing the post or topic.</div>
		<div>You have received this notification because you have subscribed to it, or are involved in it.</div>
		<div>To change your notification preferences for all such messages, please click here: %s</div>
		<div>Or,to unsubscribe from this particular post or topic, please click here: %s</div>
	</div>
</div>
		',
	);
					
	add_translation("en",$english);

?>