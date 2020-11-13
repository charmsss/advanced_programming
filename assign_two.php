<?php
class User
{
  public $Name;
  public $Username;
  public $Email;
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
  function set_username($username)
  {
    $this->username = $username;
  }
  function get_username()
  {
    return $this->username;
  }
  function set_email($email)
  {
    $this->email = $email;
  }
  function get_email()
  {
  return $this->email;
}
  function addFriend($name)
  {
  echo $name . " added a Friend <br>";
}
  function postStatus($name)
  {
  echo $name . " posted a Status <br>";
}
}
$example = new User();
$example->set_name("Charmie A. Cabanela");
$example->set_username("charmsss");
$example->set_email("cabanelacharmie24@gmail.com");
echo "Name: " . $example->get_name() . "<br>";
echo "Username: " . $example->get_username() . "<br>";
echo "Email: " . $example->get_email() . "<br>";
$example->addFriend("You");
$example->postStatus("Charmsss");
