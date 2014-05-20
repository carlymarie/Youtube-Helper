CakePHP 2.x Youtube Helper
======================
### Thumbnail Usage
```php
<?=$this->Youtube->thumbnail(URL_OR_VIDEO_ID, $size, $htmlHelperOptions);
```

### Video Usage
```php
<?=$this->Youtube->video(URL_OR_VIDEO_ID, $url_params, $iframe_params);
```

### Thumbnail Sizes
Size  | Output
------------- | -------------
thumb	 | 120px x 90px
large	 | 480px x 360px
offset25 | 120px x 90px at position 25%
offset50 | 120px x 90px at position 50%
offset75 | 120px x 90px at position 75%
**Note**: If no size is specified then thumb will be used.

### Video URL Parameters
Setting | Value
------------- | -------------
fs          | **Default**: true, Enables / Disables fullscreen playback
rel         | **Default**: false, Enables / Disables related videos at the end of the video
loop        | **Default**: false, Loops video once its finished
start       | **Default**: 0, Start the video at X seconds
version     | **Default**: 3, For chromeless player set version to 3
autoplay    | **Default**: false, Automatically starts video when page is loaded
autohide    | **Default**: false, Automatically hides controls once the video begins
controls    | **Default**: true, Enables / Disables player controls (Chromeless Only)
showinfo    | **Default**: false, Enables / Disables information like the title before the video starts playing
disablekb   | **Default**: false, Enables / Disables keyboard controls
theme       | **Default**: light, Dark / Light style themes
enablejsapi | **Default**: 0, Enables / Disables the Javascript API

### iFrame Parameters
Variable  | Value
------------- | -------------
type 	    | **Default**: text/html
class	    | **Default**: youtube
width   	| **Default**: 624
height    	| **Default**: 369
origin      | **Default**: Your Domain
frameborder | **Default**: 0