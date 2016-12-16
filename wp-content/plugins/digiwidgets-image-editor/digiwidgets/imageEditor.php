<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
class DWWPSettings
{
    public $postID = "";
    public $imageLink = "";
    public $path = "";
    public $pathToUpload = "";
    public $templateWidth = "";
    public $templateHeight = "";
    public $paged = "";
    public $templateTitle = "";

    public function   __construct($postID, $imageLink, $path, $pathToUpload, $templateWidth, $templateHeight, $paged)
    {
        $this->path = plugins_url("", __FILE__);
        $this->pathToUpload = wp_upload_dir();
        if (isset($_GET['postID'])) {
            $this->postID = $_GET["postID"];
        }

        if (isset($_GET['imageLink'])) {
            $this->imageLink = $_GET["imageLink"];
        }
        if (isset($_GET['template_width'])) {
            $this->templateWidth = $_GET["template_width"];
        }
        else{
            $this->templateWidth = "";
        }
        if (isset($_GET['template_height'])) {
            $this->templateHeight = $_GET["template_height"];
        }
        else{
            $this->templateHeight = "";
        }
        if (isset($_GET['paged'])) {
            $this->paged = $_GET["paged"];
        }
        else{
            $this->paged = "";
        }
        if (isset($_GET['template_title'])) {
            $this->templateTitle = $_GET['template_title'];
        }
        else {
            $this->templateTitle = "";
        }

        if(isset($_SESSION['templateData'])) {
            $this->imageLink = $_SESSION['templateData']['imagePath'];
            $this->postID = $_SESSION['templateData']['imageID'];
            $this->templateWidth = $_SESSION['templateData']['width'];
            $this->templateHeight = $_SESSION['templateData']['height'];
            unset($_SESSION['templateData']['imagePath']);
            unset($_SESSION['templateData']['imageID']);
            unset($_SESSION['templateData']['width']);
            unset($_SESSION['templateData']['height']);
            unset($_SESSION['templateData']);
            $this->pathToUpload = wp_upload_dir();
            $this->paged = "";
        }

    }
}
$DWWPSettings = json_encode(new DWWPSettings($postID, $imageLink, $path, $pathToUpload, $templateWidth, $templateHeight, $paged));
function dwwpScripts()
{
    // Regular code.  Uses non-minified code
    wp_register_script('canvas2image', plugins_url('/libs/export_canvas/canvas2image.js', __FILE__));
    wp_register_script('fabricjs',plugins_url('/libs/fabric.js', __FILE__));
    wp_register_script('mousetrapjs', plugins_url('/libs/mousetrap.js', __FILE__));
    wp_register_script('knockout', plugins_url('/libs/knockout/lib/knockout.js', __FILE__));
    wp_register_script('knockoutTabs', plugins_url('/libs/dwwpKnockoutTabs.js', __FILE__), array('knockout'));
    wp_register_script('spectrum', plugins_url('/libs/spectrum/spectrum.js', __FILE__));
    wp_register_script('canvasBackground', plugins_url('/libs/canvasBackgroundColor.js', __FILE__), array('spectrum'));
    wp_register_script('dwwpEditor', plugins_url('/libs/dwwpEditorFunctions.js', __FILE__), array('canvas2image', 'fabricjs', 'mousetrapjs', 'knockoutTabs','spectrum','canvasBackground'));
    wp_register_script('bootstrap', plugins_url('/libs/bootstrap/bootstrap.min.js', __FILE__));
    wp_register_script('typography', plugins_url('/libs/typography.js', __FILE__), array('bootstrap', 'dwwpEditor'));
    wp_register_script('googleFonts', plugins_url('/libs/googleFonts.js', __FILE__), array('typography'));

    // WP doesn't provide the jquery css
    wp_register_style('jquery-ui-css', plugins_url('/libs/jquery/jquery-ui.css', __FILE__) );
    wp_register_style('fabriccss', plugins_url('/fabricJS.css', __FILE__));
    wp_register_style('spectrumstyle', plugins_url('/libs/spectrum/spectrum.css', __FILE__));
    wp_register_style('boostrapstyle', plugins_url('/libs/bootstrap/bootstrap.min.css', __FILE__));
    wp_register_style('font-awesome', plugins_url('/libs/font-awesome/font-awesome.min.css', __FILE__));

    wp_enqueue_script('json2');
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-draggable');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('jquery-ui-dialog');
    wp_enqueue_script('jquery-ui-accordion');
    wp_enqueue_script('jquery-effects-core');
    wp_enqueue_script('canvas2image');
    wp_enqueue_script('fabricjs');
    wp_enqueue_script('mousetrapjs');
    wp_enqueue_script('jquerydropdown');
    wp_enqueue_script('spectrum');
    wp_enqueue_script('canvasBackground');
    wp_enqueue_script('dwwpEditor');
    wp_enqueue_script('typography');
    wp_enqueue_script('bootstrap');
    wp_enqueue_script('googleFonts');

    wp_enqueue_style('jquery-ui-css');
    wp_enqueue_style('fabriccss');
    wp_enqueue_style('jquerydropdown');
    wp_enqueue_style('jquerydropdownmin');
    wp_enqueue_style('spectrumstyle');
    wp_enqueue_style('boostrapstyle');
    wp_enqueue_style('font-awesome');
}
dwwpScripts();
?>
<script>
    var temp = '<?php echo $DWWPSettings; ?>';

    // Backslashes from Windows file locations will make it freak out
    temp = temp.split("\\").join("/");
    var DWWPSettings = JSON.parse(temp);

    function closeOverlay() {
        el = document.getElementById("overlay");
        el.style.visibility = (el.style.visibility == "visible") ? "hidden" : "visible";
    }

    var RunCallbackFunction = function() { };
</script>
<!doctype html>
<html>
<body style="background-color: #F0F0F0">
<h1 class="headerStyle">DigiWidgets Editor</h1>
<div id="fade"></div>
<div id="maincontent"">
<div id="existingProjectContainer"></div>
<div id="newProjectContainer">
    <div id="centerForm">
        <form action="javascript:ImageFunctions.checkNewProjectInfo()">
            <div style="background-color: #FCFCFC; height: 35px; border-bottom: #F3F2F2; border-style: solid; border-width: 0px 0px 1px 0px;">
                <h3 style="font-size: .7em; margin-left: 20px; padding-top: 10px;">Create a New Project <div id="closeNewProject" style="float:right;" onclick="ImageFunctions.cancelNewProject()"><span class="dashicons dashicons-no"></span></div></h3><br />
            </div>
            <div style="margin-left: 80px; margin-top: 40px;">
                <label id='projectTitleLabel' style="margin-left: 0px; width: 200px;"><span style="">Project Name </span></label><br /><input id="projectTitle" required="true" maxlength="100" style="width:340px;"/><br /><br />
                <label id='templateNewLabel' style="margin-left: 0px; width: 200px;"><span style="">Select Template </span></label><br /><select id='templateDropdownNewProject' style="width:340px;" required="true"><option disabled hidden selected value='''></option></select><br /><br />
                <div id="newTemplateContainer" style="display: none;">
                    <label id='newTemplateTitle' style="margin-left: 0px; width: 200px;"><span style="">Template Name </span></label><br /><input id="createTemplateTitle" style="width:340px;"/>
                    <label id='newTemplateWidth' style="margin-left: 0px; width: 200px"><span style="">Template Width </span></label><br /><input id="createTemplateWidth" type="number" style="width:340px;"/>
                    <label id='newTemplateHeight' style="margin-left: 0px; width: 200px"><span style="">Template Height </span></label><br /><input id="createTemplateHeight" type="number" style="width:340px;"/>
                </div>
                <div style="margin-top: 20px;">
                    <input id="submit" type="submit" style="font-size: small;" value="Create Project" class="button-primary button-large"/>
                    <p id="newTemplateWarning" class="dashicons dashicons-warning" data-toggle="tooltip"/>
                </div>
            </div>
        </form>
    </div>
</div>
<div style="overflow: hidden;" id="filters">
    <!-- Create the list of tabs that the user can select -->
    <input type="text" id="projectTitleEditor" placeholder="Enter Project Title" maxlength="100" title="Project Title"/><br />
    <div class="topNotification" id="saveBox" style="display: none;">Your project has been saved</div>
    <div style="display: inline-block; position: relative; width: 100%;">
    <!-- Sooo, I hate CSS.  The second tab button needs to be here so that it displays
        on the same line.  It also needs to be absolute so the tabs show up on the same
        line. -->
        <!-- <div id="tabLeft" class="tabButton" style="width: 25px;" data-bind="visible: scrollOverflow()">&#60;</div>
        <div id="tabRight" class="tabButton" style="position: absolute; width: 25px; left: 656px" data-bind="visible: scrollOverflow()">&#62;</div> -->


        <!-- Was style="position: relative; left: 25px;" -->
        <ul id="folders" class="folders" style="width: 100%; display: table;" data-bind="foreach: tabs,
                    sortableList: tabs">
            <li id="tabNames" style="position: relative;  display: table-cell; width:20%; height:45px; vertical-align: middle; text-align: center;" data-bind="
                        attr: { class: $data.imageClass},
                        css: { selected: $data == $root.chosenId() },
                        visible: $data.active(),
                        click: $root.goToTab">
                <!-- Need to have a span and img to prevent the data-bind overwriting the image.-->

                <span data-bind="text: $data.name"></span>
                <!-- TODO: Does the image import need to be something we made? -->
                <!-- <img id="closeTab" class="closeTab" data-bind="click: $root.deactivateTab" src="https://cdn4.iconfinder.com/data/icons/geomicons/32/672366-x-128.png"/>-->
            </li>
            <!-- Gibberish to prevent ko interpretation ko if: ($index() === ($root.tabs().length - 1))
            <li data-bind="click: $root.addTabsDialog">+</li>
            <!-- /ko -->
        </ul>
    </div>
    <!-- Space for the divs for each of the tabs to display their functionality -->
    <div class="clearfix" data-bind="foreach: tabs">
        <div data-bind="html: $data.html,
                    slideVisible: ($data == $root.chosenId() && $data.active())"></div>
    </div>
    <div id="chooseTabs" title="Available Tabs" style="display:none">
        <select id="selectable" data-bind="foreach: deactiveTabs,
                    visible: inactive(),
                    clickableSelect: deactiveTabs">
            <option data-bind="text: $data.name"></option>
        </select>
        <div class="noTabs" data-bind="visible: !inactive()">Sorry...  It seems we're fresh out of additional tabs</div>
    </div>
</div>

<div id="sendErrorDialog" title="Report Error to DigiWidgets?" style="display: none;">
    <p>If you would like to provide a description of your problems, please enter it here:</p>
    <textarea cols="100" rows="5" id="sendErrorText"></textarea>
    <br />
    <p><strong>NOTE:</strong> Clicking 'Send Report' will send the description plus error logs. <a href="javascript:$('#errorLogsView').toggle();">Click here to view the error logs</a></p>
    <textarea  cols="100" rows="5" disabled id="errorLogsView"></textarea>
</div>

<div id="previewImageDialog" style="display: none;">
    <img>
</div>

<div id="canvasDimmensionDisplay">
    <span class="dimmensionDisplay"></span><br>
    <div style="display: inline-block;">
        <canvas id="canvas" style="border:2px solid #000000;">
        </canvas>
        <div class="fastActionContainer" id="fastActionContainerID" style="display: none; left: 0px; top: 0px; vertical-align: top;">
            <h1 class="actionToolLabel" style="z-index: 0;"><span>Tools</span></h1>
            <div class="col-xs-6 text-left">
                <div class="fastActionButton" id="zoomInButton" title="Zoom In" onclick="ImageFunctions.zoomInFunction()"><span class="dashicons dashicons-plus"></span></div>
                <div class="fastActionButton" id="forwardToolButton" title="Bring Forward" onclick="ImageFunctions.upFunction()"><span class="dashicons dashicons-arrow-up-alt2"></span></div>
                <div class="fastActionButton" id="frontToolButton" title="Bring to Front" onclick="ImageFunctions.topFunction()"><span class="dashicons dashicons-upload"></span></div>
                <div class="fastActionButton" id="centerToolButton" title="Center Image" onclick="ImageFunctions.centerFunction()"><span class="dashicons dashicons-align-center"></span></div>
                <div class="fastActionButton" id="flipVToolButton" title="Flip Vertical" onclick="ImageFunctions.flipYFunction()"><span class="dashicons dashicons-image-flip-vertical"></span></div>
                <div class="fastActionButton" id="showFiltersControl" title="Filter Control" onclick="ImageFunctions.showFilters()"><span class="dashicons dashicons-admin-customizer"></span></div>
                <div class="fastActionButton disabled" id="textButton" title="Insert Text" disabled="true">T</div>
            </div>

            <div class="col-xs-6 text-right">
                <div class="fastActionButton" id="zoomOutButton" title="Zoom Out" onclick="ImageFunctions.zoomOutFunction()"><span class="dashicons dashicons-minus"></span></div>
                <div class="fastActionButton" id="backwardToolButton" title="Send Backward" onclick="ImageFunctions.downFunction()"><span class="dashicons dashicons-arrow-down-alt2"></span></div>
                <div class="fastActionButton" id="backToolButton" title="Send to Back" onclick="ImageFunctions.bottomFunction()"><span class="dashicons dashicons-download"></span></div>
                <div class="fastActionButton" id="transformToolButton" title="Transform" onclick="ImageFunctions.toggleTransform()"><span class="dashicons dashicons-image-rotate-right"></span></div>
                <div class="fastActionButton" id="flipHToolButton" title="Flip Horizontal" onclick="ImageFunctions.flipXFunction()"><span class="dashicons dashicons-image-flip-horizontal"></span></div>
                <div class="fastActionButton" id="borderToolButton" title="Border" onclick="ImageFunctions.toggleBorder()"><span class="dashicons dashicons-format-image"></span></div>
            </div>
            <div id="transformToolOptions" style="display: none; position: absolute; width: 200px;">
                <div class="group">
                    <h3>Resize</h3>
                    <div id="imageScaleContainer" class="filter-topLabel filter-label transformTabs"><span>Size </span><input type="number" style="width: 90px;" id="imageScale" min="1.00" onclick="this.select();"/>%</div>
                </div>
                <div class="group">
                    <h3>Rotate</h3>
                    <div class="filter-topLabel filter-label transformTabs"><span>Angle </span><input type="number" id="imageRotate" style="width: 90px;" min="0.00" max="360.00" onclick="this.select();"/>&deg;</div>
                </div>
            </div>
            <div id="borderToolOptions" style="position: absolute; width: 150px; display: none;">
                <div class="borderOptionButton borderOptions" id="borderImageWidth" title="Image Border">
                    <p>Image Border</p>
                    <span title="Image Border Width" style="display: inline-block; width: 80px;"><input type="number" min="0" id="borderImageWidthValue" style="line-height: 0; width: 55px;"><span class="dashicons dashicons-yes" onclick="ImageFunctions.applyImageBorder()"></span></span>
                    <input type='text' id="borderImageStyleValue">
                </div>
                <hr>
                <div class="borderOptionButton borderOptions" id="borderCanvasWidth" title="Canvas Border">
                    <p>Canvas Border</p>
                    <span title="Canvas Border Width" style="display: inline-block; width: 80px;"><input type="number" min="0" id="borderCanvasWidthValue" style="line-height: 0; width: 55px;"><span class="dashicons dashicons-yes" onclick="ImageFunctions.applyCanvasBorder()"></span></span>
                    <input type='text' id="borderCanvasStyleValue">
                </div>
            </div>
            <div id="textOptions" style="position: absolute; width: 250px; display: none;">
                <div class="text-container bootstrap-scope">
                    <div id="toolbar">

                        <div class="btn-group" style="display: inline-block;">
                            <div style="display: inline-block; vertical-align: middle;">
                                <input id="font-size" type="number" class='form-control control-prop' data-control="font-size" placeholder="5" value="40" min="5" max="500" style="width:75px; color: #000000;">
                            </div>

                            <div id="font-family" title="Font family" style="height:34px; display: inline-block; margin: 0px; vertical-align: middle;">
                                <select type="button" class="btn btn-default dropdown-toggle font-family-list" data-toggle="dropdown" style="width: 155px; height: 34px;">
                                </select>
                            </div>
                        </div>

                        <div class="btn-group" id="font-style" style="border-radius: 0px;">
                            <button class="btn btn-default control-toggle" data-control="bold"><i class="fa fa-bold"></i></button>
                            <button class="btn btn-default control-toggle" data-control="italic"><i class="fa fa-italic"></i></button>
                            <button class="btn btn-default control-toggle" data-control="underline"><i class="fa fa-underline"></i></button>
                        </div>

                        <div class="btn-group" style="width: 100%;">
                            Text Color: <div style="float: right;"><input id="text-fill-color"></div>
                        </div>

                        <div class="btn-group" style="width: 100%;">
                            Text Background: <div style="float: right;"><input id="text-background-color"></div>
                        </div>

                        <div class="btn-group" style="width: 100%;">
                            Line Height: <div style="float: right;">
                                <input id="font-line-height" type="number" class='form-control control-prop' placeholder="5" value="1.16" min=".1" max="4" step="0.01" style="width:75px; color: #000000;">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <div>
        <input type="image" id="inline-btn" style="position: relative; border: none; padding: 0; visibility: hidden; z-index: 9991;" onclick="ImageFunctions.removeImages()" value="Remove">
        <div style="width:500px;">
            <input id="save" type="button" style="font-size: small; margin-left:0px;" value="Save Project" class="button-primary button-large" onclick="ImageFunctions.exportAndSaveCanvasFunction('save')"/>
            <input id="preview" type="button" style="font-size: small; margin-left:15px;" value="Preview Project" class="button-primary button-large" onclick="ImageFunctions.exportAndViewFunction()"/>
            <input id="closeProjectButton" type="button" style="font-size: small; margin-left: 15px;" value="Back to Projects" class="button-primary button-large" onclick="ImageFunctions.projectCloseFunction()"/>
        </div>
    </div>

    <div id="filter-controls" style="display: none; vertical-align:top; background:#F0F0F0; position: absolute;">
        <!--filter controls-->
        <div id="filter-controls-left" class="filter-control-panel" style="padding: 0px 10px 10px 15px;  border:1px solid; display:inline-block;">
            <h3 style="text-align: center; margin: 4px;">Filters</h3>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="grayscale" type="checkbox"><span>Grayscale</span></div>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="invert" type="checkbox"><span>Invert</span> </div>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="sepia" type="checkbox"><span>Sepia</span></div>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="sepia2" type="checkbox"><span>Sepia2</span></div>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="brightness" type="checkbox"><span>Brightness</span></div>
            <div id="brightnessOptions" class="optionContainer">
                <div class="filter-label" style="padding: 5px;"><span style="padding-left: 3em; font-size: 100%;">Value</span><input class="filter-slider" id="brightness-value" value="0" min="0" max="255" type="range"></div>
            </div>
            <div class="filter-topLabel filter-label"><input class="filter-checkbox" id="contrast" type="checkbox"><span>Contrast</span></div>
            <div id="contrastOptions" class="optionContainer">
                <div class="filter-label" style="padding: 5px;"><span style="padding-left: 3em; font-size: 100%;">Value</span><input class="filter-slider" id="contrast-value" value="1.00" min="0.3" max="2.5" step="0.01" type="range"></div>
            </div>
        </div>
        <!-- filters control end -->
    </div>
    <div id="fvBanner" class="banner" onclick="ImageFunctions.buyNow()"></div>
</div>
</div>
</body>
</html>