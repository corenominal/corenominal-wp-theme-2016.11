<?php
if ( ! defined( 'WPINC' ) ) { die('Direct access prohibited!'); }
/**
 *                                             _             _
 *     ___ ___  _ __ ___ _ __   ___  _ __ ___ (_)_ __   __ _| |
 *    / __/ _ \| '__/ _ \ '_ \ / _ \| '_ ` _ \| | '_ \ / _` | |
 *   | (_| (_) | | |  __/ | | | (_) | | | | | | | | | | (_| | |
 *    \___\___/|_|  \___|_| |_|\___/|_| |_| |_|_|_| |_|\__,_|_|
 *
 *   Webmaster: Philip Newborough
 *   Contact: corenominal [at] corenominal.org
 *   Twitter: @corenominal
 *   From: Lincoln, United Kingdom
 */
?>
<section class="comments">
<h3><?php comments_number('', 'One comment', '% comments'); ?></h3>
<ol class="comment-list">
<?php
wp_list_comments( array(
    'style'       => 'ol',
    'short_ping'  => true,
    'avatar_size' => 46,
) );
?>
</ol>
<?php
$commenter = wp_get_current_commenter();
$fields =  array(

  'author' =>
    '<label for="author">Name *</label> ' .
    '<input id="author" placeholder="What do they call you?" class="full-width" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'">',

  'email' =>
    '<label for="email">Email *</label> ' .
    '<input id="email" placeholder="foo@example.com" class="full-width" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .'">',

  'url' =>
    '<label for="url">Website</label>' .
    '<input id="url" class="full-width" name="url" type="text" placeholder="https://example.com" value="' . esc_attr( $commenter['comment_author_url'] ) .'">',
);

$comment_field = '<label for="comment">Comment *</label><textarea id="comment" placeholder="The place to write witty, insightful and humorous comments." class="full-width" name="comment" rows="12" aria-required="true"></textarea>';

$args = array(
    'fields'                =>  $fields,
    'comment_field'         =>  $comment_field,
    'comment_notes_before'  =>  '<p class="comment-notes"><strong>Notes:</strong> please be excellent (<em>this is not YouTube and I reserve the right not to publish comments from muppets.</em>) Your email address will not be published. Required fields are marked *</p>',
    'title_reply'	        =>	'Leave a comment',
    'class_form'            =>  'panel',
    'class_submit'          =>  'button button-primary'
	);
comment_form( $args );
?>
</section>