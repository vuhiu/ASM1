<?php
require './commons/ev.php';
require './commons/connect.php';

require './controller/PhoneControll.php';
require './models/phone.php';

$act = isset($_GET['act']) ? $_GET['act'] : '/';

switch ($act) {
    case '/':
        echo "Home";
        break;
    case 'list':
        (new PhoneControl())->getList();
        break;
    case 'detail':
        (new PhoneControl())->getDetail();
        break;
    case 'create':
        (new PhoneControl())->create();
        break;
    case 'edit':
        (new PhoneControl())->edit();
        break;
    case 'delete':
        (new PhoneControl())->delete();
        break;
    default:
        echo "Router không hợp lệ";
        break;
}
