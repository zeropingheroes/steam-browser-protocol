<?php namespace Zeropingheroes\SteamBrowserProtocol;

class SteamBrowserProtocol
{

	private $protocol = 'steam://';

	/**
	 * @param  string   $id  Steam ID
	 * @return string
	 */
	public function getAddFriendLink($id)
	{
		return $this->protocol.'friends/add/'.$id;
	}

	/**
	 * @param  string   $id  Steam ID
	 * @return string
	 */
	public function getSendMessageLink($id)
	{
		return $this->protocol.'friends/joinchat/'.$id;
	}

	// More to come

}