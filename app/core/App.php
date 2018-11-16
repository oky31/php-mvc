<?php


class App {
    // property ini di gunakan sebagai default route aplikasi
    protected $controller = 'home';
    protected $method = 'index';
    protected $params = [];


    public function __construct()
    {

        $url = $this->parseURL();

        // mengambil controller di URL
        if( file_exists('../app/controllers/' . $url[0] . '.php') ) {
            $this->controller = $url[0];

            // hapus home di url
            unset($url[0]);
        }

        // memangil controller berdasarkan url yang ada
        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        // memangil method yang ada di controller
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //mengambil parameter dari URL
        if( !empty($url) ) {
            $this->params = array_values($url);
        }

        // jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            // hapus tanda / di akhir url
            $url = rtrim($_GET['url'],'/');

            // bersihkan url dari karakter yang tidak penting
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // pecah url berdasarkan tanda '/' dan masukan ke dalam array
            $url = explode('/', $url);

            return $url;
        }
    }
}
