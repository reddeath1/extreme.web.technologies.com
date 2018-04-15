<?php

include_once 'Configs/DBConnection.php';

class AppController extends DBConnection{

    /**
     * Controller constructor.
     */

    public function __construct()
    {
        parent::__construct();
    }

    /**
     *
     */
    public function AppProcessor(){
        $this->query_strings();
    }

    /**
     *
     */
    private function query_strings(){
        if (isset($_GET['action']) && !empty($_GET['action'])){
            $q = preg_replace("#[^a-zA-Z0-9]#",'',$_GET['action']);
            try {
               $this->display($q . '.tpl');

            } catch (SmartyException $e) {
                die ('Method is not allowed!!');
            } catch (Exception $e) {
                die ('Method is not allowed!!');
            }
        }else{
            try {
                $this->display('index.tpl');
            } catch (SmartyException $e) {
                die($e->getMessage());
            } catch (Exception $e) {
                die($e->getMessage());
            }
        }
    }

    /**
     * @param string $title
     */
    public function setTitle($title = ''){
        if(!empty($title)){
            $title = $title;
        }
        $this->assign('title',$title);
    }

    /**
     * @param string $data
     * @param string $name
     */
    public function setData($name = '',$data = ''){
        $this->assign($name,$data);
    }

    /**
     * @return string
     */
    public function Url(){
        $page_url   = 'http';
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on'){
            $page_url .= 's';
        }

        $name = $page_url.'://'.$_SERVER['SERVER_NAME'];

        if(strpos($name, 'localhost')
            || strpos($name, '192.168.42.1')){
            $name = $name.'/Smarty-Angular-Project';
        }

        return $name;
    }

}