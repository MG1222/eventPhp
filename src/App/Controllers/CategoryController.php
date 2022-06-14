<?php
namespace App\Controllers;

use App\Models\CategoryManager;
use Library\Core\AbstractController;

class CategoryController extends AbstractController {
    public function index(): void {
        if (empty($_POST)) {
            $this->display('category');
        } else {
            $manager = new CategoryManager();
            $manager->create($_POST['title_category']);

            header('Location: ' . url('/'));
            exit();
        }
    }
}