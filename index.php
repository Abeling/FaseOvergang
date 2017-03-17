<?php

// Get username, password from database
include 'includes/config.php';
// Load Smarty library
require 'libs/Smarty.class.php';
// Initialize
include 'includes/bootstrap.php';
// Make database connection
include 'includes/database.php';

include 'includes/fties.php';

// Assign value of page title to the smarty variable 'title', usually the value comes from a database
$templateParser->assign('title', 'Fase overgang');

// Display template: output html
$templateParser->display('head.tpl');

$action = isset($_GET['action'])?$_GET['action']:'home';
$templateParser->assign('pageding', $action);
$templateParser->display('views/header.tpl');
switch ($action) {

    case 'home':
        $page_nr = isset($_GET['pagenr'])?$_GET['pagenr']:1;
        // Get slideshow
        include('model/select_last3_banners.php');
        $templateParser->assign('bannerResult', $bannerResult);
        $templateParser->display('views/slideshow.tpl');
        // Automate pagination
        include('model/get_nr_items_livesets.php');
        $nr_of_pages = ceil($total_nr_livesets/ITEMS_PER_PAGE);
        $templateParser->assign('nr_pages', $nr_of_pages);
        // Get livesets from database
        include('model/select_all_livesets.php');
        $templateParser->assign('result', $result);
        $templateParser->display('views/home.tpl');
        break;

    case 'admin';
      $cms_action = isset($_GET['cms_action'])?$_GET['cms_action']:'adminhome';
      $templateParser->assign('pagedinges', $_GET['cms_action']);
      $templateParser->display('adminheader.tpl');
      switch($cms_action) {
        case 'adminhome':

          break;

        case 'shownewsarticles':
          // Show all items
          include('model/select_all_livesets.php');
//          $templateParser->assign('result', $result);
          $templateParser->display('show_newsarticles.tpl');
          break;

        case 'editnewsarticles':
          // Edit items
          $id = $_GET['id'];
          include 'model/select_one_newsarticles.php';
//          $templateParser->assign('result', $result);
          $templateParser->display('edit_newsarticles.tpl');
          break;

        case 'deletenewsarticles':
          // Call delete model
          $id = isset($_GET['id'])?$_GET['id']:0;
          include('model/delete_item_newsarticles.php');
          header("Location: http://localhost/jaar2/project/framework/?action=admin&cms_action=shownewsarticles");
          break;

        case 'insertnewsarticles':
          // Insert items
          $templateParser->display('insert_newsarticles.tpl');
          break;
      }
      // Go to CMS
      break;

}
$templateParser->display('views/footer.tpl');
