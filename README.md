CakePHP 2.x Youtube Helper
======================
Thumbnail Usage
```php
<?=$this->Youtube->thumbnail(URL_OR_VIDEO_ID, $size, $htmlHelperOptions);
```

## H2 Video Usage
```php
<?=$this->Youtube->video(URL_OR_VIDEO_ID, $settings, $variables);
```
## H2 Thumbnail Sizes
Size  | Output
------------- | -------------
thumb			  | 120px x 90px
large			  | 480px x 360px
thumb1			  | 120px x 90px at position 25%
thumb2			  | 120px x 90px at position 50%
thumb3  		  | 120px x 90px at position 75%

## H2 Video Options
Setting | value
------------- | -------------
fs        | **Default**: true, Enables / Disables fullscreen playback
hd        | **Default**: true, Enables / Disables HD playback (Chromeless player does not support this setting)
egm       | **Default**: false, Enables / Disables advanced context (Right-Click) menu
rel       | **Default**: false, Enables / Disables related videos at the end of the video
loop      | **Default**: false, Loops video once its finished
start     | **Default**: 0, Start the video at X seconds
version   | **Default**: 3, For chromeless player set version to 3
autoplay  | **Default**: false, Automatically starts video when page is loaded
autohide  | **Default**: false, Automatically hides controls once the video begins
controls  | **Default**: true, Enables / Disables player controls (Chromeless Only)
showinfo  | **Default**: false, Enables / Disables information like the title before the video starts playing
disablekb | **Default**: false, Enables / Disables keyboard controls
theme     | **Default**: light, Dark / Light style themes

## H2 Video Element Options
Variable  | Value
------------- | -------------
type			  | **Default**: application/x-shockwave-flash
class			  | **Default**: youtube
width			  | **Default**: 624
height			  | **Default**: 369
allowfullscreen   | **Default**: true
allowscriptaccess | **Default**: always
wmode			  | **Default**: transparent