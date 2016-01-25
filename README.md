Material Design Theme for Wordpress
================

#This repo is a mess and is abandoned. New clean repo : https://github.com/theblackhole/material-wordpress

<b>Demo : </b>[materialwordpress.2fh.co](http://materialwordpress.2fh.co/)

Project status : Pre Alpha - "Working" experimental WP theme. 320press' Boostrap base imported. Now using FezVrasta style and js.
The base is now builded, theme reconstruction can now begin.s

<b>Sources :</b> <br>
JQuery version : [1.10.2](http://code.jquery.com/jquery-1.10.2.min.js)<br>
Bootstrap Version : [3.3.1](https://github.com/twbs/bootstrap/releases/tag/v3.3.1) <br>
bootstrap-material-design version : [0.1.6](https://github.com/theblackhole/bootstrap-material-design/releases/tag/0.1.6) <br>
wordpress-bootstrap : [25/10/2014](https://github.com/320press/wordpress-bootstrap)<br>

Original README from [FezVrasta's bootstrap-material-design](https://github.com/FezVrasta/bootstrap-material-design) :
===============


[![build status](https://travis-ci.org/FezVrasta/bootstrap-material-design.svg?branch=master)](https://travis-ci.org/FezVrasta/bootstrap-material-design)
[![ghat status](http://mywebexpression.com:3001/status/initial/badge.png)](http://mywebexpression.com:3001/) (click to chat)

[![banner](demo/imgs/banner.jpg)](#)

This Bootstrap theme is an easy way to use the new [Material Design guidelines by Google](http://www.google.com/design/spec/material-design/introduction.html) in your Bootstrap 3 based application.
Just include the theme, after the Bootstrap CSS and include the javascript at the end of your document (Just before the end of the `<body>` tag), and everything will be converted to Material Design (paper) style.

**Note:**This theme is in early development and is not ready for production.

Check out [the demo at this link](http://fezvrasta.github.io/bootstrap-material-design/) (This demo may not be even with the master branch.)

## How to install

    BOWER:       bower install bootstrap-material-design --save
    GEMS:        gem install bootstrap-material-design

## Use our CDN

You can find the CDN of this library at [CDNJS.com](https://cdnjs.com/libraries/bootstrap-material-design) and at [JSDelivr.com](http://www.jsdelivr.com/#!bootstrap.material-design)

### LESS & SASS

We decided to merge the SASS fork in to the main repository instead of having two seperate ones, [#40](https://github.com/FezVrasta/bootstrap-material-design/issues/40). The default grunt
task will compile the LESS source. To use the SASS base use the SCSS task ```grunt scss```.

**NB** The LESS and SASS bases should reflect each other, right now this project is unstable and under heavy development
so this might not be true before the first stable release.

## Getting started

Navigate to the `dist/` folder in this repository, and you will see the `test.html` file, which has the CSS include statements, in the `head` section and the JS includes just before `body` section closes.
You need to copy the `dist/` folder to the root of your project, ensuring that all the files in your project can access the files through the relative URL, supplied in the CSS and the JS includes.

## Development

We are using grunt to automate the workflow and build process. Ensure you have nodejs installed and grunt-cli installed globally.
After cloning the repo, run `npm install` to ensure you have all dev dependencies.

Run the `grunt build` command to run the tests and compile the less/sass. See Gruntfile.js for details on targets.

Run the `grunt test` command for browser based jasmine unit tests.

Run the `grunt serve` command to build and fire up a http server with live-reload and a watch for development purposes.

## Todo

- Morphing icons
- [Icons/grids/chips to card/fullscreen transitions](http://www.polymer-project.org/components/core-animated-pages/demo.html)
- [Headers](http://www.polymer-project.org/components/core-header-panel/demo.html)
- [Icon button](http://www.polymer-project.org/components/paper-icon-button/demo.html)
- [Tabs](http://www.polymer-project.org/components/paper-tabs/demo.html)
- [Toggle buttons](http://www.polymer-project.org/components/paper-toggle-button/demo.html)

I'll try to write every component without the need of Javascript but just CSS, and use JS only if strictly needed.
More "todo" things can be found in the ISSUES of this repository.

# Support me

If you like this project you may support me by donating something on Gittip, starring this repository or reporting bugs and ideas in the issue section.

[![gittip](demo/imgs/gittip-button.jpg)](https://www.gratipay.com/FezVrasta/)
[![issues](demo/imgs/issues-button.jpg)](https://github.com/FezVrasta/bootstrap-material-design/issues)

# Contribute

Please see the [contrib](CONTRIBUTING.md) file.


# Documentation

Material Design for Bootstrap provides some additional stuff to get the best from Material Design.

### Variations:

There are 17 additional color variations (in addition to the classic 4 variations) for buttons, inputs, checkboxes, radios, alerts, navbars, tabs, labels, paginations, progress bars and more.
They can be used by adding the class suffix `-material-color` to the desired element and replacing `color` with the desired one.

Example:

    <button class="btn btn-material-deeppurple">Deep purple button</button>

These colors are taken from the Material Design color palette and are reported below:

![palette](demo/imgs/palette.jpg)

### Buttons:

Add `.btn-flat` to a button to make it flat, without shadows.
Add `.btn-raised` to a button to add a permanent shadow to it.

### Inputs:

Add `.floating-label` to an input field with a `placeholder` to transform the placeholder in a floating label.

Remember to use the proper HTML markup to get radio and checkboxes styled correctly (choose between *radio* or *checkbox*):

    <div class="radio/checkbox radio-primary">
        <label>
            <input type="radio/checkbox" checked>
            Option one is this
        </label>
    </div>

### Icons:

Material Design for Bootstrap includes 490 original Material Design icons!
These icons are extracted from the original Google sources and are licensed under the BSD license.
They are provided as an iconic and easy to use font.

Variations are available for every icon, including the original Bootstrap icons.

The syntax to add a Material icon is:

     <i class="icon icon-material-favorite"></i>

# Material.js

Material.js is a jQuery plugin that add some magic to your markup and allows Material Design for Bootstrap to style some elements like inputs, checkboxes, radios etc.

### Functions:

This plugin exposes some functions, them are:

`$.material.init()` is a shortcut to run all the following commands.
`$.material.ripples()` will apply ripples.js to the default elements.
`$.material.input()` will enable the MD style to the text inputs, and other kind of inputs (number, email, file etc).
`$.material.checkbox():` will enable the MD style to the checkboxes (remember to follow the markup guidelines explained in the Inputs chapter.
`$.material.radio():` will enable the MD style to the checkboxes (remember to follow the markup guidelines explained in the Inputs chapter.

### Apply Material.js only to specific elements:

Every function expects an optional value that will be used as selector for the function, for example
  `$.material.ripples("#selector, #foobar")` will apply Ripples.js only to `#selector` and `#foobar`.
The functions that allows an optional selector are `$.material.ripples`, `$.material.input`, `$.material.checkbox` and `$.material.radio`.

You can even override the default values using the `$.material.options` function, the default values are:

    $.material.options = {
        "withRipples": ".btn:not(.btn-link), .card-image, .navbar a:not(.withoutripple), .nav-tabs a:not(.withoutripple), .withripple",
        "inputElements": "input.form-control, textarea.form-control, select.form-control",
        "checkboxElements": ".checkbox > label > input[type=checkbox]",
        "radioElements": ".radio > label > input[type=radio]"
    }

### Arrive.js support

If you need to dynamically add elements to your DOM then you may need to include Arrive.js before Material.js, this will automatically apply Material.js to every new element added by you using JS.


# Plugins

Material Design for Bootstrap comes with styling support for various external scripts:

### SnackbarJS

Create snackbars and toasts with [SnackbarJS plugin](https://github.com/FezVrasta/snackbarjs). The default toast style is the squared one (snackbar style). If you like to use the rounded style (toast style), please add the `toast` class to the `style` option of SnackbarJS.

### RipplesJS

This is part of Material Design for Bootstrap project and is a plain Javascript script which creates the ripple effect on click of the defined elements.
At the moment RipplesJS does not have its own repository but it will probably have one in the future.

### noUiSlider

Make cross-browser sliders and get them styled with Material Design thanks to the support provided by this theme.
Read more about [noUiSlider here](http://refreshless.com/nouislider/)

### Selectize.js

Transform select and multi select inputs in advanced text inputs. Material Design for BS provides a full replacement of the plugin's CSS, so don't include it.
Read more about [selectize.js](http://brianreavis.github.io/selectize.js/)


# Compatibility

Currently Material Design for Bootstrap supports Google Chrome (tested v37+), Mozilla Firefox (tested 30+), and Internet Explorer (tested 11+). Mobile browsers are not currently tested but it may work.


Original README from [320press' Wordpress Bootstrap](https://github.com/320press/wordpress-bootstrap) :
===============
Bootstrap (http://getbootstrap.com) in WordPress theme form.

GETTING STARTED
_______________

To get started, open Terminal or a command prompt and run:

	cd path/to/wp-content/themes
	git clone https://github.com/320press/wordpress-bootstrap.git
	npm install
	grunt dev

FEATURES
________

We’ve built the WP Bootstrap theme so that it could be used as-is as a very basic theme or as a starting point for theme developers. It uses v3.2.0 of Bootstrap.

WP-Bootstrap uses grunt as a task manager to help aid development. Check out the gruntfile.js file for more detail on the default tasks. WP-Bootstrap comes with the livereload, less, grunticon and more tasks out of the box. 

Watch or star this project to keep up with its progress.

Multi-Lingual
_____________

WP-Bootstrap is translated in 7 languages - Spanish, French, Portuguese, Italian, Dutch, Swedish and German. 

Page Templates
______________

We’ve packaged four different page templates into this theme.

    - Homepage template (seen on the homepage of this site - http://www.320press.com/wp-bootstrap)
    - Standard page with right sidebar (this page)
    - Page with left sidebar
    - Full width page

Theme Options Panel
___________________

We've removed the custom theme options panel in version 3.0. Currently working on moving all of the options that used to appear there over to the theme customizer. 

Shortcodes
__________

We’ve built in some shortcodes so you can easily add UI elements found in Bootstrap.

Sidebars
________

There are two different sidebars. One for the homepage and one for the other pages. Add widgets to them.

CONTRIBUTE!
___________

This project would not exist in its current state today were it not for lots of generous folks who have contributed to it. Thank you! 

If you'd like to commit to this project please submit a pull request and I will do my best to merge appropriately.
