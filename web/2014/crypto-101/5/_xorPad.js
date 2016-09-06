xorPad = function (init) {
    var pad = this;
    if (!init) {
        init = 512;
    }
    if (typeof(init) == typeof(5)) {
        pad.generate(init);
    }
}