<?php
	App::uses('HtmlHelper', 'View/Helper');
	class YoutubeHelper extends HtmlHelper {

		// An array of Youtube API's this helper will use
		private $_apis = array(
			'image'       => 'http://i.ytimg.com/vi/%s/%s.jpg',   // Location of youtube images
			'player'      => 'http://www.youtube.com/embed/%s?%s' // Location of youtube player
		);

		// All these settings can be changed on the fly using the $player_variables option in the video function
		private $_player = array(
			'type'        => 'text/html', // Content type of the iframe
			'class'       => 'youtube',   // Adds CSS class to iframe
			'frameborder' => 0,           // Enables / Disables iframe border
			'width'       => 624,         // Sets player width
			'height'      => 369,         // Sets player height
			'origin'      => null         // For added security
		);

		// All these settings can be changed on the fly using the $player_settings option in the video function
		private $_url = array(
			'fs'          => true,        // Enables / Disables fullscreen playback
			'rel'         => false,       // Enables / Disables related videos at the end of the video
			'loop'        => false,       // Loops video once its finished
			'start'       => 0,           // Starts video at specific time in seconds
			'version'     => 3,           // For chromeless player set version to 3
			'autoplay'    => false,       // Automatically starts video when page is loaded
			'autohide'    => false,       // Automatically hides controls once the video begins
			'controls'    => true,        // Enables / Disables player controls (Chromeless Only)
			'showinfo'    => false,       // Enables / Disables information like the title before the video starts playing
			'disablekb'   => false,       // Enables / Disables keyboard controls
			'theme'       => 'light',     // Dark / Light style themes
			'enablejsapi' => 0            // Enables / Disables the Javascript API
		);

		// Humanized array of allowed image sizes
		private $_sizes = array(
			'thumb'       => 'default',   // 120px x 90px
			'large'       => 0,           // 480px x 360px
			'offset25'    => 1,           // 120px x 90px at position 25%
			'offset50'    => 2,           // 120px x 90px at position 50%
			'offset75'    => 3            // 120px x 90px at position 75%
		);

		// Outputs Youtube video image
		public function thumbnail($url, $size = 'thumb', $options = array()) {

			// Gets the video ID for the image API
			$video_id = $this->__getVideoId($url);

			// Build url to image file
			$image_url = sprintf($this->_apis['image'], $video_id, (array_key_exists($size, $this->_sizes) ? $this->_sizes[$size] : 0));

			return $this->image($image_url, $options);
		}

		// Outputs embedded iframe player
		public function video($url, $url_params = array(), $player_params = array()) {

			// Gets the video ID for the player API
			$id = $this->__getVideoId($url);

			// Sets url parameters for the player if different than default
			$url_params  = array_merge($this->_url, $url_params);

			// Sets origin parameter to protect against malicious third-party JavaScript being injected into your page and hijacking control of your YouTube player
			$url_params['origin'] = str_replace(env('SCRIPT_URL'),null, env('SCRIPT_URI'));

			// Sets iframe player parameters if different than default
			$player_params = array_merge($this->_player, $player_params);

			// Sets src parameter for the video
			$player_params['src'] = sprintf($this->_apis['player'], $id, http_build_query($url_params));

			// Returns embedded iframe video
			return $this->tag('iframe', '', $player_params);
		}

		// Extracts Video ID's from a Youtube URL
		public function __getVideoId($url = null){

			parse_str(parse_url($url, PHP_URL_QUERY), $params);
			return (isset($params['v']) ? $params['v'] : $url);

		}
	}