<?php

namespace App\Admin\Controllers;

use App\TargetArea;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TargetAreaController extends Controller
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

            $content->header('Target Area List');
            $content->description('You can manage target area list in this page.');

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

            $content->header('New Target Area');
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

            $content->header('Edit Target Area');
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
        return Admin::grid(TargetArea::class, function (Grid $grid) {

            // $grid->id('ID')->sortable();
            $grid->area('Area')->sortable();
            
            $grid->created_at();
            $grid->updated_at();
                        
            $grid->filter(function ($filter) {
                $filter->disableIdFilter();
                $filter->like('area', 'Area');
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
        return Admin::form(TargetArea::class, function (Form $form) {

            // $form->display('id', 'ID');
            
            $form->text('area')->rules('required|min:3');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
