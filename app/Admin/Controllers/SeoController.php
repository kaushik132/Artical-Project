<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Seo;

class SeoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Seo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Seo());

        $grid->column('id', __('Id'));
        $grid->column('seo_title_article', __('Seo title article'));
        $grid->column('seo_des_article', __('Seo des article'));
        $grid->column('seo_key_article', __('Seo key article'));
        $grid->column('seo_image_article', __('Seo image article'))->image('/uploads/','80','80');


        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Seo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('seo_title_article', __('Seo title article'));
        $show->field('seo_des_article', __('Seo des article'));
        $show->field('seo_key_article', __('Seo key article'));
        $show->field('seo_image_article', __('Seo image article'));
        $show->field('seo_title_post', __('Seo title post'));
        $show->field('seo_des_post', __('Seo des post'));
        $show->field('seo_key_post', __('Seo key post'));
        $show->field('seo_image_post', __('Seo image post'));
        $show->field('seo_title_travel_clip', __('Seo title travel clip'));
        $show->field('seo_des_travel_clip', __('Seo des travel clip'));
        $show->field('seo_key_travel_clip', __('Seo key travel clip'));
        $show->field('seo_image_travel_clip', __('Seo image travel clip'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Seo());

        $form->text('seo_title_article', __('Seo title article'));
        $form->textarea('seo_des_article', __('Seo des article'));
        $form->textarea('seo_key_article', __('Seo key article'));
        $form->text('seo_image_article', __('Seo image article'));
        $form->text('seo_title_post', __('Seo title post'));
        $form->textarea('seo_des_post', __('Seo des post'));
        $form->textarea('seo_key_post', __('Seo key post'));
        $form->text('seo_image_post', __('Seo image post'));
        $form->text('seo_title_travel_clip', __('Seo title travel clip'));
        $form->textarea('seo_des_travel_clip', __('Seo des travel clip'));
        $form->textarea('seo_key_travel_clip', __('Seo key travel clip'));
        $form->text('seo_image_travel_clip', __('Seo image travel clip'));

        return $form;
    }
}
