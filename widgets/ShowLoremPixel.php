<?php
/**
 * Created by PhpStorm.
 * User: prog-510
 * Date: 23.04.2016
 * Time: 21:36
 */

namespace app\widgets;


class ShowLoremPixel {

    public static function widget() {

        $aaa = <<<EOF
<div style="float: left; margin: 5px">
    <h4> random </h4>
    <img src="http://lorempixel.com/400/200" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> abstract </h4>
    <img src="http://lorempixel.com/400/200/abstract" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> animals </h4>
    <img src="http://lorempixel.com/400/200/animals" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> business </h4>
    <img src="http://lorempixel.com/400/200/business" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> cats </h4>
    <img src="http://lorempixel.com/400/200/cats" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> city </h4>
    <img src="http://lorempixel.com/400/200/city" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> food </h4>
    <img src="http://lorempixel.com/400/200/food" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> nightlife </h4>
    <img src="http://lorempixel.com/400/200/nightlife" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> fashion </h4>
    <img src="http://lorempixel.com/400/200/fashion" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> people </h4>
    <img src="http://lorempixel.com/400/200/people" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> nature </h4>
    <img src="http://lorempixel.com/400/200/nature" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> sports </h4>
    <img src="http://lorempixel.com/400/200/sports" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> technics </h4>
    <img src="http://lorempixel.com/400/200/technics" width="220px">
</div>

<div style="float: left; margin: 5px">
    <h4> transport </h4>
    <img src="http://lorempixel.com/400/200/transport" width="220px">
</div>
EOF;

        return $aaa;
    }

}