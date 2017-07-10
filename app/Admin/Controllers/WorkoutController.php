<?php

namespace App\Admin\Controllers;

use App\Workout;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use URL;

class WorkoutController extends Controller
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

            $content->header('Workout List');
            $content->description('You can manage workout list in this page.');

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

            $content->header('Edit Workout');
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

            $content->header('New Workout');
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
        return Admin::grid(Workout::class, function (Grid $grid) {

            //$grid->id('ID')->sortable();
            $grid->workout_id('ID')->sortable();
            $grid->name('Name')->sortable();
            $grid->area('Target Area')->sortable();
            $grid->movement('Movement')->sortable();
            $grid->thumbnail('Video')->image(URL::asset('images/workouts'), 100);
            $grid->minutes('Minutes')->sortable();
            $grid->description('Description')->sortable();
            
            $grid->relations()->value(function ($relations) {
                $relations = array_map(function ($relation) {
                    return "<span class='label label-warning' style='display:block;margin-top:4px;margin-bottom:4px'>{$relation['relation_name']}</span>";
                }, $relations);
                return join(' ', $relations);
            });
            /*
            $grid->created_at();
            $grid->updated_at();*/
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Workout::class, function (Form $form) {

            //$form->display('id', 'ID');
            
            $form->text('workout_id', 'Workout ID')->rules('required|min:3|max:50');
            
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
