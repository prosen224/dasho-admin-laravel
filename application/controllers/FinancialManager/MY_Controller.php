class MY_Controller extends CI_Controller {

    <!--public $CI = NULL;-->

    public function __construct() {
        parent::__construct();
        $this->CI = & get_instance();
    }

    public function getUserName($userid) 
    {
    
    $userName = $this->QueryBuilder_model->get_info('members','user_name',array('user_id ="' .$userid.'"'));	
    return $userName->user_name;
    
    
    }

}