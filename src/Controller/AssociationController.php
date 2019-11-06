<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace App\Controller;

use App\Model\AssociationManager;

/**
 * Class AssociationController
 *
 */
class AssociationController extends AbstractController
{


    /**
     * Display association listing
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        $associationManager = new AssociationManager();
        $associations = $associationManager->selectAll();

        return $this->twig->render('Association/index.html.twig', ['associations' => $associations]);
    }

}
