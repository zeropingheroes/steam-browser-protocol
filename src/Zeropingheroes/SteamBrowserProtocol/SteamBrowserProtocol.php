<?php namespace Zeropingheroes\SteamBrowserProtocol;

class SteamBrowserProtocol
{

	private $protocol = 'steam://';
	private $statuses = array(
		'away',
		'busy',
		'offline',
		'online',
		'trade',
		'play'
	);
	private $components = array(
		'activateproduct',
		'downloads',
		'friends',
		'main',
		'mymedia',
		'news',
		'tools',
		'screenshots',
		'servers',
		'settings',
		'games',
		'largegameslist',
		'minigameslist',												
	);
	private $settingsSections = array(
		'account',
		'friends',
		'interface',
		'ingame',
		'downloads',
		'voice',
	);
	private $steamPages = array(
		'CommentNotifications',
		'CommunityHome',
		'CommunityFriendsThatPlay',	// app id
		'CommunityGroupSearch',		// search term
		'LegalInformation',
		'PrivacyPolicy',
		'SSA',
		'SteamIDAchievementsPage',	// app id
		'SteamIDControlPage',
		'SteamIDEditPage',
		'SteamIDPage',				// steam id
		'SteamWorkshop',
		'SteamGreenlight',
		'StoreAccount',
		'StoreFrontPage',
	);
	
	/**
	 * Generates a link to open the "add non-steam game" dialogue
	 * @return string
	 */
	public function addNonSteamGame()
	{
		return $this->protocol.'AddNonSteamGame';
	}

	/** 
	 * Generates a link to open up the store for the specified app
	 * @param  string   $appId  App ID
	 * @return string
	 */
	public function viewAppInStore($appId)
	{
		return $this->protocol.'store/'.$appId;
	}

	/** 
	 * Generates a link to open up the news page for the specified app
	 * @param  string   $appId  App ID
	 * @return string
	 */
	public function viewAppNews($appId)
	{
		return $this->protocol.'appnews/'.$appId;
	}

	/** 
	 * Generates a link to open the backup wizard for the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function backupApp($appId)
	{
		return $this->protocol.'backup/'.$appId;
	}

	/** 
	 * Generates a link to open the store page media section
	 * @return string
	 */
	public function viewStoreMedia()
	{
		return $this->protocol.'browsemedia';
	}

	/** 
	 * Generates a link to check if the computer meets the system requirements for the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function checkSystemRequirements($appId)
	{
		return $this->protocol.'checksysreqs/'.$appId;
	}

	/** 
	 * Generates a link to connecto the specified server
	 * @param  string   $address Server IP or hostname
	 * @param  array   $options Server port and password
	 * @return string
	 */
	public function connectToServer($address, $options = array())
	{
		$parameters = NULL;

		if ( array_key_exists('port', $options) )
		{
			$parameters = ':'.$options['port'];
		}
		if ( array_key_exists('password', $options) )
		{
			$parameters .= '/'.$options['password'];
		}		
		return $this->protocol.'connect/'.$address.$parameters;
	}

	/** 
	 * Generates a link to defrag the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function defragApp($appId)
	{
		return $this->protocol.'defrag/'.$appId;
	}

	/**
	 * Generates a link to add the specified user as a friend
	 * @param  string   $steamId  Steam ID
	 * @return string
	 */
	public function addFriend($steamId)
	{
		return $this->protocol.'friends/add/'.$steamId;
	}

	/**
	 * Generates a link to open a chat with the specified user (must be on friends list)
	 * @param  string   $id  Steam ID
	 * @return string
	 */
	public function messageFriend($steamId)
	{
		return $this->protocol.'friends/message/'.$steamId;
	}

	/** 
	 * Generates a link to view a list of users recently played with
	 * @return string
	 */
	public function openRecentlyPlayedWith()
	{
		return $this->protocol.'friends/players';
	}

	/** 
	 * Generates a link to toggle hiding of offline friends
	 * @return string
	 */
	public function toggleHideOfflineFriends()
	{
		return $this->protocol.'friends/settings/hideoffline';
	}

	/** 
	 * Generates a link to toggle hiding of friend avatars
	 * @return string
	 */
	public function toggleHideAvatars()
	{
		return $this->protocol.'friends/settings/showavatars';
	}


	/** 
	 * Generates a link to toggle sorting of friends by name
	 * @return string
	 */
	public function toggleSortFriendsByName()
	{
		return $this->protocol.'friends/settings/sortbyname';
	}

	/** 
	 * Generates a link to set the user's status to the specified option
	 * @param  string   $status Status
	 * @return string
	 */
	public function setStatus($status)
	{
		if( in_array($status, $this->statuses) )
		{
			return $this->protocol.'friends/status/'.$status;
		}
	}

	/** 
	 * Generates a link to open the user's gift inventory
	 * @return string
	 */
	public function openGiftInventory()
	{
		return $this->protocol.'guestpasses';
	}

	/** 
	 * Generates a link to install the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function installApp($appId)
	{
		return $this->protocol.'install/'.$appId;
	}

	/** 
	 * Generates a link to navigate to the specified component and bring Steam to the foreground
	 * @param  string   $component Component
	 * @return string
	 */
	public function openComponent($component)
	{
		if( in_array($component, $this->components) )
		{
			return $this->protocol.'open/'.$component;
		}
	}
												
	/** 
	 * Generates a link to open the specified link
	 * @param  string   $url URL
	 * @return string
	 */
	public function openUrl($url)
	{
		return $this->protocol.'openurl/'.$url;
	}

	/** 
	 * Generates a link to preload the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function preloadApp($appId)
	{
		return $this->protocol.'preload/'.$appId;
	}

	/** 
	 * Generates a link to view the specified publisher in the Steam store
	 * @param  string   $publisher Publisher
	 * @return string
	 */
	public function viewPublisherInStore($publisher)
	{
		return $this->protocol.'publisher/'.$publisher;
	}

	/** 
	 * Generates a link to purchase the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function purchaseApp($appId)
	{
		return $this->protocol.'purchase/'.$appId;
	}


	/** 
	 * Generates a link to launch the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function launchApp($appId)
	{
		return $this->protocol.'run/'.$appId;
	}

	/** 
	 * Generates a link to open Steam's settings page
	 * @param  string   $section Section
	 * @return string
	 */
	public function openSettings($section = NULL)
	{
		if( in_array($section, $this->settingsSections) OR $section == NULL )
		{
			return $this->protocol.'settings/'.$section;
		}
	}

	/** 
	 * Generates a link to uninstall the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function uninstallApp($appId)
	{
		return $this->protocol.'uninstall/'.$appId;
	}

	/** 
	 * Generates a link to validate the specified app
	 * @param  string   $appId App ID
	 * @return string
	 */
	public function validateApp($appId)
	{
		return $this->protocol.'validate/'.$appId;
	}

	/** 
	 * Generates a link to open the specified named page
	 * @param  string   $page Page
	 * @param  array   $parameter Additional parameter
	 * @return string
	 */
	public function openSteamPage($page, $parameter = NULL)
	{
		if( in_array($page, $this->steamPages) )
		{
			return $this->protocol.'url/'.$page.'/'.$parameter;
		}
	}

}