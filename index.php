<?php
function get_age(){
    return (new DateTime())->diff(new DateTime('1976-11-22'))->format('%Y');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pavel Dubenko - web developer, team lead. system architect</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="Hxko80OG2Iw8G_wH93EqS_QisIplyYEdZ9iS65kNwkk"/>
    <link rel="stylesheet" href="css/bootstrap.min.css" >

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-2984062-4']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div class="container">
    <div class="row">

            <h1>Pavel Dubenko<br/>
                <small>web developer, team lead, system architect</small>
            </h1>

    </div>
    <div class="row">
        <span class="col-sm-4">
            <div>
                <img src="img/pavel_dubenko.jpg" width="300" height="386" alt="Pavel Dubenko" border="0" class="img-polaroid"/>
            </div>
            <br/>
            <div style="margin-top:-390px; margin-left: -20px;position: relative;">
            <ul class="unstyled">
                <li><a style="color: white;" href="http://ua.linkedin.com/in/paveldubenko/"><span class="label label-success" style="line-height: 25px;"><i class="icon-user icon-white"></i> LinkedIn</span></a></li>
                <li style="margin-top: 5px;"><a style="color: white;" href="https://www.facebook.com/pavel.dubenko/"><span class="label label-info"><i class="icon-user icon-white"></i> Facebook</span></a></li>
            </ul>

            </div>
        </span>
        <span class="col-sm-6 offset-sm-1">
            <dl class="dl-horizontal">
                <dt>Technologies:</dt>
                <dd><span class="badge badge-important">PHP</span> <span
                            class="badge badge-important">JavaScript</span>
                    <span class="badge badge-important">XSLT</span>
                    <span class="badge badge-important">SQL</span>
                </dd>
                <dt>Experience:</dt>
                <dd>12 years</dd>
                <dt>Age:</dt>
                <dd><?=get_age();?></dd>
            </dl>

            <p class="lead">
                For last years I'm dealing with development of my own
                <a href="http://energine.net/">CMF Energine</a>.
                This open source tool was designed for the rapid web
                applications
                development and is used in all of my last projects.This is
                component-
                oriented system that implements MVC pattern, where the View
                layer
                is represented by XSLT templates and data is stored in XML
                format.
                <ul>
                <li><a href="http://www.ohloh.net/p/energine/">Project summary at Ohloh</a>,</li>
                <li><a href="https://github.com/energine-cmf/energine/">Code on Github</a></li>
                </ul>
            </p>
            </span>

    </div>
    <div class="row">
        <h2>Experience</h2>
    </div>
    <div class="row">
        <span class="col-sm-5">
            <dl class="dl-horizontal">
                <dt>Period:</dt>
                <dd>from 2008 till now</dd>
                <dt>Company Name:</dt>
                <dd><a href="http://eggmengroup.com/">EggmenGroup</a></dd>
                <dt>Position:</dt>
                <dd>system architect, team leader, senior developer</dd>
            </dl>
        </span>
        <span class="col-sm-7">
                <h3>Content management platform for &quot;Media Group Ukraine&quot;</h3>
                <ul>
                    <li>
                        <a href="http://kanalukraina.tv">http://kanalukraina.tv</a>
                    </li>
                    <li><a href="http://sobytiya.tv">http://sobytiya.tv</a></li>
                    <li><a href="http://govoryt-ukraina.tv">http://govoryt-ukraina.tv</a>
                    </li>
                    <li><a href="http://www.footballua.tv/">http://www.footballua.tv/</a>
                    </li>
                    <li><a href="http://footballplusua.tv/">http://footballplusua.tv/</a>
                    </li>
                    <li><a href="http://nlotv.com">http://nlotv.com</a></li>
                    <li><a href="http://donbass.tv">http://donbass.tv</a></li>
                </ul>
            <p>
                All are running on a single platform. The main goal of the
                project was to
                provide customers with the set of tools which helps them to
                easily and quickly create and support standard rich media
                high performanced websites.
                Job Responsibilities: formulation of the problem,
                development of technical specifications, system's design,
                coding, management of the development team, import of
                existing data.<br/>
                Technologies Used: PHP, XML, XSLT, Javascript
            </p>
            <h3>Content management platform for &quot;StarLight&quot;</h3>
            <ul>
                <li><a href="http://stb.ua/">http://stb.ua/</a></li>
                <li><a href="http://qtv.ua/">http://qtv.ua/</a></li>
            </ul>
            <p>Content management platforms for STB and QTV TVChannels.<br/>
                Technologies Used:PHP, XML, XSLT, Javascript, Redis
            </p>
        </span>

        <div>

        </div>
    </div>
    <br/>

    <div class="row">
            <span class="col-sm-5">
                <dl class="dl-horizontal">
                    <dt>Period:</dt>
                    <dd>from 2006 till 2008</dd>
                    <dt>Company Name:</dt>
                    <dd><a href="http://colocall.net/">Colocall</a></dd>
                    <dt>Position:</dt>
                    <dd>Chief of development, senior developer</dd>
                </dl>
            </span>
            <span class="col-sm-7">
                    <h3>Web sites development</h3>
                <p>
                    Managing team consisting of developers, designers, coders
                    and techical writers(7-10 persons).
                    Software development and coding.<br/>
                    Technologies Used:PHP, XML, XSLT, Javascript, Ruby, UML
                </p>
            </span>
    </div>
    <div class="row">
                <span class="col-sm-5">
                    <dl class="dl-horizontal">
                        <dt>Period:</dt>
                        <dd>from 2003 till 2005</dd>
                        <dt>Company Name:</dt>
                        <dd><a href="http://uptsoft.com/">UPTSoft</a></dd>
                        <dt>Position:</dt>
                        <dd>Developer</dd>
                    </dl>
                </span>
                <span class="col-sm-7">
                        <h3>CMS development</h3>
                    <p>
                        Development of the <a href="http://xsight.com.ua/">XSight
                            CMS</a>.
                        Web sites development.<br/>
                        Technologies Used:PHP, XML, XSLT, Javascript, Oracle,
                        Informix, HTML, CSS
                    </p>
                </span>
    </div>
    <hr/>
    <p class="text-right">&copy; Pavel Dubenko <?= date('Y');?></p>
</div>
</body>
</html>