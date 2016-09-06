<!doctype html>
<html>
<head>
    <title>Experimental Projects by Joby</title>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/branding-head.inc'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
    <meta name="viewport" content="initial-scale=1, minimum-scale=1, maximum-scale=1.5" />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-block.inc'); ?>
    
    <div id="experimental-page">
        <h1>Material design inspired form elements</h1>
        <p>Every element on this page is <strong>pure CSS</strong>. There are no exotic plugins, or browser features, or even Javascript. These are all straight HTML form elements and labels, just more carefully styled than most.</p>
        <div class="material-form">
            <h2>Checkboxes</h2>
                <input type="checkbox" id="check1"> <label for="check1">Checkboxes</label>
                <input type="checkbox" id="check2"> <label for="check2">Are extremely common,</label>
                <input type="checkbox" id="check3"> <label for="check3">and there's a fairly obvious animation!</label>
                <br/>
                <input type="checkbox" id="check4" disabled> <label for="check4">Normal html disabling works</label>
                <input type="checkbox" id="check5" disabled checked> <label for="check5">whether the field is checked or not.</label>
            <h2>Switches</h2>
                <input type="checkbox" class="switch" id="switch1"> <label for="switch1">Switches are for when you would otherwise use just a single checkbox</label>
                <p class="hint">In fact, this field <strong>is</strong> a checkbox under the hood! Just add .switch to any checkbox.</p>
                <input type="checkbox" class="switch" id="switch2" disabled> <label for="switch2">Switches can also be disabled</label>
                <input type="checkbox" class="switch" id="switch3" disabled checked> <label for="switch3">in either state</label>
            <h2>Radio buttons</h2>
                <input type="radio" id="radio1" name="radioGroup"> <label for="radio1">Radio buttons</label>
                <input type="radio" id="radio2" name="radioGroup"> <label for="radio2">can be way nicer</label>
                <input type="radio" id="radio3" name="radioGroup"> <label for="radio3">with just a little CSS!</label>
                <br/>
                <input type="radio" id="radio4" name="radioGroup2" disabled> <label for="radio4">Radio buttons</label>
                <input type="radio" id="radio5" name="radioGroup2" disabled checked> <label for="radio5">are also disable-able</label>
            <h2>Text fields</h2>
                <label for="text1">Text fields</label>
                <input type="text" id="text1" placeholder="placeholders are styled" /><br/>
                <input type="text" id="text1" disabled value="disabled text field" /><br/>
                <input type="text" id="text1" readonly value="read only text field" />
                <p class="hint">Fields are made inline-block, and left to their default width.</p>
            <h2>Dropdowns</h2>
                <select>
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
                <br/>
                <select disabled>
                    <option>Disabled dropdowns</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                </select>
                <p class="hint">Pretty basic styling, and the native appearance attributes are left intact. I don't like to mess with those because you start endangering usability. If you want them fancier than this you'll have to use javascript.</p>
            <h2>Text areas</h2>
                <textarea>some text goes in here, and it wraps!</textarea>
                <textarea disabled>this is what a disabled textarea looks like</textarea>
                <textarea readonly>this is what a read only textarea looks like. In most browsers it's functionally equivalent to a disabled one.</textarea>
            <h2>Horizontal rules</h2>
                <p class="hint">Use to break form into parts.</p>
                <hr/>
            <h2>Error styling</h2>
                <div class="error">
                <p class="hint">Indicate errors by wrapping them in a .error container.</p>
                <p class="error-message">Give error messages the .error-message class.</p>
                <input type="text" id="errorText" placeholder="text field" /><br/>
                <input type="checkbox" id="errorCheck"> <label for="errorCheck">Checkboxes</label><br/>
                <input type="radio" id="errorRadio" name="radioGroup"> <label for="errorRadio">Radio buttons</label><br/>
                <input type="checkbox" class="switch" id="errorSwitch"> <label for="errorSwitch">Switches</label>
                </div>
                <p class="error-message">
                    Error messages need not be inside a .error container.</p>
                </p>
            <h2>Buttons</h2>
                <button>BUTTON tag</button><br/>
                <input type="button" value=" type=&quot;button&quot;"/>
                <input type="reset" value=" type=&quot;reset&quot;"/>
                <input type="submit" value=" type=&quot;submit&quot;"/><br/>
                <button disabled>disabled</button>
                <h3>Flat buttons</h3>
                    <button class="flat">BUTTON tag</button><br/>
                    <input type="button" class="flat" value=" type=&quot;button&quot;"/>
                    <input type="reset" class="flat" value=" type=&quot;reset&quot;"/>
                    <input type="submit" class="flat" value=" type=&quot;submit&quot;"/><br/>
                    <button disabled class="flat">disabled</button>
                <h3>Processing buttons</h3>
                    <p class="hint">The ones here are clickable, it will toggle them between processing and normal. These can't be done automatically in just CSS. To use them you'll have to have Javascript disable and add .processing to buttons when it's needed.</p>
                    <button class="submit" onclick="$(this).toggleClass('processing')">Regular processing</button><br/>
                    <button class="submit flat" onclick="$(this).toggleClass('processing')">Flat processing</button><br/>
        </div>
    </div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(function(){
    
})
</script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/branding-bottom.inc'); ?>
</body>
</html>