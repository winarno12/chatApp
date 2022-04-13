<?php

namespace App\Controllers;

use App\Models\usersModel;
use CodeIgniter\Cookie\CookieStore;
use Config\Cookie;
use DateTime;
use DateTimeZone;

class Auth extends BaseController
{
    public function __construct()
    {
        $this->userModel = new usersModel();
        helper('cookie');
    }
    public function index()
    {
        return view('auth/login');
    }
    public function login()
    {
        $this->response->setCookie('login', 'login', 60);
        $data = [
            'email'      => $this->request->getVar('email'),
            'password'   => md5($this->request->getVar('password'))
        ];
        $result = $this->userModel->where('email', $data['email'])->first();
        // dd($result['password']);
        if ($result) {
            if ($result['password'] == $data['password']) {
                $data = [
                    'id_user' => $result['id_user'],
                    'remember_me' => $this->request->getVar('remember_me')
                ];
                session()->set($data);
                if ($this->request->getVar('remember_me')) {
                }
                return redirect()->to('profile');
            } else {
                session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
               Wrong Password!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
                return redirect()->to('/');
            }
        } else {
            session()->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Your Email Is Not Regiter !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            return redirect()->to('/');
        }
    }

    public function registerAcount()
    {
        session();
        $data = [
            'validation' => \config\Services::validation()
        ];
        return view('auth/register', $data);
    }
    public function saveRegister()
    {
        if (!$this->validate(
            [
                'username' => [
                    'rules' => 'required|is_unique[users.username]',
                    'errors' => [
                        'required' => '{field} Is Not Empty !',
                        'is_unique' => '{field} Has Been Register',
                    ]
                ],
                'email' => [
                    'rules' => 'required|is_unique[users.email]|valid_emails',
                    'errors' => [
                        'required' => '{field} Is Not Empty !',
                        'is_unique' => '{field} Has Been Register',
                        'valid_emails' => '{field} Is Not Valid'
                    ]
                ],
                'password' => [
                    'rules' => 'required|max_length[8]|min_length[8]|matches[confirm_password]',
                    'errors' => [
                        'required' => '{field} Is Not Empty !',
                        'max_length' => '{field} To Long',
                        'min_length' => '{field} To Short',
                        'matches' => '{field} Not Matches'
                    ]
                ],

            ],

        )) {
            return  redirect()->to('auth/registerAcount')->withInput();
        } else {

            $profile = $this->request->getFile('profile');
            if ($profile->getError() == 4) {
                $profile_name = 'profile.svg';
            } else {
                $profile_name = $profile->getRandomName();
                $profile->move('img/user', $profile_name);
            }

            $this->userModel->save(
                $data = [
                    'uniq_id'   => md5(rand()),
                    'username'  => $this->request->getVar('username'),
                    'email'     => $this->request->getVar('email'),
                    'password'  => md5($this->request->getVar('password')),
                    'about'     => $this->request->getVar('about'),
                    'image'     => $profile_name

                ]
            );
            session()->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Your Account Success To Created !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>');
            return  redirect()->to('/');
        }
    }
    public function logout()
    {
        session()->destroy();
    }

    public function setCookie()
    {
        $cookie = new Cookie(
            'remember_token',
            'f699c7fd18a8e082d0228932f3acd40e1ef5ef92efcedda32842a211d62f0aa6',
            [
                'expires'  => new DateTime('2025-02-14 00:00:00', new DateTimeZone('UTC')),
                'prefix'   => '__Secure-',
                'path'     => '/',
                'domain'   => '',
                'secure'   => true,
                'httponly' => true,
                'raw'      => false,
            ]
        );
    }
    public function getCookie()
    {
        dd(cookies()->get('remember_token'));
    }
}
