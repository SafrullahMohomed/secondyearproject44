<?php
class JobSeekerHome extends Controller
{
    function __construct()
    {
      parent:: __construct();

    }

    function JobSeekerHome()
    {
        #$this->model->printSomething();
        #echo "Hello from the Test controller - Index Method";

        //pass view name
        $this->view ->render('JobSeekerHome'); 
        
    }
}