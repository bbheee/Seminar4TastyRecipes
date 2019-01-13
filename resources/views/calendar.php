<?php
  //  include "header.php";
header( "Cache-Control: max-age=<350>"); 
?>
<!DOCTYPE html>
<html lang="en">

    <link href="resources/css/recipe.css" rel="stylesheet" type="text/css">
    <link href="resources/css/calendar.css" rel="stylesheet" type="text/css">

<main><div class="calendar">
  <div class="month">
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2018</span></li>
  </ul>
</div>
  <ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">
  <li> </li>
  <li> </li>
  <li>1</li>
  <li>2</li>
  <li>3
    <a href="meatballs.php"><img alt ="Meatballs" src="resources/images/kottbullar.jpg" class="days"></a></li>
  <li>4</li>
  <li>5</li>
  <li><span class="active">6</span></li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15
    <a href="pancakes.php"><img alt ="Pancakes" src="resources/images/pannkakor.jpg"  class="days"></a></li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>
</div>
</main>
</html>
