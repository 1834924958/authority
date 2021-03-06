<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index($username = NULL, $password = NULL, $verify = NULL)
    {
        if (IS_POST) {
            if (!check_verify($verify)){
                $this->error('验证码输入错误！');
            }
            $admin = M('Admin')->where(array('username' => $username))->find();
            if ($admin['password'] != md5($password)){
                $this->error('用户名或密码错误！');
            }else if($admin['status'] == '0'){
                $this->error('账户已冻结!');
            }else{
                session('admin_id', $admin['id']);
                session('admin_username', $admin['username']);
                session('admin_password', $admin['password']);
                $this->success('登陆成功!', U('Index/index'));
            }
        }else{

            if (session('admin_id')){
                $this->redirect('Admin/Index/index');
            }
            $this->display();
        }
    }
    //执行退出后台的操作
    public function loginout()
    {
        session(NULL);
        $this->redirect('/Admin/Login/index');
    }
}