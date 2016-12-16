/*global ko, jQuery, ImageFunctions, fabric*/
// Custom bindings for knockout
/*
 * Creates necessary listener for a select element to fire every time an element is
 * selected.
 */
var $ = jQuery, model;
ko.bindingHandlers.clickableSelect = {
    init: function(element, valueAccessor, allBindings, viewModel, bindingContext) {
        'use strict';

        // Whenever the user selects something
        $(element).change(function() {
            viewModel.activateTabByName($(element).val());
            // Reset the select after every selection
            $(element).val("Choose a tab...");
        });
    }
};

/*
 * Synchronizes a ko array with changes made using jQuery's sortable
 */
ko.bindingHandlers.sortableList = {
    init: function(element, valueAccessor, allBindings, viewModel, bindingContext) {
        'use strict';

        // Make the element sortable
        $(element).sortable({
            // Put in a placeholder for where the image is to be placed and change the point at which the placeholder is created
            placeholder: "ui-state-highlight",
            tolerance: "intersect",
            // Start is a failed attempt to remedy the issue with the css
            update: function(event, ui) {

                //retrieve our actual data item
                var item = ui.item.data();

                //figure out its new position
                var position = ko.utils.arrayIndexOf(ui.item.parent().children(), ui.item[0]);

                model.moveTabByName(ui.item.context.innerHTML, position);
            }
        });
    }
};

/*
 * Causes elements to change visibiltiy using the slideUp and slideDown functionality
 * of jQuery
 * This code directly taken from the KO tutorial website on custom bindings
 */
ko.bindingHandlers.slideVisible = {
    update: function(element, valueAccessor, allBindings) {
        // First get the latest data that we're bound to
        'use strict';
        var value = valueAccessor();

        // Next, whether or not the supplied model property is observable, get its current value
        var valueUnwrapped = ko.unwrap(value);

        // Grab some more data from another binding property
        var duration = allBindings.get('slideDuration') || 400; // 400ms is default duration unless otherwise specified

        // Now manipulate the DOM element
        if (valueUnwrapped === true) {
            $(element).slideDown(duration); // Make the element visible

        } else {
            $(element).slideUp(duration);   // Make the element invisible
        }
    }
};

/**
 * KO view model for the image editor
 */
function ImageFunctionViewModel () {
    'use strict';
    var self = this;
    // List of all tabs
    self.tabs = ko.observableArray();

    // List of tabs that have been deactivated
    self.deactiveTabs = ko.observableArray();

    // Needed as a default value for the select menu
    self.deactiveTabs.push({name: "Choose a tab..."});

    self.selected = ko.observable(null);

    // Keep track of a sorted list of the tabs
    self.sortedTabs = ko.computed(function() {
        // Create a copy of the array to prevent the actual tabs array from getting sorted
        var comp  = self.deactiveTabs().slice(0);

        return comp.sort(function (left, right) {
            return left.name.localeCompare(right.name);
        });
    });

    self.scrollOverflow = ko.observable(true);

    // Keep track of the number of active tabs
    self.inactiveCount = 0;
    self.inactive = ko.observable(false);
    self.chosenId = ko.observable();

    /*
     * Activates the given tab
     * @param tab - The tab to be activated
     * @return nothing
     */
    self.activateTab = function(tab) {
        tab.active(true);
        self.inactiveCount--;
        if (self.inactiveCount === 0) {
            self.inactive(false);
        }

        // Remove from the list of deactivated tabs
        self.deactiveTabs.remove(tab);

        // Check to see if scroll overflow has occurred
        self.scrollOverflow(self.checkScrollWidth());

    };

    /*
     * Finds the name of the given tab and activates it
     * @param tabName - Name of the tab to be activated
     * @return nothing
     */
    self.activateTabByName = function(tabName) {

        for (var i = 0; i < self.tabs().length; i++) {
            if (tabName === self.tabs()[i].name) {
                self.activateTab(self.tabs()[i]);
                return;
            }
        }
    };

    /*
     * Generic function for adding a new tab to the end of the current array
     * @param newTab - The tab to be added to the array of tabs
     * @return nothing
     */
    self._addTab = function(newTab) {

        // Place the new tab at the end
        self.tabs.push(newTab);
    };

    /*
     * Adds a tab to the array.  Note that unlike the activate function, this will
     * add another tab to
     * @param newTab - The tab to be added to the list of tabs
     * @param index - The index to add the new tab into the array at
     * @return nothing
     */
    self._addTabAtIndex = function(newTab, index) {
        self.tabs.splice(index, 0, newTab);

        self.chosenId(newTab);

        // Check to see if scroll overflow has occurred
        self.scrollOverflow(self.checkScrollWidth());
    };

    /**
     * Create a dialog to add new tabs
     * @return nothing
     */
    self.addTabsDialog = function() {

        $("#chooseTabs").dialog({
            // Make sure the height is the same when they open and close the thing.  Prevents the dialog box from becoming usefully large except at the user's behest
            height: 200,
            open: function() {
                $(this).css("height", this.height);
            },
            close: function() {
                this.height = $(this).css("height");
            }
        });
    };

    /**
     * Determines whether or not the current width of the tabs is greater than allowed
     * @return Boolean indicated whether or not the scroll width exceeds the limited size
     */
    self.checkScrollWidth = function() {

        // Get the scroll width.  Can't use a jQuery call.
        var scrollWidth = document.getElementById("folders").scrollWidth;

        if (scrollWidth <= 450) {
            return false;
        } else {
            return true;
        }
    };

    /*
     * Deactivates the tab that is currently selected
     * @param nothing
     * @return nothing
     */
    self.deactivateSelectedTab = function() {

        self.deactivateTab(self.chosenId());
    };

    /*
     * Changes the active value on the given tab, effectively removing it from the
     * display of the tabs
     * @param tab - The tab to be deactivated
     */
    self.deactivateTab = function(tab) {
        tab.active(false);
        self.inactiveCount++;
        if (self.inactiveCount > 0) {
            self.inactive(true);
        }

        // Add to the list of deactivated tabs
        self.deactiveTabs.push(tab);

        // Check to see if scroll overflow has ceased
        self.scrollOverflow(self.checkScrollWidth());

    };

    /*
     * Switches chosenId to the given tab, unless the tab is already selected, in which
     * case the chosenId defaults back to null.
     * @param tab - The tab that the chosenId will be set to
     * @return nothing
     */
    self.goToTab = function(tab) {

        if (tab === self.chosenId()) {
            self.chosenId(null);
            return;
        }

        self.chosenId(tab);
    };

    /*
     * Moves the tab indicated by the name to the given position.  Accomplishes this
     * by removing the tab from the array and then re-adding it.
     * @param name - Name of the tab to search for
     * @param position - New location to move the tab to
     * @return nothing
     */
    self.moveTabByName = function(name, position) {

        var tab;
        var i = 0;
        while (i < self.tabs().length) {
            if (self.tabs()[i].name === name) {
                tab = self.tabs()[i];
                break;
            }
            i++;
        }

        // If no tab has been found, don't try anything
        if (!tab) {
            return;
        }

        if (i > position) {
            self.removeTab(tab);
            self.addTabAtIndex(tab, position);
        } else if (i !== position) {
            self.removeTab(tab);
            self.addTabAtIndex(tab, position - 1);
        }
    };

    /*
     * Remove the tab from the array of tabs and reselect the first tab.  Perhaps
     * update this in the future to reselect the most recently selected tab?
     * @param Nothing
     * @return Nothing
     */
    self._removeTab = function(removeTab) {
        self.tabs.remove(removeTab);

        self.chosenId(self.tabs()[0]);
    };

    return self;

}

/**
 * Initializes the view model for ko.  Intended to be called at startup
 * @returns {ImageFunctionViewModel} The view model for KO
 * @private
 */
var _initializeKnockout = function() {
    'use strict';
    model = new ImageFunctionViewModel();
    ko.applyBindings(model);

    // Initialize the tabs for knockout.  Doing it here to ensure that the page is loaded before trying to add the
    // tabs
    model.tabs.push(
        {   name: "Add Images",
            html: "<div id='gallery' style='width:100%'>" +
            "<div id='upload-btn' style='border-width: 0px;' class='dashicons dashicons-plus-alt' title='Add Image'></div>" +
            "<ul id='sortable'></ul>" +
            "</div>" +
            "<div id = 'galleryButtonSet'>" +
            "<div id='galleryDelete' class='fastActionButton' title='Delete Image'><span class='dashicons dashicons-trash galleryDashicons'></span></div>" +
            "<div id='galleryCenter' class='fastActionButton' title='Center Image'><span class='dashicons dashicons-align-center galleryDashicons'></span></div>" +
            "</div>",
            imageClass: "dashicons-before dashicons-images-alt",
            active: ko.observable(true)
        });
    model.tabs.push(
        {   name: "Canvas Management",
            html: "<div id='canvasManagementTab' style='width: 100%; border-style: solid; border-width: 1px; text-align:center; height:92px;'><div style='display:inline-block; position: relative; top: 32px; padding-right: 15px;'><div id='templateLabel' style='float: left; line-height:30px; padding-right: 5px;'>Current Template:</div><select id='templateDropdown'><option disabled hidden selected value='''></option></select></div><div style='display:inline-block; position: relative; top: 32px; padding-left: 15px'><div id='canvasBackgroundLabel' style='float: left; line-height: 30px; padding-right: 5px;'>Canvas Background:</div><input type='text' id='backgroundColorPicker'/></div>",
            imageClass: "dashicons-before dashicons-camera",
            active: ko.observable(true)
        });
    model.tabs.push(
        {
            name: "Feedback",
            html: "<div id='feedbackTab' style='width: 100%; border-style: solid; border-width: 1px; text-align:center; height:92px;'><div style='width: 200px; display:inline-block; position: relative; top: 32px;'><a href='http://www.digiwidgets.com/feedback' target='_blank'><input type='button' class='button button-primary' value='Send Feedback' /></a></div><div id='sendErrorTab' style='width: 200px; display:inline-block; position: relative; top: 32px;'><input type='button' class='button button-primary' value='Send Error Report' /></div></div>",
            imageClass: "dashicons-before dashicons-testimonial",
            active: ko.observable(true)
        });
    model.chosenId(model.tabs()[0]);
    return model;
};
