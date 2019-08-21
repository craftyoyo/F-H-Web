<?php
require ('controller/controller.php');
//require ('session.php');
//echo $users['firstname'];
try
{
  switch ($_GET['page'])
  {
      case 'faq':
        viewFaq();
      break;

      case 'cgu':
      vieCgu();
      break;

      case 'contact':
      viewContact();
      break;

      case 'web':
        viewWeb();
      break;

      case 'vpn':
      viewVpn();
      break;

      case 'blog':
      viewBlog();
    break;

    case 'sys':
    viewSysadmin();
  break;

  case 'web':
  viewWeb();
break;

      case 'apropos':
        viewApropos();
      break;

      default:
        viewIndex();
        break;
  }
}
catch(Exception $e)
{
    $messageError = $e->getMessage();
    //echo $messageError;
    require('view/error.php');
    require('view/template/dashboard.php');

}
