<?php

/**
 * Class Member
 */
class Member
{
    //Declare instance variables
    private $_fname;
    private $_lname;
    private $_age;
    private $_gender;
    private $_phone;
    private $_email;
    private $_state;
    private $_seeking;
    private $_bio;


    /**
     * Member constructor.
     * @param string $fname the first name
     * @param string $lname the last name
     * @param int $age the age
     * @param string $gender the gender
     * @param string $phone the phone
     */
    public function __construct($fname = "", $lname = "", $age = 0, $gender = "", $phone = "")
    {
        $this->setFname($fname);
        $this->setLname($lname);
        $this->setAge($age);
        $this->setGender($gender);
        $this->setPhone($phone);
    }

    /** Get the fname
     * @return String the fname
     */
    public function getFname()
    {
        return $this->_fname;
    }

    /** Set the fname
     * @param String the $fname
     */
    public function setFname($fname)
    {
        $this->_fname = $fname;
    }

    /** Get the lname
     * @return String the lname
     */
    public function getLname()
    {
        return $this->_lname;
    }

    /** Set the lname
     * @param String the lname
     */
    public function setLname($lname)
    {
        $this->_lname = $lname;
    }


    /** Get the age
     * @return int the age
     */
    public function getAge()
    {
        return $this->_age;
    }

    /** Set the age
     * @param int the $age
     */
    public function setAge($age)
    {
        $this->_age = $age;
    }


    /** Get the gender
     * @return String the gender
     */
    public function getGender()
    {
        return $this->_gender;
    }

    /** Set the gender
     * @param String the $gender
     */
    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    /** Get the phone
     * @return String the phone
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /** Set the phone
     * @param String the $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }

    /** Get the email
     * @return String the email
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /** Set the email
     * @param String the $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /** Get the state
     * @return String the state
     */
    public function getState()
    {
        return $this->_state;
    }

    /** Set the state
     * @param String the $state
     */
    public function setState($state)
    {
        $this->_state = $state;
    }

    /** Get the seeking
     * @return String the seeking
     */
    public function getSeeking()
    {
        return $this->_seeking;
    }

    /** Set the seeking
     * @param String the $seeking
     */
    public function setSeeking($seeking)
    {
        $this->_seeking = $seeking;
    }

    /** Get the bio
     * @return String the bio
     */
    public function getBio()
    {
        return $this->_bio;
    }

    /** Set the bio
     * @param String the $bio
     */
    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

}