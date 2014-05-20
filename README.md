CakePHP 2.x Youtube Helper
======================
```
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
```
```
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
Thumbnail Usage: ```php<?=$this->Youtube->thumbnail(URL_OR_VIDEO_ID, (Array) Options);```
Video Usage: ```php<?=$this->Youtube->video(URL_OR_VIDEO_ID, $options, $player_object);```

Setting | value
------------- | -------------
fs        | Enables / Disables fullscreen playback Default: true
hd        | Enables / Disables HD playback (Chromeless player does not support this setting) Default: true
egm       | Enables / Disables advanced context (Right-Click) menu Default: false
rel       | Enables / Disables related videos at the end of the video Default: false
loop      | Loops video once its finished Default: false
start     | Start the video at X seconds Default: 0
version   | For chromeless player set version to 3 Default: 3
autoplay  | Automatically starts video when page is loaded Default: false
autohide  | Automatically hides controls once the video begins Default: false
controls  | Enables / Disables player controls (Chromeless Only) Default: true
showinfo  | Enables / Disables information like the title before the video starts playing Default: false
disablekb | Enables / Disables keyboard controls Default: false
theme     |  Dark / Light style themes Default: light

Variable  | Value
------------- | -------------
type			  | ~~Default~~: application/x-shockwave-flash
class			  | Default: youtube
width			  | Default: 624
height			  | Default: 369
allowfullscreen   | Default: true
allowscriptaccess | Default: always
wmode			  | Default: transparent