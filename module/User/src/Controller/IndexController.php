<?php
<<<<<<< HEAD

namespace User\Controller;

use Exception;
use User\Form\NewPassword;
use User\Form\UserForm;
use User\Model\UserTable;
use Zend\View\Model\ViewModel;
use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    private $userForm;
    private $userTable;

    public function __construct(UserForm $userForm, UserTable $userTable)
    {
        $this->userForm = $userForm;
        $this->userTable = $userTable;
    }

    public function registerAction()
    {
        $this->layout()->setTemplate('user/layout/layout');

        if ($this->getRequest()->isPost()) {
            $this->userForm->setData($this->getRequest()->getPost());
            if ($this->userForm->isValid()) {
                $data = $this->userForm->getData();
                try {
                    $user = $this->userTable->save($data);

                    $this->getEventManager()->trigger(
                        __FUNCTION__.'.post',
                        $this,
                        ['data' => $user]
                    );

                    $this->flashMessenger()->addSuccessMessage(
                        sprintf('Confirme seu registro no email "%s"', $data['email'])
                    );

                } catch (Exception $exception) {
                    $this->flashMessenger()->addErrorMessage($exception->getMessage());
                }

                return $this->redirect()->refresh();
            }
        }

        return new ViewModel([
            'form' => $this->userForm->prepare()
        ]);
    }

    public function recoveredPasswordAction()
    {
        $this->layout()->setTemplate('user/layout/layout');
        $form = new NewPassword();

        if ($this->getRequest()->isPost()) {
            $form->setData($this->getRequest()->getPost());

            if ($form->isValid()) {
                $email = $form->getData()['email'];

                $this->getEventManager()->trigger(
                    __FUNCTION__.'.post',
                    $this,
                    ['data' => $email]
                );



                $this->flashMessenger()->addSuccessMessage(
                    'Confirme sua solicitação no email informado'
                );

                return $this->redirect()->refresh();
            }
        }

        return new ViewModel([
            'form' => $form->prepare()
        ]);
    }

    public function newPasswordAction()
    {
        try {
            $token = $this->params()->fromRoute('token');

            $user = $this->userTable->getUserByToken($token);

            $this->layout()->setTemplate('user/layout/layout');

            if ($this->getRequest()->isPost()) {
                $this->userForm->setValidationGroup(['password', 'verifypassword']);
                $this->userForm->setData($this->getRequest()->getPost());

                if ($this->userForm->isValid()) {
                    $password = $this->userForm->getData()['password'];

                    try {
                        $this->userTable->save([
                            'id' => $user->id,
                            'password' => $password
                        ]);

                        $this->flashMessenger()->addSuccessMessage(
                            'Senha alterada com sucesso!'
                        );

                        return $this->redirect()->toRoute('auth.login');
                    } catch (Exception $exception) {
                        $this->flashMessenger()->addErrorMessage($exception->getMessage());
                        return $this->redirect()->refresh();
                    }
                }
            }

            return new ViewModel([
                'form' => $this->userForm->prepare()
            ]);
        } catch (Exception $exception) {
            $this->flashMessenger()->addErrorMessage($exception->getMessage());
            return $this->redirect()->toRoute('auth.login');
        }
    }

    public function confirmedEmailAction()
    {
        $token = $this->params()->fromRoute('token', null);

        try {
            /**
             * @var $user \User\Model\User
             */
            $user = $this->userTable->getUserByToken($token);
            $this->userTable->save($user->getArrayCopy());

            $this->flashMessenger()->addSuccessMessage(
                'Conta Confirmada com sucesso!'
            );
        } catch (Exception $exception) {
            $this->flashMessenger()->addErrorMessage($exception->getMessage());
        }

        return $this->redirect()->toRoute('auth.login');
=======
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function registerAction()
    {
        return new ViewModel();
    }
    public function recoveryPasswordAction()
    {
        return new ViewModel();
    }
    public function newPasswordAction()
    {
        return new ViewModel();
    }
    public function confirmedEmailAction()
    {
        return new ViewModel();
>>>>>>> 48b67e3960daee9a36298dac84c713c21d8817a2
    }
}
