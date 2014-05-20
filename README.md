CakePHP 2.x Youtube Helper
======================
```php
private $options = array(
	'fs'        => true,   // Enables / Disables fullscreen playback
	'hd'        => true,   // Enables / Disables HD playback (Chromeless player does not support this setting)
	'egm'       => false,  // Enables / Disables advanced context (Right-Click) menu
	'rel'       => false,  // Enables / Disables related videos at the end of the video
	'loop'      => false,  // Loops video once its finished
	'start'     => 0,      // Start the video at X seconds
	'version'   => 3,      // For chromeless player set version to 3
	'autoplay'  => false,  // Automatically starts video when page is loaded
	'autohide'  => false,  // Automatically hides controls once the video begins
	'controls'  => true,   // Enables / Disables player controls (Chromeless Only)
	'showinfo'  => false,  // Enables / Disables information like the title before the video starts playing
	'disablekb' => false,  // Enables / Disables keyboard controls
	'theme'     => 'light' // Dark / Light style themes
);
private $player_object = array(
    'type'              => 'application/x-shockwave-flash',
    'class'             => 'youtube',
    'width'             => 624,          // Sets player width
    'height'            => 369,          // Sets player height
    'allowfullscreen'   => 'true',       // Gives script access to fullscreen (This is required for the fs player setting to work)
    'allowscriptaccess' => 'always',
    'wmode'             => 'transparent' // Ensures player stays under overlays such as lightbox/fancybox
)
```
Thumbnail Usage: <?=$this->Youtube->thumbnail(URL_OR_VIDEO_ID, (Array) Options);
Video Usage: <?=$this->Youtube->video(URL_OR_VIDEO_ID, $options, $player_object);
