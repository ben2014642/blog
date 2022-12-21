<?php

class Helper
{
    public $db = '';
    public function __construct()
    {
        $this->db = new DB();
    }
    public function base_url($url = '')
    {
        $a = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"];
        if ($a == 'http://localhost') {
            $a = 'http://localhost';
        }

        return $a . '/' . $url;
    }

    public function getListCategoriesByPost($id)
    {
        $sql = "SELECT * FROM b_cate_of_post c JOIN b_categories d ON c.category_id = d.id_cate WHERE c.post_id = $id";
        return $this->db->getList($sql);
    }

    // lấy danh sách và số lần category đã sử dụng
    public function getListCategoriesUsed()
    {
        $sql = "SELECT d.title,count(*) as total FROM b_cate_of_post c JOIN b_categories d ON c.category_id = d.id_cate
                GROUP BY d.title";
        return $this->db->getList($sql);
    }

    public function convertCategoriesToString($arrCate)
    {
        $html = '';
        foreach ($arrCate as $item) {
            $html .= '<a href="">' . $item['title'] . '</a>, ';
        }

        return $html;
    }

    public function getAuthor($author_id)
    {

    }

    public function getRandomRow($table,$limit = 3)
    {
        $sql = "SELECT * FROM $table 
                ORDER BY RAND()
                LIMIT $limit";
        return $this->db->getList($sql);
    }

}