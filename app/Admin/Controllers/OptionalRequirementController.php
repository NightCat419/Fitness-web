<?php

namespace App\Admin\Controllers;

use App\OptionalRequirement;
use App\Workout;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class OptionalRequirementController extends Controller
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

            $content->header('Optional Requirements List');
            $content->description('You can manage optional requirements of workouts in this page.');

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

            $content->header('Edit Requirement');
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

            $content->header('New Requirement');
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
        return Admin::grid(OptionalRequirement::class, function (Grid $grid) {

            $grid->workout_id('Workout ID')->sortable();
            $grid->requirement('Requirement')->sortable();
            
            $grid->filter(function ($filter) {
                $filter->useModal();
                
                $filter->disableIdFilter();
                $filter->like('workout_id', 'Workout ID');
                $filter->like('requirement', 'Requirement');
            });
            
            $grid->created_at();
            $grid->updated_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(OptionalRequirement::class, function (Form $form) {
            $form->select('workout_id', 'Workout ID')->options(Workout::all()->pluck('workout_id', 'workout_id'));
            $form->text('requirement', 'Requirement')->rules('required|min:3|max:50');
                        
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
