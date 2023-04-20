<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\Locator\LocatorAwareTrait;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 * @property \App\Model\Table\ProgramsTable $Programs
 * @property \App\Model\Table\SitesTable $Sites
 * @property \App\Model\Table\ProgramTypesTable $ProgramTypes
 * @property \App\Model\Table\ProgramsSitesTable $ProgramsSites
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {


        $sites = $this->fetchTable('Sites')->find()->toArray();
        $program_types = $this->fetchTable('Programtypes')->find()->toArray();
        $programs= $this->fetchTable('Programs')->find()->toArray();
        $bridges= $this->fetchTable('ProgramsSites')->find()->toArray();
//        $query =  $this->set('programs', $this->Programs->find('all'));
//        $results = $query->all();

        $programm = $this->getTableLocator()->get('Programs');
        $query = $programm->find();





        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }

        $this->set(compact('page', 'subpage','sites','program_types','programs','query','bridges'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }



//
//    public function loadSite($programTypeId) {
//        $pr = array();
//        $siteee = array();
//        foreach ($this->Programs as $pro):
//            if($pro->program_type_id == $programTypeId){
//                $pr.array_push($pr,$pro);
//            }
//            endforeach;
//
//
//        $progType = $this->Sites->findById($programTypeId);
//        $posts = $progType['program_type_id'];
//        $sitee = $this->Programs->findById($progType);
//
//        $this->set(compact('posts'));
//    }
    public function home()
    {
//        $program = $this->Programs->get($id, [
//            'contain' => ['ProgramTypes', 'Clusters', 'Sites'],
//        ]);
//        $program = $this->Programs->find('all', [
//            'contain' => ['ProgramTypes', 'Clusters', 'Sites'],
//        ]);
//        $programm = $this->Programs->query('SELECT * FROM programs');
//        $this->set('programm', $programm);
//
//        $this->set(compact('program'));
    }


//    public function index()
//    {
//
//
//        $program = $this->Programs->find('all'); // Retrieve all articles from the database
//
//        $this->set(compact('program')); // Pass the articles data to the view
//    }
}
