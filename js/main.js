////////////////////////////////CONST

/**
 *
 *
 * @type {{"projectName": {isDisplayed: boolean, templateName: string}}}
 */
var projects = {
    "3iesketch": {
        "isDisplayed": false,
        "templateName": "3iesketch",
        "url": "3ie-sketches"
    },
    "cityhunter": {
        "isDisplayed": false,
        "templateName": "cityhunter",
        "url": "city-hunter"
    },
    "dumbo": {
        "isDisplayed": false,
        "templateName": "dumbo",
        "url": "dumbo"
    },
    "fibre": {
        "isDisplayed": false,
        "templateName": "fibre",
        "url": "fibre-2"
    },
    "glastonbury": {
        "isDisplayed": false,
        "templateName": "glastonbury",
        "url": "glastonbury"
    },
    "hp": {
        "isDisplayed": false,
        "templateName": "hp",
        "url": "harry-potter"
    },
    "illus": {
        "isDisplayed": false,
        "templateName": "illus",
        "url": "illustrations"
    },
    "logos": {
        "isDisplayed": false,
        "templateName": "logos",
        "url": "logos"
    },
    "melidrama": {
        "isDisplayed": false,
        "templateName": "melidrama",
        "url": "melidrama-2"
    },
    "momo": {
        "isDisplayed": false,
        "templateName": "momo",
        "url": "momo"
    },
    "noel": {
        "isDisplayed": false,
        "templateName": "noel",
        "url": "noel"
    },
    "popups": {
        "isDisplayed": false,
        "templateName": "popups",
        "url": "popups"
    },
    "popups2": {
        "isDisplayed": false,
        "templateName": "popups2",
        "url": "popups-2"
    },
    "projets3ie": {
        "isDisplayed": false,
        "templateName": "projets3ie",
        "url": "projets-3ie"
    },
    "queenofhearts": {
        "isDisplayed": false,
        "templateName": "queenofhearts",
        "url": "queen-of-hearts"
    },
    "stayinshape": {
        "isDisplayed": false,
        "templateName": "stayinshape",
        "url": "stay-shape"
    },
    "tritus": {
        "isDisplayed": false,
        "templateName": "tritus",
        "url": "tritus-2"
    },
    "vector": {
        "isDisplayed": false,
        "templateName": "vector",
        "url": "vector"
    },
    "wonderball": {
        "isDisplayed": false,
        "templateName": "wonderball",
        "url": "wonderball"
    },
};

/**
 *
 * @type {string[]}
 */
var projectKeys = Object.keys(projects).sort();

/**
 *
 * @type {number}
 */
var loc = projectKeys.indexOf(projects[currentTemplate].templateName);

/////////////////////////////////FUNCTIONS
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
    $.ajax("http://wordpress.local/wp-content/themes/gnoush/contact.php", {
        async: true,
        type: "post",
        data: {
            "name": name,
            "companyName": companyName,
            "status": status,
            "email": email,
            "phone": phone,
            "message": message
        },
        dataType: "json",
        crossDomain: true,
        error: function () {
            console.log("fail");
        },
        success: function () {
            console.log("win");
        }
    });

    return false;
}

/**
 *
 */
function initProjectDisplay() {
    //get Current template and actualize array of template's reference
    projects[currentTemplate].isDisplayed = true;
    setNextButton();
    setPreviousButton();

    //set OnClickEventListener
    //$(".arrow-project-nav-left").click(function (event) {
    //    setPreviousProject();
    //});

    //$(".arrow-project-nav-right").click(function (event) {
    //    setNextProject();
    //});
}

/**
 * Temporary function to init links at runtime
 */
function setPreviousButton() {
    if (loc > 0) $(".arrow-project-nav-left").attr("href", permalink + "/" + projects[projectKeys[loc - 1]].url + "/");
    else $(".arrow-project-nav-left").attr("href", permalink + "/" + projects[projectKeys[projectKeys.length - 1]].url + "/");
}

/**
 * Temporary function to init links at runtime
 */
function setNextButton() {
    if (loc < (projectKeys.length - 1)) $(".arrow-project-nav-right").attr("href", permalink + "/" + projects[projectKeys[loc + 1]].url + "/");
    else $(".arrow-project-nav-right").attr("href", permalink + "/" + projects[projectKeys[0]].url + "/");
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

/////////////////////////////////RUNTIME

$("#contact_submit_action").click(function () {

    console.log($("input[name=name]").text());

    sendContactForm(
        $("input[name=name]").text(),
        $("input[name=companyName]").text(),
        $("input[name=status]").text(),
        $("input[name=email]").text(),
        $("input[name=phone]").text(),
        $("input[name=message]").text()
    )
});