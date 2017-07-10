<?php

namespace App\Admin\Controllers;

use App\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class UserController extends Controller {

    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index() {
        return Admin::content(function (Content $content) {

                    $content->header('Users');
                    $content->description('You can manager user table in this page.');

                    $content->body($this->grid());
                });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id) {
        return Admin::content(function (Content $content) use ($id) {

                    $content->header('Edit User');
                    $content->description('Please fill the below fields and click \"Submit\" button.');

                    $content->body($this->form()->edit($id));
                });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create() {
        return Admin::content(function (Content $content) {

                    $content->header('New User');
                    $content->description('Please fill the below fields and click \"Submit\" button.');

                    $content->body($this->form());
                });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid() {
        return Admin::grid(User::class, function (Grid $grid) {
                    $grid->actions(function ($actions) {
                        $actions->disableDelete();
                    });
                    
                    $grid->id('ID')->sortable();
                                        
                    $grid->column('Full Name')->display(function() {
                        return $this->firstname . ' ' . $this->lastname;
                    });
                    
                    $grid->email('E-mail')->sortable();
                    
                    $grid->paginate(20);
                    
                    $grid->created_at();
                    $grid->updated_at();
                                        
                    $grid->filter(function($filter) {
                        $filter->useModal();
                        $filter->disableIdFilter();
                
                        $filter->like('firstname', 'First Name');
                        $filter->like('lastname', 'Last Name');
                        $filter->is('email', 'E-mail');
                        $filter->between('created_at', 'Created Time')->datetime();
                        $filter->between('updated_at', 'Updated Time')->datetime();
                    });
                });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form() {
        return Admin::form(User::class, function (Form $form) {
                    $form->display('id', 'ID');
                    
                    $form->text('firstname', 'First Name')->rules('required|min:3');
                    $form->text('lastname', 'Last Name')->rules('required|min:3');
                    $form->text('email', 'E-mail')->rules('required|email');
                    
                    $form->display('created_at', 'Created At');
                    $form->display('updated_at', 'Updated At');
                });
    }

}
