<?php

include_once(ROOT.'Models/Domaine/Article.php');
include_once(ROOT.'Models/Domaine/Category.php');
include_once(ROOT.'Models/DAO/ArticleService.php');
include_once(ROOT.'Models/DAO/CategoryService.php');

class Controller{

  private $vars = array();

  public function index()
  {
    $d = array();
    $service = new ArticleService();
    $d['lastArticle'] = $service->getLastArticle();
    $service = new CategoryService();
    $d['categories'] = $service->getAllCategory();
    $this->setVariables($d);
    $this->render('index');
  }

  public function article($id)
  {
      $d = array();
      $service = new ArticleService();
      $d['articles'] = $service->getArticleByCategoryId($id);
      $service = new CategoryService();
      $d['categories'] = $service->getAllCategory();
      $this->setVariables($d);
      $this->render('article');
  }

  public function post($id)
  {
    $d = array();
    $service = new ArticleService();
    $d['article'] = $service->getArticleById($id);
    $service = new CategoryService();
    $d['categories'] = $service->getAllCategory();
    $this->setVariables($d);
    $this->render('post');
  }

  public function setVariables($variables)
  {
      $this->vars = array_merge($this->vars,$variables);
  }

  public function render($fileName)
  {
    extract($this->vars);
    include_once(ROOT.'Views/'.$fileName.'.php');
  }

}
