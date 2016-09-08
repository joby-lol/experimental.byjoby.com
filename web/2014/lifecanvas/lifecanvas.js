lifeCanvas = function (canvas,options) {
	var lc = {};
	// Default options
	var defaults = {
		bgColor: '#ddd',
		bgFadeOpacity: 0.6,
		fgColor: '#eee',
		strokeColor: '#fafafa',
		cellStroke: 2,
		cellWidth: 6,
		cellHeight: 6,
		simulationStep: 100,
	};
	lc.opts = _.extend(defaults,options);
	// Construction
	lc.canvas = canvas;
	lc.state = [];
	lc.simulationStep = 0;
	lc.renderStep = 0;
	// keep the canvas explicitly sized
	lc.explicitSize = function() {
		var height = Math.round(lc.canvas.offsetHeight/lc.opts.cellHeight)*lc.opts.cellHeight;
		var width = Math.round(lc.canvas.offsetWidth/lc.opts.cellWidth)*lc.opts.cellWidth;
		if (lc.canvas.getAttribute('height') != height) {
			lc.canvas.setAttribute('height',height);
		}
		if (lc.canvas.getAttribute('width') != width) {
			lc.canvas.setAttribute('width',width);
		}
	}
	// get a cell's state
	lc.getCell = function(x,y) {
		if (lc.state[x]) {
			if (lc.state[x][y]) {
				return true;
			}
		}
		return false;
	}
	// set a cell's state
	lc.setCell = function(x,y,state) {
		if (!lc.state[x]) {
			lc.state[x] = [];
		}
		lc.state[x][y] = state;
	}
	// render a frame
	lc.render = function() {
		var c = lc.canvas;
		//draw background
		var ctx = c.getContext("2d");
		ctx.fillStyle = lc.opts.bgColor;
		ctx.globalAlpha = lc.opts.bgFadeOpacity;
		ctx.fillRect(0,0,c.width,c.height);
		ctx.globalAlpha = 1;
		//loop through visible cells
		for (var x = 0; x <= c.width/lc.opts.cellWidth; x++) {
			for (var y = c.height/lc.opts.cellHeight; y >= 0; y--) {
				/* BEGIN CELL x,y */
				if (lc.getCell(x,y) == true) {
					var xcoord = lc.opts.cellWidth*(x-1)-1;
					var ycoord = lc.opts.cellHeight*(y-1)-1;
					if (lc.opts.cellStroke > 0) {
						var ctx = c.getContext("2d");
						ctx.fillStyle = lc.opts.strokeColor;
						ctx.fillRect(xcoord,ycoord,lc.opts.cellHeight,lc.opts.cellWidth);
					}
					var ctx = c.getContext("2d");
					ctx.fillStyle = lc.opts.fgColor;
					ctx.fillRect(xcoord+lc.opts.cellStroke,ycoord+lc.opts.cellStroke,lc.opts.cellHeight-(lc.opts.cellStroke*2),lc.opts.cellWidth-(lc.opts.cellStroke*2));
				}
				/* END CELL x,y */
			}
		}
	}
	// initialize
	lc.explicitSize();
	setInterval(lc.explicitSize,lc.opts.cellTimer);
	// initiate animation
	if (!window.requestAnimFrame) {
		window.requestAnimFrame = (function(){
			return window.requestAnimationFrame ||
			window.webkitRequestAnimationFrame ||
			window.mozRequestAnimationFrame	||
			function( callback ){
				window.setTimeout(callback, 1000 / 60);
			};
		})();
	}
	(function animloop(){
		requestAnimFrame(animloop);
		if (lc.simulationStep > lc.renderStep) {
			lc.render();
			lc.simulationStep = lc.renderStep;
		}
	})();
	// initiate simulation
	lc.simulationTimer = setInterval(function(){
		var state_new = [];
		var height = Math.round(lc.canvas.offsetHeight/lc.opts.cellHeight);
		var width = Math.round(lc.canvas.offsetWidth/lc.opts.cellWidth);
		for (var x = 0; x < width+2; x++) {
			state_new[x] = [];
			for (var y = height+1; y >= 0; y--) {
				/* BEGIN CELL x,y */
				var n = lc.getCell(x,y);
				var n1 = lc.getCell(x-1,y+1);
				var n2 = lc.getCell(x,y+1);
				var n3 = lc.getCell(x+1,y+1);
				var n4 = lc.getCell(x+1,y);
				var n5 = lc.getCell(x+1,y-1);
				var n6 = lc.getCell(x,y-1);
				var n7 = lc.getCell(x-1,y-1);
				var n8 = lc.getCell(x-1,y);
				var nSum = n1+n2+n3+n4+n5+n6+n7+n8;
				var n_new = n;
				if (n) {
					if (nSum == 2 || nSum == 3) {
						n_new = true;
					}else {
						n_new = false;
					}
				}else {
					if (nSum == 3) {
						n_new = true;
					}else {
						n_new = false;
					}
				}
				state_new[x][y] = n_new;
				/* END CELL x,y */
			}
		}
		lc.state = state_new;
		lc.simulationStep++;
	},lc.opts.simulationStep);
	// return
	return lc;
}