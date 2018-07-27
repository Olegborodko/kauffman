<?php
/**
 * Plugin Name: Kauffman Fellows Directory
 * Plugin URI: https://JUICE.com
 * Description: Salesforce + Kauffman Fellows.
 * Version: 1.0
 * Author: JUICE Team
 * Author URI: https://JUICE.io/
 * Copyright: (c) 2017 JUICE Ltd.
 * License: GNU General Public License v2.0
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Requires at least: 4.5
 * Tested up to: 4.9.4
 * Text Domain: vcwb
 */

require_once(__DIR__ . '/salesforce/sf_fellows.php');

class fellowDirectory{
    private $headerList;
    private $state_list;
    private $response;
    private $filePath = 'results.json';

    public function __construct()
    {
        $this->headerList = array('Name', 'Last Name', 'Current Firm', 'Country', 'State/Province','City', 'Location', 'Fellowship', 'Class', 'Fellowship Bio', 'Professional Bio', 'Education Bio', 'Class Number');
        $this->state_list = array('AL'=>"Alabama",  'AK'=>"Alaska",  'AZ'=>"Arizona",  'AR'=>"Arkansas", 'CA'=>"California",  'CO'=>"Colorado",  'CT'=>"Connecticut",  'DE'=>"Delaware",'DC'=>"District Of Columbia",  'FL'=>"Florida",  'GA'=>"Georgia",  'HI'=>"Hawaii", 'ID'=>"Idaho",  'IL'=>"Illinois",  'IN'=>"Indiana",  'IA'=>"Iowa",  'KS'=>"Kansas", 'KY'=>"Kentucky",  'LA'=>"Louisiana",  'ME'=>"Maine",  'MD'=>"Maryland", 'MA'=>"Massachusetts",  'MI'=>"Michigan",  'MN'=>"Minnesota",  'MS'=>"Mississippi", 'MO'=>"Missouri",  'MT'=>"Montana", 'NE'=>"Nebraska", 'NV'=>"Nevada", 'NH'=>"New Hampshire", 'NJ'=>"New Jersey", 'NM'=>"New Mexico", 'NY'=>"New York", 'NC'=>"North Carolina", 'ND'=>"North Dakota", 'OH'=>"Ohio",  'OK'=>"Oklahoma",  'OR'=>"Oregon",'PA'=>"Pennsylvania",  'RI'=>"Rhode Island",  'SC'=>"South Carolina",  'SD'=>"South Dakota", 'TN'=>"Tennessee",  'TX'=>"Texas",  'UT'=>"Utah",  'VT'=>"Vermont",  'VA'=>"Virginia", 'WA'=>"Washington",  'WV'=>"West Virginia",  'WI'=>"Wisconsin",  'WY'=>"Wyoming");
        add_action( 'wp_enqueue_scripts', [$this, 'addCssJs'] );
        add_shortcode('fellow-table', [$this, 'toHtmlTable']);
    }

    public function addCssJs(){
        //wp_enqueue_style( 'datatable-css', '//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css', array(), false );
        //wp_enqueue_style( 'datatable-css', '//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css', array(), false );
        //wp_enqueue_script( 'datatable-js', '//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js', array(), false);
        wp_enqueue_script('vmap-js', plugins_url() . '/fellow-directory/lib/jqvmap/dist/jquery.vmap.js', array(), false);
        wp_enqueue_script('vmap-world-js', plugins_url() .  '/fellow-directory/lib/jqvmap/dist/maps/jquery.vmap.world.js', array(), false);
    }

    /**
     * Get Data From Salesforce
     */
    protected function getData(){

        /**
         * Save data in json
         */

        if(date("F d Y H:i:s.", @filemtime($this->filePath)) <  date('F d Y H:i:s',time() - 3600)) {
            $fellow_data = get_salesforce_fellows();

            $this->response = $fellow_data['result'] ? $fellow_data['result'] : null ;
            $fp = fopen($this->filePath, 'w');
            fwrite($fp, json_encode($this->response));
            fclose($fp);
        }else{ 
            $this->response =  json_decode(file_get_contents($this->filePath));
        }

    }

    /**
     * Create table
     *
     * @param $atts
     * @param null $content
     * @return string
     */
    public  function toHtmlTable($atts, $content = null){
        if($_REQUEST['fellow']){
            $fellow = stripslashes($_REQUEST['fellow']);
            $fellow_data = get_salesforce_fellows($fellow);
            if ($fellow_data['result']) {
                $response = $fellow_data['result'][0];
                $html = $this->getBioHtml($response);
            }
        }else {
            $this->getData();
            $html = '<table class="companies-table" id="fellow-table"><thead><tr>' . $this->getHeaderHtml() . '</tr></thead><tbody>' . $this->getContentHtml() . '</tbody></table>' . $this->getDataTableJs();
        }
        return  $html;
    }

    protected function getBioHtml($response){
        $contentHTML = '';

        $contentHTML .=   '<h1>' . @$response->Name . '</h1>';

        if($response->Picture_URL__c) {
            $contentHTML .= '<p class="bio-image"><img src="http://kauffmanfellows.org/wp-content/uploads/' . $response->Picture_URL__c . '" class="fellow-pic pull-right"  /></p>';
        }
        $contentHTML .= '<h3 class="bio-company-name">'  . $response->Company_Name__c . '</h3>';
        $contentHTML .= '<p class="bio-professional">'  . $response->Bio_Professional__c . '</p>';
        $contentHTML .= '<h3>Education, Personal, and Fellowship</h3>';
        $contentHTML .= '<p class="bio-education">'  . $response->Bio_Education_Personal__c . '</p>';
        $contentHTML .= '<p class="bio-fellowship">'  . $response->Bio_Fellowship__c . '</p>';

        return $contentHTML;
    }
    /**
     * Create Table Content
     *
     * @return string
     */
    protected function getContentHtml(){
        $contentHTML = '';
        if (is_array($this->response)) {

            foreach ($this->response as $fellow) {
                $names = explode(' ', $fellow->Name);
                $lastName = (isset($names[count($names)-1])) ? $names[count($names)-1] : '';
                $contentHTML .= '<tr>';
                $contentHTML .= '<td><a href="' . site_url() . '/fellow-bio?fellow=' . $fellow->Name . '">' . $names[0] . '</a></td>';
                $contentHTML .= '<td><a href="' . site_url() . '/fellow-bio?fellow=' . $fellow->Name . '">' . $lastName . '</a></td>';
                $contentHTML .= '<td>' . $fellow->Company_Name__c . '</td>';
                $contentHTML .= '<td>' . @$fellow->MailingCountry . '</td>';
                $contentHTML .= '<td>' . @$fellow->MailingState . ', ' . @$this->state_list[$fellow->MailingState] . '</td>';
                $contentHTML .= '<td>' . @$fellow->MailingCity . '</td>';
                $contentHTML .= '<td>' . @$fellow->Region__c . '</td>';
                $contentHTML .= '<td>' . @$fellow->Fellowship__c . '</td>';
                $contentHTML .= '<td>' . str_pad($fellow->KFP_Class__c, 2, '0', STR_PAD_LEFT) . '</td>'; //
                $contentHTML .= '<td>' . $fellow->Bio_Fellowship__c . '</td>';
                $contentHTML .= '<td>' . $fellow->Bio_Professional__c . '</td>';
                $contentHTML .= '<td>' . $fellow->Bio_Education_Personal__c . '</td>';
                $contentHTML .= '<td>' . (int)$fellow->KFP_Class__c . '</td>';
                $contentHTML .= '</tr>';
            }

        }
        return $contentHTML;
    }

    /**
     * Create Headers
     *
     * @return string
     */
    protected function getHeaderHtml(){
        $html = '';
        foreach ($this->headerList as $header){
            $html .= '<th class=""><div class="sorting_inside">
<div class="sorting_inside__top"></div>
<div class="sorting_inside__bottom"></div>
</div>' . $header . '</th>';
        }
        return $html;
    }

    protected  function getDataTableJs(){
        return '<script>
                jQuery(document).ready( function () {
                    jQuery(\'#fellow-table\').DataTable(
                    { 
                      responsive: true,
                      "language": {
                      "search": ""
                      },
                      "order": [[0, \'asc\']],
                      "columnDefs": [
                            {
                                "targets": [ 4, 5, 9, 10, 11, 12],
                                "visible": false
                            },
                            { "orderData": [1, 0],    "targets": 0 },
                            { "orderData": [12, 8],    "targets": 8 }
                      ],
                      "pageLength": 20
                      //"bLengthChange": false  
                    }
                    );
                });</script>';
    }
}

$fellow_derectory = new fellowDirectory();

function map_fellow($atts, $content=null){
    $baseURL =  plugin_dir_url( __FILE__ ) ;
    $attributes = shortcode_atts(
        array('country' => ''),
        $atts
    )['country'];

    $map = <<<MAP

    <script>
      jQuery(document).ready(function () {
      
        var data = {
         "ar":"6",
"au":"5",
"be":"2",
"br":"13",
"ca":"16",
"cl":"3",
"cn":"40",
"co":"1",
"cr":"1",
"cz":"2",
"eg":"4",
"ee":"4",
"fi":"1",
"fr":"9",
"de":"13",
"gh":"3",
"gr":"1",
"hk":"5",
"in":"5",
"id":"3",
"ie":"17",
"il":"20",
"it":"20",
"jp":"35",
"jo":"2",
"lb":"1",
"mx":"21",
"nl":"6",
"ng":"5",
"no":"2",
"ps":"1",
"pl":"1",
"ru":"5",
"sa":"3",
"sg":"22",
"za":"2",
"kr":"1",
"es":"3",
"se":"11",
"ch":"7",
"tw":"1",
"tr":"11",
"ua":"1",
"ae":"9",
"gb":"60",
"us":"1080",
"uy":"1",
"vn":"2"
        };
        jQuery('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '',
          color: '#ffffff',
          responsive: true,
          hoverOpacity: 0.7,
          selectedColor: '',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#C8EEFF', '#006491'],
          values: data,
          normalizeFunction: 'polynomial',
          onLabelShow: function(event, label, code)
            {              
                if (undefined == data[code]){   
                    event.preventDefault();
                }else if (data[code]){
                    
                    jQuery('.jqvmap-label').css({'position':'absolute'});                   
                    label.html( label.text() +  "<br/> Fellow: " + data[code]);
                }
            }
        });
      });
    </script>
 <div id="vmap" style="width: 100%;height: 700px"></div>
MAP;
    return $map;
}
add_shortcode('map_fellow', 'map_fellow');
