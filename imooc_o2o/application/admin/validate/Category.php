<?php
//命名空间
namespace app\admin\validate;

//使用think自带的Validate
use think\Validate;

//创建类Category,继承公共的Validate
class Category extends Validate
{

    //['传递过来的参数','限制的条件','如果限制条件不成立弹出']
    protected $_rule = [
        //name传递的必须要有require,也就是不能为空,max:10表示必须为长度不能超过10个字符串
        ['name', 'require|max:10', '名字不能为空|字符串不能超过10个长度'],
        //parent_id必须为数字number
        ['parent_id', 'number'],
        ['id', 'number'],
        //status(状态)参数传过来的必须是数字number,同时in:-1,0,1表示值为0 -1 和 1这三个
        ['status', 'number|in:-1,0,1', '状态必须是数字|状态范围不合法'],
        //listorder(排序)
        ['listorder', 'number'],
    ];
    //场景设置, 必须add模块中只使用 name 和parent_id两个参数
    protected $_scene = [
        'add' => ['name', 'parent_id'], //添加功能
         'listorder' => ['id', 'listorder'], //排序
    ];
}
