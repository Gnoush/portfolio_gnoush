/////////////////////////////////VAR
/**
 *
 * @type {string[]}
 */
var projects = [];

/**
 *
 * @type {string[]}
 */
var projectKeys = [];

/**
 *
 * @type {number}
 */
var loc = 0;

/////////////////////////////////FUNCTIONS
/**
 *
 */
function initProjectDisplay() {
    //get Current template and actualize array of template's reference
    projects[currentTemplate].isDisplayed = true;
    console.log(loc);

    //set OnClickEventListener
    $(".arrow-icon-container.arrow-project-nav-left").click(function (e) {
        e.preventDefault();
        setPreviousProject();
        console.log(loc);
    });

    $(".arrow-icon-container.arrow-project-nav-right").click(function (e) {
        e.preventDefault();
        setNextProject();
        console.log(loc);
    });
}

/**
 * If for any obscure reason the projects resource file cannot be loaded,
 * add these dummies links to avoid non-working buttons
 */
function setNavigationHrefFallback() {
    $(".arrow-project-nav-left").attr("href", permalink + "/dumbo/");
    $(".arrow-project-nav-right").attr("href", permalink + "/glastonbury/");
}

/**
 *
 */
function setPreviousProject() {
    projects[currentTemplate].isDisplayed = false;

    if (loc > 0) currentTemplate = projects[projectKeys[loc - 1]].templateName;
    else currentTemplate = projects[projectKeys[projectKeys.length - 1]].templateName;

    projects[currentTemplate].isDisplayed = true;
    loc = projectKeys.indexOf(projects[currentTemplate].templateName);
}

/**
 *
 */
function setNextProject() {
    projects[currentTemplate].isDisplayed = false;

    if (loc < (projectKeys.length - 1)) currentTemplate = projects[projectKeys[loc + 1]].templateName;
    else currentTemplate = projects[projectKeys[0]].templateName;

    projects[currentTemplate].isDisplayed = true;
    loc = projectKeys.indexOf(projects[currentTemplate].templateName);
}

/**
 *
 *
 * @param name
 * @param companyName
 * @param status
 * @param email
 * @param phone
 * @param message
 * @returns {boolean}
 */
function sendContactForm(name, companyName, status, email, phone, message) {
    $.ajax(stylesheetDirectory + "contact.php", {
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
        error: function () {
            console.log("fail");
        },
        success: function () {
            console.log("win");
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

                initProjectDisplay();
            })
            .fail(function (xhrRequest, textStatus, error) {
                console.log("Error: " + textStatus);
                console.log(error.toString());

                setNavigationHrefFallback()
            });
    } else {
        //on click on #contact_submit_action, init a mail reation using the Contact Form inputs' values
        $("#contact_submit_action").click(function () {

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