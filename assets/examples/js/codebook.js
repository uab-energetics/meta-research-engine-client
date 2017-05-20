/*!
 * bigdata (https://uab-energetics.github.io/bigdata-app/html/)
 * Copyright 2017 chrisrocco
 * Licensed under the Themeforest Standard Licenses
 */
(function (document, window, $) {
    'use strict';

    $(document).ready(function () {
        Site.run();

        // fetch list of projects from the server
        var pr = DataService.loadCodeBook();
        pr.success( function( data ){
            console.log( "from server", data );
            var projectDropdownItemTemplate = $("#projectDropdownItemTemplate").html().trim();
            var projectDropdownOutlet = $("#projectDropdownOutlet");

            render( data[0] );
            for (var i = 0; i < data.length; i++) {
                var object = data[i];
                var newItem = $( projectDropdownItemTemplate );
                newItem.html( object.project.name );
                projectDropdownOutlet.append( newItem );
                newItem.data( 'projectkey', 'test' );
            }

        });
        pr.error( function( err ){
            console.log( "server error", err );
        });
    });
})(document, window, jQuery);

function openProject( buttonElement ){

}

function render( projectStructure ){
    var domainTabsOutlet = $( "#domainTabs" );
    var panelsOutlet = $(".tab-content");
    domainTabsOutlet.empty();
    panelsOutlet.empty();
    /* Create Domain Tabs */
    var domainTabTemplate = $("#domainTab").html().trim();
    var domainBlockTemplate = $("#domain-block").html().trim();
    var variableTemplate = $("#variable").html().trim();

    for( var i = 0; i < study.length; i++ ){
        /* Create a domain tab */
        var domain = study[i];
        var newTab = $( domainTabTemplate );
        newTab.find(".domain-name").html( domain.name );
        newTab.find("i").addClass( domain.icon );
        newTab.attr("href", "#" + domain._key );
        domainTabsOutlet.append( newTab );

        /* Create a domain block */
        var newBlock = $( domainBlockTemplate );
        newBlock.attr("id", domain._key);
        panelsOutlet.append( newBlock );

        /* Fill the domain block with variable blocks */
        for( var j = 0; j < domain.fields.length; j++ ){
            var variable = domain.fields[j];
            var newVariable = $( variableTemplate );
            newVariable.find(".var-name").html( variable.name );
            newVariable.find(".icon").addClass( variable.icon );
            newVariable.find(".panel-title").attr("href", "#"+variable._key );
            newVariable.find(".panel-collapse").attr("id", variable._key );
            newVariable.find(".panel-body").html( variable.description_short + "<br><br>" + variable.description_long );
            newBlock.find(".panel-group").append( newVariable );
        }
    }
}

window.study = [
    {
        "_id": "domains/adaptation",
        "_key": "adaptation",
        "_rev": "_UyXaFRy--D",
        "description": "This is a time before the scientists actually start the experiment where they try to get the mice familiar with something known as the acclimation period.",
        "icon": "fa fa-calendar",
        "name": "Adaptation",
        "subdomains": [],
        "fields": [
            {
                "_key": "acclimationDuration",
                "_id": "variables/acclimationDuration",
                "_rev": "_UzRGwx2--N",
                "description_long": "Scientist say how long mice did something before the start of the experiment (examples: from weaning until 8 months would be reported 32, assuming four weeks per month; for the 1st week would be reported as 1; mice were adapted to the facility for 1-2 weeks before start would be reported as 1-2)",
                "description_short": "How many weeks did it last?",
                "icon": "fa fa-question",
                "name": "Acclimation Duration",
                "type": "number",
                "value": ""
            },
            {
                "_key": "acclimationPeriod",
                "_id": "variables/acclimationPeriod",
                "_rev": "_UzRGwx2--M",
                "description_long": "Describe what the scientists did to the mice before the experiment started. These statements may look like prior to the experiment, mice were maintained on a control diet for 2 weeks, or mice were allowed to acclimate for 1 week prior to receiving the treatment.",
                "description_short": "What did they do to the mice in the acclimation period?",
                "icon": "fa fa-question",
                "name": "Acclimation Period",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/age",
        "_key": "age",
        "_rev": "_UyXaFRy--O",
        "description": "The age of the mice at different points in the experiment",
        "icon": "fa fa-calendar-o",
        "name": "Age",
        "subdomains": [],
        "fields": [
            {
                "_key": "ageAtWeight",
                "_id": "variables/ageAtWeight",
                "_rev": "_UzRGwx6--T",
                "description_long": "The age of mice when the final weight was recorded can be presented in several ways. Sometimes they will just say (example: weights were taken at 18 weeks); sometimes you have to do math (example: if the age at start was 5 weeks, and the treatment lasted 12, then the age at final weight would be 17 weeks; if there was a 1 week acclimation period before starting treatment, it would be 18 weeks); sometimes, only a range is available (example: mice were started on treatment between 6 and 8 weeks old, and kept on treatment for 8 weeks is reported as 14-16).",
                "description_short": "How many days old were the mice when the final weight was recorded?",
                "icon": "fa fa-calendar-check-o",
                "name": "Age at Weight",
                "type": "number",
                "value": ""
            },
            {
                "_key": "ageAtStart",
                "_id": "variables/ageAtStart",
                "_rev": "_UzRGwx6--S",
                "description_long": "Scientists report how many weeks old the mice were when the experiment started. If there is an acclimation period, make sure to report only when the experiment started (example: five week old mice were allowed to acclimate for 1 week prior to being assigned to exercise or control  the age at start would be 6 weeks; seven week old mice adapted to the facility for 1-2 weeks before assignment would be 8-9).",
                "description_short": "How many days old were the mice when the experiment started?",
                "icon": "fa fa-calendar-check-o",
                "name": "Age at Start",
                "type": "number",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/facility",
        "_key": "facility",
        "_rev": "_UyXaFRy--M",
        "description": "The building where the mice were housed during the experiment.",
        "icon": "fa fa-home",
        "name": "Animal Facility",
        "subdomains": [],
        "fields": [
            {
                "_key": "facilityCountry",
                "_id": "variables/facilityCountry",
                "_rev": "_UzRGwx6--O",
                "description_long": "Scientists may mention the country where the animal facility is located (example: if at UAB, then this would be United States). Sometimes they do not say, but if all of the authors are from the same institution, then we can guess that they were in the country where the authors are.",
                "description_short": "What country is the building located in?",
                "icon": "fa fa-globe",
                "name": "Animal Facility Country",
                "type": "text",
                "value": ""
            },
            {
                "_key": "facilityName",
                "_id": "variables/facilityName",
                "_rev": "_UzRGwx6--M",
                "description_long": "Scientists mention the name of the animal facility where mice were housed (example: the University of Alabama at Birmingham).",
                "description_short": "The name of where the mice where housed.",
                "icon": "fa fa-home",
                "name": "Animal Facility Name",
                "type": "text",
                "value": ""
            },
            {
                "_key": "animalLocations",
                "_id": "variables/animalLocations",
                "_rev": "_UzRGwx6--P",
                "description_long": "When scientists say where mice were housed, they may mention one location or more than one location (example: Ohio State animal facility OR evaluated a three sites).",
                "description_short": "Were mice housed in different cities or states?",
                "icon": "fa fa-globe",
                "name": "Animal Locations",
                "type": "boolean",
                "trueOption": "Yes",
                "value": "",
                "falseOption": "No"
            },
            {
                "_key": "pathogenFreeEnvironment",
                "_id": "variables/pathogenFreeEnvironment",
                "_rev": "_UzRGwx6--Q",
                "description_long": "Its important to make sure the research animals do not get sick, both for their well-being and for the quality of the research. In some cases, the scientists need their to be no bacteria (sometimes called completely germ-free); other times, they just need to be sure there are not disease like influenza (and they will report this as specific pathogen free). Occasionally they will indicate that the facility was not germ free. Remember if they do not report a status, disable the field; dont assume its not germ free.",
                "description_short": "Did the mice live in a germ- or pathogen-free environment?",
                "icon": "fa fa-question",
                "name": "Germ- or Pathogen-Free Environment",
                "type": "select",
                "value": "",
                "options": [
                    "Completely germ-free",
                    "Specific pathogen-free",
                    "Not germ free"
                ]
            },
            {
                "_key": "facilityCityState",
                "_id": "variables/facilityCityState",
                "_rev": "_UzRGwx6--N",
                "description_long": "Scientists may mention the city where the animal facility is located (example: if at UAB, then this would be Birmingham, AL). Sometimes they do not say, but if all of the authors are from the same institution, then we can guess that they were in the city where the authors are.",
                "description_short": "City and state (if available) of facility location. e.g. Birminham, AL",
                "icon": "fa fa-globe",
                "name": "Animal Facility City and State",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/cage",
        "_key": "cage",
        "_rev": "_UyXaFRy--C",
        "description": "The scientists describe information about the type of cage conditions mice were housed in, such as cage type or air flow.",
        "icon": "fa fa-archive",
        "name": "Cage",
        "subdomains": [],
        "fields": [
            {
                "_key": "cageType",
                "_id": "variables/cageType",
                "_rev": "_UzRGwx2--H",
                "description_long": "Scientists say what type of cage mice were placed in (example: polycarbonate standard filter top cages = polycarbonate cages).",
                "description_short": "What type of cage were the mice housed in?",
                "icon": "fa fa-archive",
                "name": "Cage Type",
                "type": "select",
                "value": "",
                "options": [
                    "Open cages",
                    "Polycarbonate cages",
                    "Soft filter-top cages",
                    "Plastic pens",
                    "Microisolator cages",
                    "Other"
                ]
            },
            {
                "_key": "airCirculation",
                "_id": "variables/airCirculation",
                "_rev": "_UzRGwx2--I",
                "description_long": "Describes how air is exchanged in the animal facility or cages (example: ventilation rack system used or filter top cages).",
                "description_short": "What type of air circulation occurred?",
                "icon": "fa fa-",
                "name": "Air Circulation",
                "type": "text",
                "value": ""
            },
            {
                "_key": "changeFrequency",
                "_id": "variables/changeFrequency",
                "_rev": "_UzRGwx2--K",
                "description_long": "Describes how often the bedding material was changed (example: cages changed weekly would be weekly; cages changed every other day would be <7 days; terms like biweekly can mean every other week or twice per week, so read carefully to see if you can distinguish between the two definitions).",
                "description_short": "How often was the bedding material changed in days?",
                "icon": "fa fa-repeat",
                "name": "Change Frequency",
                "type": "number",
                "value": ""
            },
            {
                "_key": "enrichmentType",
                "_id": "variables/enrichmentType",
                "_rev": "_UzRGwx2--L",
                "description_long": "Scientists may say that mice were given material for hiding (example: a piece of PVC pipe), destruction (example: paper squares), or chewing (example: Nylabone).",
                "description_short": "What type of enrichment did they provide the mice with?",
                "icon": "fa fa-futbol-o",
                "name": "Enrichment Type",
                "type": "text",
                "value": ""
            },
            {
                "_key": "beddingMaterial",
                "_id": "variables/beddingMaterial",
                "_rev": "_UzRGwx2--J",
                "description_long": "Describes the type of material used to line the bottom of the cages (e.g. wood chips, sawdust, etc.)",
                "description_short": "What type of bedding material was used in the cages?",
                "icon": "fa fa-bed",
                "name": "Bedding Material",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/temperature",
        "_key": "temperature",
        "_rev": "_UysHfKG---",
        "description": "The temperature of the animal facility",
        "icon": "fa fa-sun-o",
        "name": "Climate",
        "subdomains": [],
        "fields": [
            {
                "_key": "temperatureRange",
                "_id": "variables/temperatureRange",
                "_rev": "_UzRGwx2--G",
                "description_long": "Scientists say the temperature of the animal room or facility (example: 221oC should be reported as 21  23; 22-24 oC should be reported as 22  24; 22 oC should be reported as 22). If it is reported in Fahrenheit, use an internet search to convert it to Celsius (example: type 73 Fahrenheit in Celsius into Google).",
                "description_short": "What was the range of temperature in Celsius?",
                "icon": "fa fa-thermometer-half",
                "name": "Temperature Range",
                "type": "range",
                "value": "",
                "minimum": 0,
                "maximum": 60
            },
            {
                "_key": "facilityHumidity",
                "_id": "variables/facilityHumidity",
                "_rev": "_UzRGwx2--E",
                "description_long": "Scientists say the percent humidity of the animal room or facility (example: 50% humidity should be reported as 50; humidity-controlled room 5510% should be reported as 45 - 65).",
                "description_short": "What was the humidity of the faciliity?",
                "icon": "fa fa-thermometer-half",
                "name": "Humidity",
                "type": "range",
                "value": "",
                "minimum": 0,
                "maximum": 75
            },
            {
                "_key": "constantTemperature",
                "_id": "variables/constantTemperature",
                "_rev": "_UzRGwx2--F",
                "description_long": "Scientists say whether the temperature was purposefully changed (variable) or was held constant during the experiment (example: temperature controlled between 25 and 27 degrees Celsius is Constant, even though there was a temperature range because they tried to hold it constant; mice were intermittently exposed to cold temperature is Changing).",
                "description_short": "Did the temperature stay the same, or did it change?",
                "icon": "fa fa-thermometer-half",
                "name": "Constant Temperature",
                "type": "boolean",
                "trueOption": "Constant",
                "value": "",
                "falseOption": "Changing"
            }
        ]
    },
    {
        "_id": "domains/diet",
        "_key": "diet",
        "_rev": "_UyXaFRy--G",
        "description": "Describes what the mice ate",
        "icon": "fa fa-cutlery",
        "name": "Diet",
        "subdomains": [
            {
                "_id": "domains/dietComposition",
                "_key": "dietComposition",
                "_rev": "_UyXbWse---",
                "description": null,
                "icon": "fa fa-cutlery",
                "name": "Diet Composition",
                "subdomains": [],
                "fields": []
            }
        ],
        "fields": [
            {
                "_key": "dietID",
                "_id": "variables/dietID",
                "_rev": "_UzRGwx2--Y",
                "description_long": "Scientists may write the catalog number of the diet they used to feed the mice (examples: Research Diets, D12451 should be reported as D12451; catalog ID 5bV8 would be reported as 5bV8)",
                "description_short": "What is the catalog number of the diet?",
                "icon": "fa fa-question",
                "name": "Vendor ID",
                "type": "text",
                "value": ""
            },
            {
                "_key": "dietVendorCity",
                "_id": "variables/dietVendorCity",
                "_rev": "_UzRbAGa---",
                "name": "Vendor City/State",
                "description_short": "What city and state (if available) is the company or lab located in? (e.g. Birmingham, AL)",
                "icon": "fa fa-question",
                "type": "text",
                "value": "",
                "description_long": "Scientist may write the city where the company or lab is located after mentioning the name of the company when describing the diet (example: Research Diets, Inc.; New Brunswick, NJ is reported as New Brunswick, NJ; Beijing, China is reported as Beijing; Purina/Test Diet (St. Louis MO) is reported as St. Louis, MO)."
            },
            {
                "_key": "dietType",
                "_id": "variables/dietType",
                "_rev": "_UzRGwx2--X",
                "description_long": "Scientists write the type of diet mice were given (examples: low-fat control diet, high fat diet, standard lab diet, standard rodent chow)",
                "description_short": "What diet were the mice placed on?",
                "icon": "fa fa-question",
                "name": "Diet Type",
                "type": "text",
                "value": ""
            },
            {
                "_key": "feedingFrequency",
                "_id": "variables/feedingFrequency",
                "_rev": "_UzRGwx2--b",
                "description_long": "Were the mice fed ad libitum, which means food is freely available to them to consume as much as they want; paired, which means the amount available to one animal depends on the amount that another animal ate; or fixed, which means the amount offered to each animal is a set amount determined by the researchers.",
                "description_short": "How were the mice fed?",
                "icon": "fa fa-question",
                "name": "Feeding Design",
                "type": "select",
                "value": "",
                "options": [
                    "Ad libitum",
                    "Paired",
                    "Fixed"
                ]
            },
            {
                "_key": "dietVendor",
                "_id": "variables/dietVendor",
                "_rev": "_UzRGwx2--Z",
                "description_long": "Scientists write the name of the company where they ordered the diet for the mice (examples: Research Diets, Inc.; Ao-boxing Biotech Company Ltd.) or sometimes make it themselves (example: diets were made in-house from purified ingredients).",
                "description_short": "What company or lab did the scientists get the diet from?",
                "icon": "fa fa-question",
                "name": "Vendor Name",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/ethics",
        "_key": "ethics",
        "_rev": "_UyXaFRy--A",
        "description": "Describes the approval to perform research on mice.",
        "icon": "fa fa-thumbs-up",
        "name": "Ethical Statement",
        "subdomains": [],
        "fields": [
            {
                "_key": "ethicalStatement",
                "_id": "variables/ethicalStatement",
                "_rev": "_UzRGwx2--D",
                "description_long": "Scientists say whether they received approval from an Ethical Review Committee (examples: IACUC  Institutional Animal Care and Use Committee , IRB  Institutional Review Board, Institutional Guideline for the Care and Use of Laboratory Animals, Dutch Law on Animal Experimentation)",
                "description_short": "Did the scientists state that they received approval from an Ethical Review Committee (e.g. IACUC, IRB)?",
                "icon": "fa fa-question",
                "name": "Ethical Statement",
                "type": "boolean",
                "trueOption": "Yes",
                "value": "",
                "falseOption": "No"
            }
        ]
    },
    {
        "_id": "domains/exercise",
        "_key": "exercise",
        "_rev": "_UyXaFRy--L",
        "description": "The opportunity to be physically active using equipment.",
        "icon": "fa fa-bolt",
        "name": "Exercise",
        "subdomains": [],
        "fields": [
            {
                "_key": "exerciseFreq",
                "_id": "variables/exerciseFreq",
                "_rev": "_UzRGwx6--K",
                "description_long": "(examples: four sessions spanning 2 weeks would be 2-6 times per week; mice were housed in a cage in the presence of a non-load bearing hamster wheel means it was always around, so coded as continuously)",
                "description_short": "How often did the mice exercise or have access?",
                "icon": "fa fa-bolt",
                "name": "Exercise Frequency",
                "type": "select",
                "value": "",
                "options": [
                    "Continuously (ex: wheel in the cage",
                    "Multiple times per day",
                    "Daily",
                    "2-6 times per week",
                    "Weekly",
                    "2-4 times per month",
                    "Monthly",
                    "Less frequently than monthly"
                ]
            },
            {
                "_key": "exerciseType",
                "_id": "variables/exerciseType",
                "_rev": "_UzRGwx6--J",
                "description_long": "Describes the type of exercise mice were exposed to (examples: exercise wheel, rotarod, hamster wheel etc.).",
                "description_short": "What type of exercise did the mice perform?",
                "icon": "fa fa-bolt",
                "name": "Exercise Type",
                "type": "text",
                "value": ""
            },
            {
                "_key": "forcedExcecise",
                "_id": "variables/forcedExcecise",
                "_rev": "_UzRGwx6--L",
                "description_long": "Describes whether the mice were allowed to exercise as they wanted, such as having an exercise wheel in their cage (Available), or if they were forced to exercise, such as being placed on rodent treadmill (Forced).",
                "description_short": "Were the mice forced to excercise?",
                "icon": "fa fa-bolt",
                "name": "Forced Excercise",
                "type": "boolean",
                "trueOption": "Forced",
                "value": "",
                "falseOption": "Available"
            }
        ]
    },
    {
        "_id": "domains/geneticManipulation",
        "_key": "geneticManipulation",
        "_rev": "_UyXaFRy--K",
        "description": "Describes if the DNA of mice were changed.",
        "icon": "fa fa-heartbeat",
        "name": "Genetic Manipulation",
        "subdomains": [],
        "fields": [
            {
                "_key": "geneticManipulationType",
                "_id": "variables/geneticManipulationType",
                "_rev": "_UzRGwx6--I",
                "description_long": "",
                "description_short": "What type of genetic manipulation did mice go through?",
                "icon": "fa fa-heartbeat",
                "name": "Genetic Manipulation Type",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/housingDensity",
        "_key": "housingDensity",
        "_rev": "_UyXaFRy--I",
        "description": "Describes how many mice were placed in each cage.",
        "icon": "fa fa-home",
        "name": "Housing Density",
        "subdomains": [],
        "fields": [
            {
                "_key": "micePerCage",
                "_id": "variables/micePerCage",
                "_rev": "_UzRGwx6--D",
                "description_long": "(examples: single housed = 1, individually housed = 1, 9 -10 per cage is reported as 9-10, 5 mice/cage = 5)",
                "description_short": "How many were in a single cage?",
                "icon": "fa fa-hashtag",
                "name": "Mice Per Cage",
                "type": "number",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/lighting",
        "_key": "lighting",
        "_rev": "_UyXaFRy--E",
        "description": "The amount of time lights were turned on or off in the animal facility.",
        "icon": "fa fa-lightbulb-o",
        "name": "Lighting",
        "subdomains": [],
        "fields": [
            {
                "_key": "darkHours",
                "_id": "variables/darkHours",
                "_rev": "_UzRGwx2--Q",
                "description_long": "Scientist say how long the dark cycle lasted in hours (examples: a 12:12 light-dark cycle = 12; 14 h light/10 h dark = 10). Sometimes they will only report hours of light, in which case we assume a 24 hour day (example: if they say a 12 hour light cycle, we will assume 12 hours of dark).",
                "description_short": "How long were the lights turned off in hours?",
                "icon": "fa fa-lightbulb-o",
                "name": "Dark Hours",
                "type": "number",
                "value": ""
            },
            {
                "_key": "lightHours",
                "_id": "variables/lightHours",
                "_rev": "_UzRGwx2--P",
                "description_long": "Scientist say how long the light cycle lasted in hours (examples: a 12:12 light-dark cycle = 12; 14 h light/10 h dark = 14).",
                "description_short": "How long were the lights kept on in hours?",
                "icon": "fa fa-lightbulb-o",
                "name": "Light Hours",
                "type": "number",
                "value": ""
            },
            {
                "_key": "lightStartTime",
                "_id": "variables/lightStartTime",
                "_rev": "_UzRGwx2--R",
                "description_long": "Scientist say when the light cycle started (example: the light cycle started at 6 a.m., 0600h, or 06:00 would be reported as 0600 without a colon in the time)",
                "description_short": "What time were the lights turned on in military time?",
                "icon": "fa fa-lightbulb-o",
                "name": "Light Start Time",
                "type": "number",
                "value": ""
            },
            {
                "_key": "lightingSchedule",
                "_id": "variables/lightingSchedule",
                "_rev": "_UzRGwx2--O",
                "description_long": "Scientists say whether the amount of time the lights were turned on or off stayed the same (constant) or changed (variable) during the experiment (example: mice were housed with a 12 hour light/dark cycle is constant; mice were switched every two weeks to a light cycle starting at 6 AM or 12 AM is variable).",
                "description_short": "Was the light schedule constant or did it change?",
                "icon": "fa fa-lightbulb-o",
                "name": "Lighting Schedule",
                "type": "boolean",
                "trueOption": "Constant",
                "value": "",
                "falseOption": "Changing"
            }
        ]
    },
    {
        "_id": "domains/mice",
        "_key": "mice",
        "_rev": "_UyXaFRy--F",
        "description": "Describes details about the mice themselves, such as where they came from.",
        "icon": "fa fa-info",
        "name": "Mice",
        "subdomains": [],
        "fields": [
            {
                "_key": "miceVendorCity",
                "_id": "variables/miceVendorCity",
                "_rev": "_UzRXYZK---",
                "description_long": "Scientists may say where the company or lab is located right after they mention the name of the vendor (examples: Jackson Laboratory (Bar Harbor, ME) = Bar Harbor, ME; Experimental Animal Center, China Medical University, Shenyang, China = Shenyang). If only a country is listed, disable the field and enter the country in the Vendor Country field. (example: Charles River (Charles River Laboratories, France)).",
                "description_short": "What city and state (if available) is the company or lab located in? (e.g. Birmingham, AL)",
                "icon": "fa fa-globe",
                "name": "Vendor City and State",
                "type": "text",
                "value": ""
            },
            {
                "_key": "breed",
                "_id": "variables/breed",
                "_rev": "_UzRGwx2--W",
                "description_long": "Name given to separate different types of mice based on where they originated (e.g. C57BL/6, C57BL/6J, C57BL/6H).",
                "description_short": "What is the name of the mouse strain?",
                "icon": "fa fa-question",
                "name": "Breed/Background/Strain",
                "type": "text",
                "value": ""
            },
            {
                "_key": "vendorName",
                "_id": "variables/vendorName",
                "_rev": "_UzRGwx2--S",
                "description_long": "Scientists say the name of the company or lab where they got the mice from (examples: obtained from the Experimental Animal Center, China Medical University is reported as China Medical University; purchased from Jackson Laboratories = Jackson Laboratories)",
                "description_short": "What company or lab did the scientists get the mice from?",
                "icon": "fa fa-question",
                "name": "Vendor Name",
                "type": "text",
                "value": ""
            },
            {
                "_key": "sex",
                "_id": "variables/sex",
                "_rev": "_UzRGwx2--V",
                "description_long": "Scientists should say whether they used male or female rats, or a mix. Make sure if they used both male and female mice, but separated them in experiments, that you indicate that sex is a variable at the study arm level (example: male and female mice were each given the treatment is reported as male for one study arm and female for another).",
                "description_short": "Did the experiment use male, female, or mixture of sex mice?",
                "icon": "fa fa-venus",
                "name": "Sex",
                "type": "select",
                "value": "",
                "options": [
                    "Male",
                    "Female",
                    "Mixture"
                ]
            },
            {
                "_key": "vendorCountry",
                "_id": "variables/vendorCountry",
                "_rev": "_UzRGwx2--U",
                "description_long": "Scientists may say where the company or lab is located right after they mention the name of the vendor (examples: Jackson Laboratory (Bar Harbor, ME) = USA; Experimental Animal Center, China Medical University, Shenyang, China = China; Charles River (Charles River Laboratories, France) = France).",
                "description_short": "What country is the company or lab located in?",
                "icon": "fa fa-globe",
                "name": "Vendor Country",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/miceInTreatment",
        "_key": "miceInTreatment",
        "_rev": "_UyXaFRy--H",
        "description": "Reports the number of mice included in each treatment group in the experiment.",
        "icon": "fa fa-hashtag",
        "name": "Mice per Treatment",
        "subdomains": [],
        "fields": [
            {
                "_key": "sampleSize",
                "_id": "variables/sampleSize",
                "_rev": "_UzRGwx6--C",
                "description_long": "The number of mice given a particular treatment. This is not the total number in a study, but the number in each study arm. Sometimes it is reported as a range (example: 4-5 mice per treatment is reported as 4-5). The number of mice is not always the same between study arms, so one study arm might have 4 mice, while another could have 5. In that case, Sample Size needs to be moved to the study arms.",
                "description_short": "How many mice (sample size, n) were included in the treatment?",
                "icon": "fa fa-question",
                "name": "Sample Size",
                "type": "number",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/singleCompounds",
        "_key": "singleCompounds",
        "_rev": "_UyXaFRy--_",
        "description": "Describes if mice received a compound (e.g. drug, pharmaceutical, supplement, etc.) as a part of their treatment.",
        "icon": "fa fa-medkit",
        "name": "Single Compounds",
        "subdomains": [],
        "fields": [
            {
                "_key": "dosage",
                "_id": "variables/dosage",
                "_rev": "_UzRGwx2--C",
                "description_long": "Describe how much of the compound was given to each mouse. This can be described in a number of ways (examples: the compound was dissolved in water at a concentration of 20% g/v would be reported as 20% g/v; the animals were gavaged with 3 mg/kg body weight would be reported as 3 mg/kg body weight; 100IU of insulin were delivered i.p. would be reported as 100IU),",
                "description_short": "How much of the compound were mice given?",
                "icon": "fa fa-question",
                "name": "Dosage",
                "type": "text",
                "value": ""
            },
            {
                "_key": "routeOfAdministration",
                "_id": "variables/routeOfAdministration",
                "_rev": "_UzRGwx2--_",
                "description_long": "Scientists describe how they gave the mice a compound (examples: insulin was given i.p. means it was injected intraperitoneally; mice were given the drug p.o. by gavage, which means given per oral and was gavaged; the compound was spread topically is reported as topically).",
                "description_short": "How was the compound given to the mice",
                "icon": "fa fa-question",
                "name": "Route of Administration",
                "type": "select",
                "value": "",
                "options": [
                    "Injected",
                    "Water",
                    "Food",
                    "Topically (on the bodys surface",
                    "Gavage (forced into stomach)"
                ]
            },
            {
                "_key": "compoundName",
                "_id": "variables/compoundName",
                "_rev": "_UzRGwx2--A",
                "description_long": "Scientists describe what they gave (examples: acetaminophen; compound GSK-86473; antibiotic). If it appears to be a nutrient and is part of food or drink, consider moving it to the diet category (example: glucose is a compound, but is typically considered part of the diet; phytosterols, although they exist in food, are typically given like a drug).",
                "description_short": "What is the name of the compound used?",
                "icon": "fa fa-question",
                "name": "Compound Name",
                "type": "text",
                "value": ""
            },
            {
                "_key": "compoundFrequency",
                "_id": "variables/compoundFrequency",
                "_rev": "_UzRGwx2--B",
                "description_long": "How frequently the animal received the compound. (examples: the compound was dissolved in the drinking water means that it was around all the time, so it was continuously; the first pellets had the treatments put on them, and after the animals completed these they received the rest of their food means that they got the compound daily; animals were injected every Wednesday means they received it weekly",
                "description_short": "How often was the compound given?",
                "icon": "fa fa-repeat",
                "name": "Frequency",
                "type": "select",
                "value": "",
                "options": [
                    "Continuously (such as in water)",
                    "Multiple times per day",
                    "Daily",
                    "2-6 times per week",
                    "Weekly",
                    "2-4 times per month",
                    "Monthly",
                    "Less frequently than monthly"
                ]
            }
        ]
    },
    {
        "_id": "domains/surgery",
        "_key": "surgery",
        "_rev": "_UyXaFRy---",
        "description": "Describes if mice went through a surgical procedure.",
        "icon": "fa fa-user-md",
        "name": "Surgery",
        "subdomains": [],
        "fields": [
            {
                "_key": "surgeryType",
                "_id": "variables/surgeryType",
                "_rev": "_UzRGwx2---",
                "description_long": "Describe what type of surgery the mice underwent (examples: ovariectomy, Roux-en-Y gastric bypass, cardiac stent).",
                "description_short": "What type of surgery was performed on the mice?",
                "icon": "fa fa-question",
                "name": "Surgery Type",
                "type": "text",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/treatmentDuration",
        "_key": "treatmentDuration",
        "_rev": "_UyXaFRy--N",
        "description": "How long the treatment lasted during the experiment.",
        "icon": "fa fa-clock-o",
        "name": "Treatment Length",
        "subdomains": [],
        "fields": [
            {
                "_key": "daysOnTreatment",
                "_id": "variables/daysOnTreatment",
                "_rev": "_UzRGwx6--R",
                "description_long": "Scientists say how long the experiment lasted (examples: mice were started on a 28-day treatment is reported as 4 weeks; the experiment was 8 weeks in duration is reported as = 8; the mice were euthanized after 8 or 19 weeks on treatment is an indication that there are two separate study arms here, with one group studied for 8 weeks and the other for 19 weeks).",
                "description_short": "How many weeks did the mice recieve treatment?",
                "icon": "fa fa-calendar",
                "name": "Weeks on Treatment",
                "type": "number",
                "value": ""
            }
        ]
    },
    {
        "_id": "domains/weight",
        "_key": "weight",
        "_rev": "_UyXaFRy--J",
        "description": "Reports the final weight of the mice",
        "icon": "fa fa-balance-scale",
        "name": "Weight",
        "subdomains": [],
        "fields": [
            {
                "_key": "errorOfMeasurmentType",
                "_id": "variables/errorOfMeasurmentType",
                "_rev": "_UzRGwx6--H",
                "description_long": "Scientist say what type of error measurement they used. This can be represented as S.D. or sd for standard deviation; S.E. or s.e.m. for standard error of the mean; or CI for confidence interval. Sometimes the type of error is shown right next to the numbers (example: 22  3 s.d.); other times there is a statistics or analysis section in the paper that says what they used throughout the paper (example: values are reported as means and standard deviations). If not reporting a final weight, do not report the error type.",
                "description_short": "What type of error of measurement was reported?",
                "icon": "fa fa-question",
                "name": "Error of Measurement Type",
                "type": "select",
                "value": "",
                "options": [
                    "Standard Deviation (S.D. or s.d.)",
                    "Standard Error or Standard Error of the Mean (s.e. of S.E.M.",
                    "Confidence Interval (C.I.)"
                ]
            },
            {
                "_key": "averageFinalWeight",
                "_id": "variables/averageFinalWeight",
                "_rev": "_UzRGwx6--F",
                "description_long": "The weight as reported in the paper. If no numbers are reported, then disable this field. Hopefully numbers will be reported in a table or text. Do not estimate the numbers from figures. Do not report weights as differences from baseline or differences between groups.",
                "description_short": "What was the last reported average (mean) weight of the mice in grams?",
                "icon": "fa fa-scale",
                "name": "Average Final Weight",
                "type": "number",
                "value": ""
            },
            {
                "_key": "whereReported",
                "_id": "variables/whereReported",
                "_rev": "_UzRGwx6--E",
                "description_long": "Weight can be reported in several ways. It can be reported in a table as numbers; in the text as numbers; in a figure, such as a bar chart or a line graph; or mentioned in generic terms in the text (example: weight did not differ between groups), without numbers. Sometimes it is in multiple places, or reported only as differences over time or between groups. And, sometimes, it is not reported at all.",
                "description_short": "",
                "icon": "fa fa-question",
                "name": "Where in the paper is weight reported?",
                "type": "select",
                "value": "",
                "options": [
                    "A table with numbers",
                    "Text, with numbers reported",
                    "In a figure",
                    "Mentioned generally in the text",
                    "Presented as differences from baseline",
                    "Presented as differences between groups"
                ]
            },
            {
                "_key": "errorOfMeasurmentValue",
                "_id": "variables/errorOfMeasurmentValue",
                "_rev": "_UzRGwx6--G",
                "description_long": "Scientist may report means followed by a  sign or parentheses and a number to show the error of measurement (example: 22  3 is reported as 3; 22 (3) is also reported as 3). If there is more than one number, then report them both with a dash or hyphen (example: 22[19,25] is reported as 19-25). If not reporting a final weight, do not report the error here.",
                "description_short": "What was the standard deviator (S.D.) or standard error (S.E.) of the last reported average (mean) weight of the mice in grams?",
                "icon": "fa fa-question",
                "name": "Error for the Final Weight",
                "type": "number",
                "value": ""
            }
        ]
    }
];