CakePHP 2.x Youtube Helper
======================
Thumbnail Usage
```php
<?=$this->Youtube->thumbnail(URL_OR_VIDEO_ID, (Array) Options);
```

Video Usage
```php
<?=$this->Youtube->video(URL_OR_VIDEO_ID, $options, $player_object);
```

Setting | value
------------- | -------------
fs        | Enables / Disables fullscreen playback **Default**: true
hd        | Enables / Disables HD playback (Chromeless player does not support this setting) **Default**: true
egm       | Enables / Disables advanced context (Right-Click) menu **Default**: false
rel       | Enables / Disables related videos at the end of the video **Default**: false
loop      | Loops video once its finished **Default**: false
start     | Start the video at X seconds **Default**: 0
version   | For chromeless player set version to 3 **Default**: 3
autoplay  | Automatically starts video when page is loaded **Default**: false
autohide  | Automatically hides controls once the video begins **Default**: false
controls  | Enables / Disables player controls (Chromeless Only) **Default**: true
showinfo  | Enables / Disables information like the title before the video starts playing **Default**: false
disablekb | Enables / Disables keyboard controls **Default**: false
theme     | Dark / Light style themes **Default**: light

Variable  | Value
------------- | -------------
type			  | **Default**: application/x-shockwave-flash
class			  | **Default**: youtube
width			  | **Default**: 624
height			  | **Default**: 369
allowfullscreen   | **Default**: true
allowscriptaccess | **Default**: always
wmode			  | **Default**: transparent