<?php

/**
 * マイグレーションクラス
 */
class Migrate extends CI_Controller
{
    /**
     * コンストラクタ
     */
    public function __construct()
    {
        parent::__construct();

        /**
         * cliからしか実行できないようにする
         */
        if (!is_cli()) {
            show_404();
            exit;
        }

        $this->load->library('migration');
    }

    /**
     * 最新のバージョンで作成する
     *
     * @return void
     */
    public function latest()
    {
        if ($this->migration->latest() == false) {
            show_error($this->migration->error_string());
        }
    }

    /**
     * 指定したバージョンで作成する
     *
     * @param string $version
     * @return void
     */
    public function rollback(string $version)
    {
        if ($this->migration->version($version)) {
            echo "Migration success (ver: $version)";
        } else {
            show_error($this->migration->error_string());
        }
    }
}
