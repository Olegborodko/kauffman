<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/7/2018
 * Time: 2:29 PM
 */

if(count($lists) > 0) {
    echo '<table class="table-striped">';
    echo '<tr>';
    echo '<th>Name</th>';
    echo '<th>Country</th>';
    echo '<th>Company</th>';
    echo '<th>Class</th>';
    echo '</tr>';
    foreach ($lists as $list) {

        echo '<tr>';
        echo '<td>' . $list->post_title . '</td>';
        echo '<td>' . $list->country . '</td>';
        echo '<td>' . $list->company .  '</td>';
        echo '<td>' . $list->class .'</td>';
        echo '</tr>';
    }
    echo '</table>';
}