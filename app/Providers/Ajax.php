<?php
namespace App\Providers;

class Ajax
{
    public function __construct()
    {
        $this->add_ajax_actions();
    }
    public function add_ajax_actions()
    {
        add_action('wp_ajax_nopriv_test', array($this, 'test'));
        add_action('wp_ajax_test', array($this, 'test'));
    }
    public static function Localize()
    {
        return  [
            'admin_url' => admin_url('admin-ajax.php')
        ];
    }
    public function test()
    {
        wp_send_json('it works');
    }
};
