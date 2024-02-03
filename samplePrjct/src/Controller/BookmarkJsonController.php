<?php
declare(strict_types=1);
namespace App\Controller;
use Cake\Controller\Controller;
use Cake\ORM\TableRegistry;

/**
 * Bookmark　テーブルからフロントへJsonを返すコントローラー
 */
class BookmarkJsonController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function getSampleJson()
    {
        //loadModelはcakephp４．３以降は非推奨らしい
        //$this->loadModel('Bookmark'); //Bookmarkテーブルをロード？
        //$this = TableRegistry::getTableLocator()->get('Bookmark');
        $this->fetchTable('Bookmark');

        $samples = $this->Samples->find();
        $this->viewBuilder()->setClassName('Json');
        $this->set('samples', $samples);
        $this->set('_serialize', ['samples']);
    }


}