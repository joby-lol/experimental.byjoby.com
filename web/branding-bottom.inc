<div class="byjobyfooter">
    More things by Joby:
    <ul>
        <li><a href="http://byjoby.com/" rel="me">byjoby.com</a></li>
        <li><a href="https://github.com/jobyone" rel="me">Github</a></li>
        <li><a href="http://codepen.io/jobyone/" rel="me">CodePen</a></li>
        <li><a href="https://plus.google.com/+JobyElliott" rel="me">Google+</a></li>
    </ul>
    <hr/>
    <p><strong>Software license:</strong> unless otherwise noted, original software posted to this site is <a href="/license.php">MIT Licensed</a>.</p>
    <hr/>
    <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a><br />Unless otherwise noted, <span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">creative works on experimental.byjoby.com</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://experimental.byjoby.com" property="cc:attributionName" rel="cc:attributionURL">Joby Elliott</a> are licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.
</div>
<script src="/2014/lifecanvas/underscore.js"></script>
<script src="/2014/lifecanvas/lifecanvas.js"></script>
<script>
//Launch the thing
/*(function(){
    var element = document.getElementById("lifecanvasdemo");
    var width = (element.offsetHeight/5+element.offsetWidth/60+15)/3;
    width = Math.round(width);
    var options = {
        cellWidth: width,
        cellHeight: width,
        simulationStep: 100,
        bgColor: "#25B34B",
        fgColor: "#57bc6f",
        strokeColor: "#25B34B",
        cellStroke: 0
    };
    var lc = lifeCanvas(element,options);
    //building LWSS fliers randomly on both sides of the screen
    var lc_buildlwss_right = function (x,y) {
        coords = [
            {x:4,y:1},
            {x:4,y:2},
            {x:3,y:0},
            {x:3,y:1},
            {x:3,y:2},
            {x:2,y:0},
            {x:2,y:1},
            {x:2,y:3},
            {x:1,y:1},
            {x:1,y:2},
            {x:1,y:3},
            {x:0,y:2}
        ];
        for (var i = 0; i < coords.length; i++) {
            lc.setCell(x+coords[i].x,y+coords[i].y,true);
        }
    }
    var lc_buildlwss_left = function (x,y) {
        coords = [
            {x:0,y:1},
            {x:0,y:2},
            {x:1,y:0},
            {x:1,y:1},
            {x:1,y:2},
            {x:2,y:0},
            {x:2,y:1},
            {x:2,y:3},
            {x:3,y:1},
            {x:3,y:2},
            {x:3,y:3},
            {x:4,y:2}
        ];
        for (var i = 0; i < coords.length; i++) {
            lc.setCell(x+coords[i].x,y+coords[i].y,true);
        }
    }
    var lc_buildlwss = function () {
        var maxtop = Math.round(lc.canvas.offsetHeight/lc.opts.cellHeight);
        var maxright = Math.round(lc.canvas.offsetWidth/lc.opts.cellWidth)-3;
        var y = Math.round(Math.random()*maxtop);
        var offset = Math.round(Math.random()*maxright/2);
        if (Math.random()<0.5) {
            lc_buildlwss_left(offset,y);
        }else {
            lc_buildlwss_right(maxright-offset,y);
        }
    }
    lc_buildlwss()
    setInterval(function(){lc_buildlwss()},500);
    //mouse interaction
    var lc_onmousemove = function (e) {
        if (e.x) {
            var xcoord = e.x;
            var ycoord = e.y;
        }else {
            var xcoord = e.pageX;
            var ycoord = e.pageY;
        }
        xcoord = Math.round(xcoord/options.cellWidth);
        ycoord = Math.round(ycoord/options.cellHeight);
        lc.setCell(xcoord,ycoord,true);
    };
    document.onmousemove = lc_onmousemove;
})();
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-34822026-1', 'auto');
  ga('send', 'pageview');

</script>
