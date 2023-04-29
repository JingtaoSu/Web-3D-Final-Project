<?php
class Controller
{
    public $load;
    public $model;

    // contructor of Controller
    function __construct($pageURL = null)
    {
        // create load and model objects
        $this->load = new Load();
        $this->model = new Model();

        $this->$pageURL();
    }

    // the home view
    function home()
    {
        // fetch data by model3D_info method
        $data = $this->model->fetchPageTextData();
        // bind the data to view
        $this->load->view('ikea', $data);
    }
}

?>