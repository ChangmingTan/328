<?php

/**
 * Class Controller
 */
class Controller
{
    private $_f3; //router
    private $_validator; //validation object

    /**
     * Controller constructor.
     * @param $f3
     * @param $validator
     */
    public function __construct($f3, $validator)
    {
        $this->_f3 = $f3;
        $this->_validator = $validator;
    }

    /**
     * Display the default route
     */
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * Process the personal information route
     */
    public function pinfo()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            //Validate the data
            if (!$this->_validator->validName($_POST['fname'])) {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["fname"]', "Invalid first name");
            }

            if (!$this->_validator->validName($_POST['lname'])) {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["lname"]', "Invalid last name");
            }

            if (!$this->_validator->validAge($_POST['age'])) {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["age"]', "Invalid age range, should be between 18 and 118");
            }

            if (!$this->_validator->validPhone($_POST['phone'])) {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["phone"]', "A valid phone number contains numbers between 0 and 9, 10 digits, with no punctuation");
            }
            //Data is valid
            if (empty($this->_f3->get('errors'))) {

                //Create a personal information object
                if (isset($_POST['premium'])) {
                    $premium = new PremiumMember();
                    $premium->setFname($_POST['fname']);
                    $premium->setLname($_POST['lname']);
                    $premium->setAge($_POST['age']);
                    $premium->setGender($_POST['gender']);
                    $premium->setPhone($_POST['phone']);

                    //Store the object in the session array
                    $_SESSION['pInfo'] = $premium;
                } else {
                    $nonPremium = new Member();
                    $nonPremium->setFname($_POST['fname']);
                    $nonPremium->setLname($_POST['lname']);
                    $nonPremium->setAge($_POST['age']);
                    $nonPremium->setGender($_POST['gender']);
                    $nonPremium->setPhone($_POST['phone']);

                    //Store the object in the session array
                    $_SESSION['pInfo'] = $nonPremium;
                }

                //Redirect to profile page
                $this->_f3->reroute('profile');
            }
        }

        $this->_f3->set('fname', $_POST['fname']);
        $this->_f3->set('lname', $_POST['lname']);
        $this->_f3->set('age', $_POST['age']);
        $this->_f3->set('genders', getGender());
        $this->_f3->set('selectedGender', $_POST['gender']);
        $this->_f3->set('phone', $_POST['phone']);
        $this->_f3->set('premium', $_POST['premium']);

        $view = new Template();
        echo $view->render('views/pinfo.html');
    }

    /**
     * Process the profile route
     */
    public function profile()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            //Validate the data
            if (!$this->_validator->validEmail($_POST['email'])) {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["email"]', "Invalid email address");
            }

            if ($_POST['state'] == '---Please Select---') {
                //Set an error variable in the F3 hive
                $this->_f3->set('errors["state"]', "Please select your state");
            }

            //Data is valid
            if (empty($this->_f3->get('errors'))) {

                //Add the data to the object in the session array
                $_SESSION['pInfo']->setEmail($_POST['email']);
                $_SESSION['pInfo']->setState($_POST['state']);
                $_SESSION['pInfo']->setSeeking($_POST['sex']);
                $_SESSION['pInfo']->setBio($_POST['biography']);

                if ($_SESSION['pInfo'] instanceof PremiumMember) {
                    //Redirect to Interests page, only Premium members will see the Interests screen
                    $this->_f3->reroute('interests');
                } else {
                    //Redirect to Interests page, non-premium members will not see the Interests screen
                    $this->_f3->reroute('summary');
                }
            }
        }

        $this->_f3->set('email', $_POST['email']);
        $this->_f3->set('states', getStates());
        $this->_f3->set('selectedState', $_POST['state']);
        $this->_f3->set('sexes', getSex());
        $this->_f3->set('selectedSex', $_POST['sex']);
        $this->_f3->set('biography', $_POST['biography']);

        $view = new Template();
        echo $view->render('views/profile.html');
    }

    /**
     * Process the interests route
     */
    public function interests()
    {
        //If the form has been submitted
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //var_dump($_POST);

            $indoors = $_POST['indoor'];
            $outdoors = $_POST['outdoor'];

            //Validate the data
            if (isset($indoors)) {
                foreach ($indoors as $indoor) {

                    $this->_f3->set('selectedIndoor', $indoor);

                    if (!$this->_validator->validIndoor($indoor)) {

                        //Set an error variable in the F3 hive
                        $this->_f3->set('errors["indoor"]', "Invalid indoor interest");
                    }
                }
            }

            if (isset($outdoors)) {
                foreach ($outdoors as $outdoor) {

                    $this->_f3->set('selectedOutdoor', $outdoor);

                    if (!$this->_validator->validOutdoor($outdoor)) {

                        //Set an error variable in the F3 hive
                        $this->_f3->set('errors["outdoor"]', "Invalid outdoor interest");
                    }
                }
            }

            //Data is valid
            if (empty($this->_f3->get('errors'))) {

                //Add the data to the object in the session array
                $_SESSION['pInfo']->setInDoorInterests($indoors);
                $_SESSION['pInfo']->setOutDoorInterests($outdoors);

                //Redirect to Summary page
                $this->_f3->reroute('summary');
            }
        }

        $this->_f3->set('indoors', getIndoor());
        $this->_f3->set('outdoors', getOutdoor());

        $view = new Template();
        echo $view->render('views/interests.html');
    }

    /**
     * Process the summary route
     */
    public function summary()
    {
        $view = new Template();
        echo $view->render('views/summary.html');

        session_destroy();
    }
}