

<?php

function nuestro_eventos()
{

    $arr = array();
    $arr2 = array();
    $today = date("d");
    // if today is less than 27 then proceed with generating random numbers from this day to 28
    if ($today < 27) {
        for ($i = $today; $i < 29; $i++) {
            $arr[] = $i;
        }
        // else pretend today is the 1st since we need to mantain having 3 events     
    } else {
        for ($i = 1; $i < 29; $i++) {
            $arr[] = $i;
        }
    }



    shuffle($arr);


    for ($i = 0; $i < 3; $i++) {
        $arr2[] = $arr[$i];
    }

    sort($arr2);
    $rand = $arr2[0];
    $rand2 = $arr2[1];
    $rand3 = $arr2[2];




    echo '<style>';
    echo '';



    echo '';
    echo ':root {';
    echo '--teal-050: #effcf6;';
    echo '--teal-100: #c6f7e2;';
    echo '--teal-200: #8eedc7;';
    echo '--teal-300: #65d6ad;';
    echo '--teal-400: #3ebd93;';
    echo '--teal-500: #27ab83;';
    echo '--teal-600: #199473;';
    echo '--teal-700: #147d64;';
    echo '--teal-800: #0c6b58;';
    echo '--teal-900: #014d40;';
    echo '--blue-grey-050: #83aaeb';
    echo '--blue-grey-100: #d9e2ec;';
    echo '--blue-grey-200: #bcccdc;';
    echo '--blue-grey-300: #9fb3c8;';
    echo '--blue-grey-400: #829ab1;';
    echo '--blue-grey-500: #627d98;';
    echo '--blue-grey-600: #486581;';
    echo '--blue-grey-700: #334e68;';
    echo '--blue-grey-800: #243b53;';
    echo '--blue-grey-900: #102a43;';
    echo '}';
    echo '';
    echo '';
    echo '#meany {';
    echo 'max-width: 50% ;';
    echo 'border: 2px solid var(--blue-grey-200);';
    echo 'border-radius: 8px;';
    echo '}';
    echo '';
    echo '';
    echo '';
    echo 'time{';
    echo 'font-size: 10px ;';

    echo '}';
    echo '';
    echo '#month{';
    echo 'color: #de5e78 ;';
    echo '';
    echo '}';
    echo '';

    echo '.day{';


    echo 'padding-left : 0 ;';
    echo 'border-radius: 2px;';
    echo '}';
    echo '';

    echo '.day:nth-of-type(' . $rand . '){ background-color: #83aaeb; }';
    echo '.day:nth-of-type(' . $rand2 . '){ background-color: #83aaeb; }';
    echo '.day:nth-of-type(' . $rand3 . '){ background-color: #83aaeb; }';





    echo '.month-indicator{';
    echo 'margin-top: 0.7em;';
    echo '}';
    echo '.month-indicator {';
    echo 'color: var(--blue-grey-700);';
    echo 'text-align: center;';
    echo 'font-weight: 500;';
    echo '}';
    echo '.day-of-week, .date-grid {';
    echo 'display: grid;';
    echo 'grid-gap: 10px;';
    echo 'grid-template-columns: repeat(7, 1fr);';
    echo '}';
    echo '.day-of-week {';
    echo 'margin-top: 1.25em;';
    echo 'margin-left: 20px;';
    echo 'margin-right: 8px;';
    echo '}';
    echo '.day-of-week > * {';
    echo 'font-size: 0.8em;';
    echo 'color: var(--blue-grey-400);';
    echo 'font-weight: 500;';
    echo 'letter-spacing: 0.1em;';
    echo 'text-align: center;';
    echo '}';

    echo '.day-of-week > div {';
    echo 'width: 60%;';


    echo '}';


    echo '/* Dates */';
    echo '.date-grid {';
    echo 'margin-top: 0.5em;';
    echo 'margin-right: 1em;';
    echo 'margin-left: 1em;';
    echo 'margin-bottom:  0.5em;';
    echo 'justify-content: center;';

    echo '}';
    echo '/* Positioning the first day */';
    echo '.date-grid button:first-child {';
    echo 'grid-column: 3;';
    echo '}';
    echo '.date-grid button {';
    echo 'position: relative;';
    echo 'border: 0;';
    echo '';
    echo 'background-color: transparent;';
    echo 'color: var(--blue-grey-600);';
    echo '}';
    echo '.date-grid button:active, .date-grid button.is-selected {';
    echo '';
    echo 'color: var(--teal-900);';
    echo '}';
    echo '';
    echo '#boldy{';
    echo 'font-size: 15px ;';
    echo '';
    echo '}';
    echo '';
    echo '#div{';
    echo 'float: right;';
    echo 'margin-right:50px ;';
    echo 'margin-top:50px ;';
    echo '}';
    echo '';
    echo '';
    echo '';
    echo '';



    echo '@media only screen and (max-width: 480px) {';
    echo '#meany {';
    echo 'margin-left:140px ;';
    echo 'display:inline-block;';
    echo '}';

    echo '}';


    echo '</style>';
    echo '</head>';
    echo '<body>';
    echo '<div id="div">';
    echo '<p style="color: #de5e78 ; font-weight: 500;" >Nuestros eventos:</p>';

    echo '<p style="color: #949ad8; font-weight: 500;" >🎥 Fecha:' . $rand . ' Febrero 2022</p>';
    echo '<p style="color: #949ad8; font-weight: 500;" >🎥 Fecha:' . $rand2 . ' Febrero 2022</p>';
    echo '<p style="color: #949ad8; font-weight: 500;" >🎥 Fecha:' . $rand3 . ' Febrero 2022</p>';




    echo '</div>';
    echo '';
    echo '<div id="meany">';
    echo '<div class="calendar">';
    echo '<div class="month-indicator">';
    echo '<time datetime="2022-02" id="month"> <bold id="boldy">FEBRERO 2022</bold> </time>';
    echo '</div>';
    echo '<div class="day-of-week">';
    echo '<div style="color:#8be0a0;" >S</div>';

    echo '<div style="color:#464749;" >M</div>';
    echo '<div style="color:#464749;">T</div>';
    echo '<div style="color:#464749;">W</div>';
    echo '<div style="color:#464749;">T</div>';
    echo '<div style="color:#464749;">F</div>';
    echo '<div style="color:#464749;">S</div>';
    echo '</div>';
    echo '<div class="date-grid">';
    echo '<button class="day">';
    echo '<time >1</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >2</time>';
    echo '</button >';
    echo '<button class="day">';
    echo '<time >3</time>';
    echo '</button >';
    echo '<button  class="day">';
    echo '<time >4</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >5</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >6</time>';
    echo '</button>';
    echo '';
    echo '<button  class="day">';
    echo '<time >7</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >8</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >9</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >10</time>';
    echo '</button>';
    echo '<button  class="day">';
    echo '<time >11</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >12</time>';
    echo '</button>';
    echo '';
    echo '<button class="day">';
    echo '<time >13</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >14</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >15</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >16</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >17</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >18</time>';
    echo '</button>';
    echo '';
    echo '<button class="day">';
    echo '<time >19</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >20</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >21</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >22</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >23</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >24</time>';
    echo '</button>';
    echo '';
    echo '<button class="day">';
    echo '<time >25</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >26</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >27</time>';
    echo '</button>';
    echo '<button class="day">';
    echo '<time >28</time>';
    echo '</button>';

    echo '';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '';
    echo '';
    echo '</body>';
}


add_shortcode('ne', 'nuestro_eventos');




?>



  
  

