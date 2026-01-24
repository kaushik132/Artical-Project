<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Post;
use \App\Models\PostCategory;
use \App\Models\Hashtag;


class PostController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('postcategory.name', __('Post Category Name'));
        $grid->column('hashtags_id', __('Hashtags'))->display(function ($ids) {
            if (!$ids) return '-';
            return Hashtag::whereIn('id', $ids)->pluck('name')->implode(', ');
        });


        $grid->column('name', __('Name'));
        $grid->column('image', __('Image'))->image('/uploads/', '80', '80');
        $grid->column('is_active', 'Is Active')->switch();




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
        $show = new Show(Post::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('post_category_id', __('Post category id'));
        $show->field('hashtags_id', __('Hashtags id'));
        $show->field('name', __('Name'));
        $show->field('image', __('Image'));
        $show->field('post_content', __('Post content'));
        $show->field('instagram_link', __('Instagram link'));
        $show->field('facebook_link', __('Facebook link'));
        $show->field('youtube_link', __('Youtube link'));
        $show->field('likes', __('Likes'));
        $show->field('reviews', __('Reviews'));
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
        $form = new Form(new Post());

        $form->select('post_category_id', __('Post category id'))->options(
            PostCategory::all()->pluck('name', 'id')
        );
        $form->multipleSelect('hashtags_id', __('Hashtags id'))->options(
            Hashtag::all()->pluck('name', 'id')
        );
        $form->text('name', __('Name'));
        $form->image('image', __('Image'));
        $form->image('post_image', __('Post Image'));
        $form->text('alt', __('Alt'));
        $form->textarea('post_content', __('Post content'));
        $form->url('instagram_link', __('Instagram link'));
        $form->url('facebook_link', __('Facebook link'));
        $form->url('youtube_link', __('Youtube link'));
        $form->text('likes', __('Likes'));
        $form->text('reviews', __('Reviews'));



        $form->switch('is_active', 'Is Active')->default(1);

        return $form;
    }
}
