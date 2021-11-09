<?php

class PremiumMember extends Member
{
    private $_inDoorInterests;
    private $_outDoorInterests;

    /**
     * PremiumMember constructor.
     * @param string $fname the first name
     * @param string $lname the last name
     * @param int $age the age
     * @param string $gender the gender
     * @param string $phone the phone
     * @param array $inDoorInterests the indoor interests
     * @param array $outDoorInterests the outdoor interests
     */
    public function __construct($fname = "", $lname = "", $age = 0, $gender = "", $phone = "", $inDoorInterests = array(), $outDoorInterests = array())
    {
        parent::__construct($fname, $lname, $age, $gender, $phone);

        $this->setInDoorInterests($inDoorInterests);
        $this->setOutDoorInterests($outDoorInterests);
    }

    /** Get the indoor interests
     * @return Array the indoor interests
     */
    public function getInDoorInterests()
    {
        return $this->_inDoorInterests;
    }

    /** Set the indoor interests
     * @param Array the $inDoorInterests
     */
    public function setInDoorInterests($inDoorInterests)
    {
        $this->_inDoorInterests = $inDoorInterests;
    }

    /** Get the outdoor interests
     * @return Array the outdoor interests
     */
    public function getOutDoorInterests()
    {
        return $this->_outDoorInterests;
    }

    /** Set the outdoor interests
     * @param Array the $outDoorInterests
     */
    public function setOutDoorInterests($outDoorInterests)
    {
        $this->_outDoorInterests = $outDoorInterests;
    }

}