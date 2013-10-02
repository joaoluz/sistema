<?php

namespace Modules\LayoutBundle\Controller;

use abstraction\controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/login")
 */
class LoginController extends AbstractController
{
    /**
     * @Route("/logar", name="logar")
     */
    public function logarAction()
    {
        $params = $this->getAllParams();
        var_dump($params);die;
        $loginBusiness = $this->get("ModulesLogin.LoginBusiness");
        $loginBusiness->logar($params);
        return array();
    }

    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}