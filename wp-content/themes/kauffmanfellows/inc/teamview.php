<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/2/2018
 * Time: 1:58 PM
 */
class TeamView{
    public function __construct(){

    }

    public function getTeam(){
        $args = array( 'post_type' => 'kaufffman_team' );
        $loop = new WP_Query( $args );
        $currentCategory = '';
        $html = '';

        while ( $loop->have_posts() ) {
            $loop->the_post();
            $team = get_post();
            $category = get_the_category()[0];
            if($category->name != $currentCategory && $category->name != ''){
                $html .= $this->getCategory($category);
                $currentCategory = $category->name;
            }
            $html .= '<div class="grid-team col-md-3">';
            $html .= $this->getPhoto($team);
            $html .= $this->getTitle($team);
            //$html .= $team->post_content;
            $html .= '</div>';
        }

        $html = '<div class="grid-view clearfix">' . $html . '</div>';
        $html.= $this->getMasonry();
        return $html;
    }

    private function getContent(){

    }

    private function getCategory($category){
        return '<div class="col-md-6  team-category grid-team"><h3>' . $category->name . '</h3></div>';
    }

    private function getTitle($team){

        return '<div class="team-name">' . $team->post_title . '</div>';
    }

    private function getPhoto($team){
        if(get_the_post_thumbnail_url()) {
            $image = '<img src="' . get_the_post_thumbnail_url() . '" title="' . $team->post_name . '""/>';
        }
        return $image;
    }
    private function getMasonry(){
        return '';
    }
}