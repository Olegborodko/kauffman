<?php
/**
 * Created by PhpStorm.
 * User: Stasevi41
 * Date: 5/3/18
 * Time: 11:58 PM
 */

class fellowmap
{
    protected $list;
    protected $continets = [];
    protected $companyByCountry = [] ;

    public function __construct()
    {
        $this->prepareList();
    }

    public function prepareList(){
        $args = array( 'post_type' => 'fellow_directory');
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) {
            $loop->the_post();
            $post = get_post();
            $post->continent = get_field('continent', $post->id);
            $post->country = get_field('country', $post->id);
            $post->company = get_field('company', $post->id);
            $post->fellowship = get_field('fellowship', $post->id);
            $post->class = get_field('class', $post->id);
            $this->list[] = $post;
        }

        $this->sort();

    }
    private function sort(){
        foreach ($this->list as $list){
           $this->companyByCountry[$list->continent][$list->country][] = $list->company;
        }
        asort($this->continets);
        return $this->continets;
    }

    public function fellowCountry(){
        ob_start();
        set_query_var('lists', $this->list);
        set_query_var('countryList', $this->companyByCountry);
        get_template_part('partials/tabs');
        return ob_get_clean();
    }

    public function fellowTable(){
        ob_start();
        set_query_var('lists', $this->list);
        get_template_part('partials/fellowTable');
        return ob_get_clean();
    }

}