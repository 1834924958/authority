<?php
//执行对验证码的判断
function check_verify($code,$id = 1)
{
    $verify = new \Think\Verify();
    return $verify->check($code,$id);
}