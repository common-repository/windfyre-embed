<?php
/*
Plugin Name: Windfyre Embed
Plugin URI: http://wordpress.org/extend/plugins/windfyre-embed/
Description: Creates a shortcode to embed a <a href="http://www.windfyre.net" target="_blank">Windfyre IRC</a> channel (chatroom) into a page or post
Author: MartyniP
Author URI: http://www.martynip.co.uk/
Version: 1.2
License: GPL2
*/

/*  Copyright 2010  MartyniP  (email : admin@martyni-productions.co.cc)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


    function windfyre_embed($atts) {

        extract(shortcode_atts(array(
            'channel' => '#windfyre',
            'width' => '500',
            'height' => '375',
            'nick' => 'WPUser'),
            $atts));
			$nick = str_replace(' ','',$nick);
			$nick .= rand(10,1000);
			if ($height < 375) {
			$height = 375;	
			}
			if ($width < 500) {
			$width = 500;	
			}
        $html1 = '<div name="flashchat" style="height: '.$height.'px; width: '.$width.'px; background-color: #FFFFFF;">
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%" salign="tl" wmode="transparent"><param name="allowScriptAccess" value="sameDomain" />
		<param name="movie" value="';
        $html2 = '"><param name="quality" value="high"><embed src="';
        $html3 =  '" allowScriptAccess="always" allowNetworking="all" quality="high" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" width="100%" height="100%" salign="tl">
		</embed>
		</object>
		</div>
		<div style="height: 35px; width: '.$width.'px; background-color: #FFFFFF;" align="center">
		<a href="http://irc.windfyre.net/">
		<img border="0" alt="Windfyre" src="http://irc.windfyre.net/data/button.gif"></a><br />
		Get this plugin at <br />
		<a href="http://wordpress.org/extend/plugins/windfyre-embed/" target="_blank">http://wordpress.org/extend/plugins/windfyre-embed/</a>
		</div>';
        $embed_url = 'http://www.lightirc.com/start/lightIRC.swf?host=wfstingray.ath.cx&nickselect=yes&autojoin='.$channel.',#windfyre&nick='.$nick.'&ident=wordpress';
        return $html1 . $embed_url . $html2 . $embed_url . $html3;
    }

    add_shortcode('windfyre', 'windfyre_embed');
	add_shortcode('windfyre_embed', 'windfyre_embed');
	add_shortcode('chat', 'windfyre_embed');
?>
