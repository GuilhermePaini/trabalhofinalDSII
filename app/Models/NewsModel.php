<?php

namespace CodeIgniter\Model;

use CodeIgniter\Model;

class NewsModel extends Model
{
    // indica a tabela a ser utilizada
    protected $table = 'news';

    // indica quais atributos da tabela podem ser editados
    protected $allowedFields = ['title', 'slug', 'body'];

    public function getNews($slug = false)
    {
        
        if ($slug === false) {
            return $this->findAll();
        }
        
        return $this->where(['slug' => $slug])->first();
    }
}
