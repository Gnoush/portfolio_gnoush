/////////////////////////////////VAR
/**
 * JSON Object containing all of Gnoush projects
 *
 * Is populated at runtime when a projects page is displayed
 *
 * contains JSON objects, of the current format:
 * "projectName": {
 *     "isDisplayed": @type {Boolean},
 *     "templateName": @type {String},
 *     "url": @type {String}
 * }
 *
 * @type {JSON}
 */
var projects = [];

/**
 * ordered Array which contains index of all JSON objects in projects
 *
 * Is populated at runtime when a projects page is displayed
 *
 * @type {string[]}
 */
var projectKeys = [];

/**
 * index of the currently displayed project in ordered array projectKeys
 *
 * @type {number}
 */
var loc = 0;

/////////////////////////////////FUNCTIONS
/**
 * Initialize the dynamic navigation between projects
 *
 * On projects pages, two CTA arrows allow to dynamically load the previous or next project,
 * and replace the current page content with the retrieved datas
 *
 * it flag the current displayed project, and set the onClick Event Listeners on the CTAs
 */
function initDynamicNavigationBetweenProjects() {
    projects[currentTemplate].isDisplayed = true;

    $(".arrow-icon-container.arrow-project-nav-left").click(function (e) {
        e.preventDefault();
        setPreviousProject();
    });

    $(".arrow-icon-container.arrow-project-nav-right").click(function (e) {
        e.preventDefault();
        setNextProject();
    });
}

/**
 * If for any obscure reason the projects resource file cannot be loaded,
 * add these dummies links to avoid useless buttons
 */
function setNavigationHrefFallback() {
    $(".arrow-project-nav-left").attr("href", permalink + "/dumbo/");
    $(".arrow-project-nav-right").attr("href", permalink + "/glastonbury/");
}

/**
 * Change the appropriate values and load the selected template when clicking the Previous Arrow
 *
 * When clicking the Previous CTA, set the current project display status to false,
 * get the previous project in projects (or the last one if currently displayed was the first one),
 * and initiate the newly selected template loading
 */
function setPreviousProject() {
    projects[currentTemplate].isDisplayed = false;

    if (loc > 0) currentTemplate = projects[projectKeys[loc - 1]].templateName;
    else currentTemplate = projects[projectKeys[projectKeys.length - 1]].templateName;

    projects[currentTemplate].isDisplayed = true;
    loc = projectKeys.indexOf(projects[currentTemplate].templateName);
    loadProjectPage();
}

/**
 * Change the appropriate values and load the selected template when clicking the Next Arrow
 *
 * When clicking the Next CTA, set the current project display status to false,
 * get the next project in projects (or the first one if currently displayed was the last one),
 * and initiate the newly selected template loading
 */
function setNextProject() {
    projects[currentTemplate].isDisplayed = false;

    if (loc < (projectKeys.length - 1)) currentTemplate = projects[projectKeys[loc + 1]].templateName;
    else currentTemplate = projects[projectKeys[0]].templateName;

    projects[currentTemplate].isDisplayed = true;
    loc = projectKeys.indexOf(projects[currentTemplate].templateName);
    loadProjectPage();
}

/**
 * Load the currently selected project's template and replace the actual window content with it
 *
 * when called, will execute an asynchronous request to fetch the currently displayed project's template
 *     - If the response is an error, log it and do nothing.
 *     - If the response is a success, replace the page content (between header and footer) by the requested template
 */
function loadProjectPage() {
    $.ajax(stylesheetDirectory + "/html/" + projects[currentTemplate].templateName + ".html", {
        async: true,
        type: "GET",
        crossDomain: true,
        error: function (jqXhr, message, error) {
            console.log("Error: " + message);
            console.log(error.toString());
        },
        success: function (data, status, jqXhr) {
            targetedString = "<?php echo get_bloginfo('stylesheet_directory'); ?>";
            regEx = new RegExp(targetedString.replace(/[|\\{}()[\]^$+*?.]/g, '\\$&'), 'g');
            content = data.replace(regEx, stylesheetDirectory);

            $(".project-wrapper").remove();
            $(".project-details").remove();
            $("section.direction").first().after(content);
        },
        beforeSend: function (jqXhr, settings) {
            //TODO: add Loaoer init
        },
        complete: function (jqXhr, status) {
            //TODO: add Loaoer finish
        }
    })
}

/**
 * Using the received parameters, build and send a mail to agnes.guinin@gmail.com
 *
 * @param name of the mail's sender
 * @param companyName of the mail's sender
 * @param status of the request
 * @param email of the mail's sender
 * @param phone of the mail's sender
 * @param message attached to the mail
 * @returns {boolean}
 */
function sendContactForm(name, companyName, status, email, phone, message) {
    $.ajax(stylesheetDirectory + "/contact.php", {
        async: true,
        type: "POST",
        data: {
            "name": name,
            "companyName": companyName,
            "status": status,
            "email": email,
            "phone": phone,
            "message": message
        },
        dataType: "jsonp",
        crossDomain: true,
        error: function (jqXhr, message, error) {
            console.log("Error: " + message);
            console.log(error.toString());
        },
        success: function (data, status, jqXhr) {
            console.log(status);
            console.log(data);
        }
    });

    return true;
}

/////////////////////////////////RUNTIME
$(document).ready(function () {

    if (typeof currentTemplate !== "undefined") {
        //retrieve Projects lists from JSON resource
        $.getJSON(stylesheetDirectory + "/projects.json")
            .done(function (data) {
                projects = data;
                projectKeys = Object.keys(projects).sort();
                loc = projectKeys.indexOf(projects[currentTemplate].templateName);

                initDynamicNavigationBetweenProjects();
            })
            .fail(function (jqXhr, message, error) {
                console.log("Error: " + message);
                console.log(error.toString());

                setNavigationHrefFallback();
            });
    } else {
        //on click on #contact_submit_action, init a mail reation using the Contact Form inputs' values
        $("#contact_submit_action").click(function (e) {
            e.preventDefault();

            sendContactForm(
                $("input[name=name]").val(),
                $("input[name=companyName]").val(),
                $("input[name=status]").val(),
                $("input[name=email]").val(),
                $("input[name=phone]").val(),
                $("textarea[name=message]").val()
            )
        });
    }
});