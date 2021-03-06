<!DOCTYPE html>
<html>
<head>
    <?php include("../header_play.html"); ?>
    <?php include("metadata.html"); ?>

    <link rel="stylesheet" href="../chart/chart.css">
    <link rel="stylesheet" href="../chart/responsive.css">
    <link rel="stylesheet" href="component.css">
    <script src="component.js" type="text/javascript"></script>
</head>
<body class="jui">

<div class="header">
    <div class="logo">
        <img src="../../res/img/play_logo.png" align="absmiddle" onclick="window.open('/', 'jui.site')" />
    </div>
    <div class="toolbar">
        <span >
			Themes
			<select onchange="changeTheme(this.value)">
                <option value="jennifer">Jennifer</option>
                <option value="dark">Dark</option>
            </select>
        </span>

        <a href="javascript:comments.show();" class="chart_comments">Leave a comment</a>

        <i id="sidemenu" class="icon-menu"></i>
    </div>
</div>
<div class="container">
    <div class="menu"></div>
    <div class="content">
        <div class="chart_data">
            <div class="chart_data_main">
                <ul id="types" class="tab top">
                    <li>
                        <a href="#chart-code">Code</a>
                    </li>
                    <li>
                        <a href="#chart-html">HTML</a>
                    </li>
                </ul>

                <div id="types_contents" class="tab-contents">
                    <div id="chart-code">
                        <textarea id="chart-code-text"></textarea>
                    </div>
                    <div id="chart-html">
                        <textarea id="chart-html-text"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="splitter splitter-2"></div>
        <div class="chart_view">
            <div class="chart-main">
                <div id="chart-content-title">
                    <h2>
                        Result

                        <div class="group">
                            <a class='btn btn-api' title="Chart API" href="http://api.jui.io/" target="_blank">API</a>
                            <a class='btn btn-fullscreen' title="Full Screen"><i class='icon-new-window'></i></a>
                        </div>
                    </h2>
                </div>
                <div id="chart-content">
                    <iframe name="chart-iframe" width="100%" height="100%" frameborder="0" scrolling="no" onload="resizeComponent(this);"></iframe>
                    <form id="chart-form" target="chart-iframe" method="post" action="loader.php">
                        <input type="hidden" name="html" />
                        <input type="hidden" name="code" />
                        <input type="hidden" name="theme" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<link id="jui_theme_ui" rel="stylesheet" href="../../lib/jui/css/ui-jennifer.min.css" />
<link id="jui_theme_grid" rel="stylesheet" href="../../lib/jui/css/grid-jennifer.min.css" />
<?php include("../footer_play.html"); ?>

</body>
</html>
