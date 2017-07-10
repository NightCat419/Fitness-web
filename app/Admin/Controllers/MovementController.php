<?php

namespace App\Admin\Controllers;

use App\Movement;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class MovementController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Movement List');
            $content->description('You can manage movement list in this page.');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Edit Movement');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('New Movement');
            $content->description('Please fill the below fields and click \"Submit\" button.');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Movement::class, function (Grid $grid) {
            //$grid->id('ID')->sortable();
            $grid->movement('Movement')->sortable();
            
            $grid->created_at();
            $grid->updated_at();
            
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('movement', 'Movement');
            });
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Movement::class, function (Form $form) {

            //$form->display('id', 'ID');
            $form->text('movement')->rules('required|min:3');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
