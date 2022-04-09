<?php
namespace Red\Gravatar;

/**
 * Gravatar component
 */
class Gravatar
{
  /**
   * Generate md5 hash
   * @param string
   */
  private static function generateHash(string $email)
  {
    return md5(strtolower(trim($email)));
  }
  /**
   * Get gravatar url
   * @param string
   * @param string
   */
  public function avatar(string $email, string $default = "https://www.gravatar.com/avatar/00000000000000000000000000000000")
  {
    $hash = $this->generateHash($email);
    return "https://www.gravatar.com/avatar/$hash?d=$default"
  }
}
