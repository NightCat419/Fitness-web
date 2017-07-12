<?php

/**
 * Created by PhpStorm.
 * User: mac
 * Date: 12/07/17
 * Time: 19:12
 */

namespace App\Admin\Extensions\Tools;

use Encore\Admin\Admin;
use Encore\Admin\Grid\Tools\AbstractTool;
use Illuminate\Support\Facades\Request;

class ScheduleAdd extends AbstractTool
{

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        // TODO: Implement render() method.
        Admin::script($this->script());

        return view('admin.tools.gender');
    }

    protected function script()
    {
        $url = Request::fullUrlWithQuery(['gender' => '_gender_']);

        return <<<EOT

            $('#add-multiple-schedules').click(function () {
            
                var url = "./api/show_create_schedules";
            
                $.pjax({container:'#pjax-container', url: url });
            
            });

EOT;
    }
}