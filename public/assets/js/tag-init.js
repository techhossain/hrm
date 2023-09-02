(function ($) {
    "use strict";

    $(document).ready(function () {
        /*-------------------------------------------------------
            Useful Variables
        ---------------------------------------------------------*/

        let maxBody = $("body");
        let leftNavTrigger = $(".open-nav-left");
        let leftNavWrapper = $(".left-nav-wrapper");
        let primaryNavLeft = $(".open-nav-primary-left");
        let primaryNavRight = $(".open-nav-primary-right");
        let primaryNavLeftIs = $(".primary-nav-list--left-wrapper");
        let primaryNavRightIs = $(".primary-nav-list--right-wrapper");

        /* Useful Variables End ---------------------------------*/

        /*--------------------------------------------------------
            Feather Icon
        ---------------------------------------------------------*/

        feather.replace();

        /*Feather Icon End --------------------------------------*/

        /*--------------------------------------------------------
            JQuery Date Picker
        ---------------------------------------------------------*/

        $(".datepicker").datepicker();
        $(".dateOtherMonth").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
        });
        $(".dateButtonBar").datepicker({
            showButtonPanel: true,
        });
        $(".dateMultiMonth").datepicker({
            numberOfMonths: 3,
            showButtonPanel: true,
        });
        $(".dateIcon").datepicker({
            showOn: "button",
            buttonText:
                '<span class="date-icon"><i class="las la-calendar-alt"></i></span>',
        });
        $(".bootsDate").bootstrapMaterialDatePicker({
            weekStart: 0,
            time: false,
        });
        $(".bootsTime").bootstrapMaterialDatePicker({ date: false });
        $(".bootsDateTime").bootstrapMaterialDatePicker({
            format: "dddd DD MMMM YYYY - HH:mm",
        });

        /*JQuery Date Picker End --------------------------------------*/

        /*-------------------------------------------------------
            Nice Select
        ---------------------------------------------------------*/

        $("select").niceSelect();

        /*Nice Select End ---------------------------------------*/

        /*-------------------------------------------------------
            Image Upload
        ---------------------------------------------------------*/

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $("#imagePreview").css(
                        "background-image",
                        "url(" + e.target.result + ")"
                    );
                    $("#imagePreview").hide();
                    $("#imagePreview").fadeIn(650);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function () {
            readURL(this);
        });

        /*Image Upload End ---------------------------------------*/

        /*-------------------------------------------------------
            Open / Hide Left Nav
        ---------------------------------------------------------*/

        if (leftNavTrigger.length > 0) {
            leftNavTrigger.on("click", function (e) {
                e.preventDefault();
                maxBody.toggleClass("open-nav-left");
            });
        }

        if (leftNavWrapper.length > 0) {
            leftNavWrapper.on("click", function () {
                maxBody.removeClass("open-nav-left");
            });
        }

        /* Open / Hide Left Nav End -----------------------------*/

        /*---------------------------------------------------------
            Open / Hide Primary Nav Right
        -----------------------------------------------------------*/

        if (primaryNavRight.length > 0) {
            primaryNavRight.on("click", function (e) {
                e.preventDefault();
                primaryNavRightIs.slideToggle();
            });
        }

        /* Open / Hide Primary Nav Right End ---------------------*/

        /*---------------------------------------------------------
            Enable Bootstrap Tooltip and Popover
        -----------------------------------------------------------*/

        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="popover"]').popover();

        /* Enable Bootstrap Tooltip End ---------------------------*/
        /*---------------------------------------------------------
            Show Chat 
        -----------------------------------------------------------*/

        var chatToggle = $(".show-chat");
        var chatPop = $(".pop-chat");
        chatToggle.on("click", function () {
            chatPop.toggleClass("active");
        });

        /* Show Chat End ---------------------------*/

        /*---------------------------------------------------------
            Range Slider 
        -----------------------------------------------------------*/
        var rangeDefault = $(".mx-default-range");
        var rangeMinMax = $(".mx-min-max-range");
        var rangePrefix = $(".mx-prefix-range");
        var rangeNegative = $(".mx-negative-range");
        var rangeStep = $(".mx-step-range");
        var rangeSquare = $(".mx-sqr-range");
        var rangeSharp = $(".mx-sharp-range");
        var rangeFlat = $(".mx-flat-range");
        if (
            rangeDefault ||
            rangeMinMax ||
            rangePrefix ||
            rangeNegative ||
            rangeStep ||
            rangeSquare ||
            rangeSharp ||
            rangeFlat
        ) {
            rangeDefault.ionRangeSlider({
                skin: "round",
            });
            rangeMinMax.ionRangeSlider({
                skin: "round",
                type: "double",
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
            });
            rangePrefix.ionRangeSlider({
                skin: "round",
                type: "double",
                min: 0,
                max: 1000,
                from: 200,
                to: 800,
                prefix: "$",
            });
            rangeNegative.ionRangeSlider({
                skin: "round",
                type: "double",
                min: -1000,
                max: 1000,
                from: -500,
                to: 800,
                grid: true,
            });
            rangeStep.ionRangeSlider({
                skin: "round",
                type: "double",
                min: -1000,
                max: 1000,
                from: -500,
                to: 800,
                step: 100,
                grid: true,
            });
            rangeSquare.ionRangeSlider({
                skin: "square",
                type: "double",
                min: -1000,
                max: 1000,
                from: -500,
                to: 800,
                step: 100,
                grid: true,
            });
            rangeSharp.ionRangeSlider({
                skin: "sharp",
                type: "double",
                min: -1000,
                max: 1000,
                from: -500,
                to: 800,
                step: 100,
                grid: true,
            });
            rangeFlat.ionRangeSlider({
                skin: "flat",
                type: "double",
                min: -1000,
                max: 1000,
                from: -500,
                to: 800,
                step: 100,
                grid: true,
            });
        }

        /* Range Slider End ---------------------------*/

        /*---------------------------------------------------------
            Multistep Form 
        -----------------------------------------------------------*/
        $('a[data-toggle="formtab"]').click(function () {
            var targetId = $(this).attr("href");

            $(".tabs-panels").removeClass("active");
            $('a[data-toggle="formtab"]').removeClass("active");

            $(targetId).addClass("active");
            $('a[href="' + targetId + '"]').addClass("active");
        });
        /* Multistep Form End ---------------------------*/

        /*---------------------------------------------------------
            Tagify 
        -----------------------------------------------------------*/
        
        $("[name=basic]").tagify();
        var input = document.querySelector("input[name=tags-outside]");
        // init Tagify script on the above inputs
        var tagify = new Tagify(input, {
            whitelist: ["foo", "bar", "baz"],
            dropdown: {
                position: "input",
                enabled: 0, // always opens dropdown when input gets focus
            },
        });
        var whitelist = [
            "temple",
            "stun",
            "detective",
            "sign",
            "passion",
            "routine",
            "deck",
            "discriminate",
            "relaxation",
            "fraud",
            "attractive",
            "soft",
            "forecast",
            "point",
            "thank",
            "stage",
            "eliminate",
            "effective",
            "flood",
            "passive",
            "skilled",
            "separation",
            "contact",
            "compromise",
            "reality",
            "district",
            "nationalist",
            "leg",
            "porter",
            "conviction",
            "worker",
            "vegetable",
            "commerce",
            "conception",
            "particle",
            "honor",
            "stick",
            "tail",
            "pumpkin",
            "core",
            "mouse",
            "egg",
            "population",
            "unique",
            "behavior",
            "onion",
            "disaster",
            "cute",
            "pipe",
            "sock",
            "dialect",
            "horse",
            "swear",
            "owner",
            "cope",
            "global",
            "improvement",
            "artist",
            "shed",
            "constant",
            "bond",
            "brink",
            "shower",
            "spot",
            "inject",
            "bowel",
            "homosexual",
            "trust",
            "exclude",
            "tough",
            "sickness",
            "prevalence",
            "sister",
            "resolution",
            "cattle",
            "cultural",
            "innocent",
            "burial",
            "bundle",
            "thaw",
            "respectable",
            "thirsty",
            "exposure",
            "team",
            "creed",
            "facade",
            "calendar",
            "filter",
            "utter",
            "dominate",
            "predator",
            "discover",
            "theorist",
            "hospitality",
            "damage",
            "woman",
            "rub",
            "crop",
            "unpleasant",
            "halt",
            "inch",
            "birthday",
            "lack",
            "throne",
            "maximum",
            "pause",
            "digress",
            "fossil",
            "policy",
            "instrument",
            "trunk",
            "frame",
            "measure",
            "hall",
            "support",
            "convenience",
            "house",
            "partnership",
            "inspector",
            "looting",
            "ranch",
            "asset",
            "rally",
            "explicit",
            "leak",
            "monarch",
            "ethics",
            "applied",
            "aviation",
            "dentist",
            "great",
            "ethnic",
            "sodium",
            "truth",
            "constellation",
            "lease",
            "guide",
            "break",
            "conclusion",
            "button",
            "recording",
            "horizon",
            "council",
            "paradox",
            "bride",
            "weigh",
            "like",
            "noble",
            "transition",
            "accumulation",
            "arrow",
            "stitch",
            "academy",
            "glimpse",
            "case",
            "researcher",
            "constitutional",
            "notion",
            "bathroom",
            "revolutionary",
            "soldier",
            "vehicle",
            "betray",
            "gear",
            "pan",
            "quarter",
            "embarrassment",
            "golf",
            "shark",
            "constitution",
            "club",
            "college",
            "duty",
            "eaux",
            "know",
            "collection",
            "burst",
            "fun",
            "animal",
            "expectation",
            "persist",
            "insure",
            "tick",
            "account",
            "initiative",
            "tourist",
            "member",
            "example",
            "plant",
            "river",
            "ratio",
            "view",
            "coast",
            "latest",
            "invite",
            "help",
            "falsify",
            "allocation",
            "degree",
            "feel",
            "resort",
            "means",
            "excuse",
            "injury",
            "pupil",
            "shaft",
            "allow",
            "ton",
            "tube",
            "dress",
            "speaker",
            "double",
            "theater",
            "opposed",
            "holiday",
            "screw",
            "cutting",
            "picture",
            "laborer",
            "conservation",
            "kneel",
            "miracle",
            "brand",
            "nomination",
            "characteristic",
            "referral",
            "carbon",
            "valley",
            "hot",
            "climb",
            "wrestle",
            "motorist",
            "update",
            "loot",
            "mosquito",
            "delivery",
            "eagle",
            "guideline",
            "hurt",
            "feedback",
            "finish",
            "traffic",
            "competence",
            "serve",
            "archive",
            "feeling",
            "hope",
            "seal",
            "ear",
            "oven",
            "vote",
            "ballot",
            "study",
            "negative",
            "declaration",
            "particular",
            "pattern",
            "suburb",
            "intervention",
            "brake",
            "frequency",
            "drink",
            "affair",
            "contemporary",
            "prince",
            "dry",
            "mole",
            "lazy",
            "undermine",
            "radio",
            "legislation",
            "circumstance",
            "bear",
            "left",
            "pony",
            "industry",
            "mastermind",
            "criticism",
            "sheep",
            "failure",
            "chain",
            "depressed",
            "launch",
            "script",
            "green",
            "weave",
            "please",
            "surprise",
            "doctor",
            "revive",
            "banquet",
            "belong",
            "correction",
            "door",
            "image",
            "integrity",
            "intermediate",
            "sense",
            "formal",
            "cane",
            "gloom",
            "toast",
            "pension",
            "exception",
            "prey",
            "random",
            "nose",
            "predict",
            "needle",
            "satisfaction",
            "establish",
            "fit",
            "vigorous",
            "urgency",
            "X-ray",
            "equinox",
            "variety",
            "proclaim",
            "conceive",
            "bulb",
            "vegetarian",
            "available",
            "stake",
            "publicity",
            "strikebreaker",
            "portrait",
            "sink",
            "frog",
            "ruin",
            "studio",
            "match",
            "electron",
            "captain",
            "channel",
            "navy",
            "set",
            "recommend",
            "appoint",
            "liberal",
            "missile",
            "sample",
            "result",
            "poor",
            "efflux",
            "glance",
            "timetable",
            "advertise",
            "personality",
            "aunt",
            "dog"
          ]
          
          var input2 = document.querySelector("input[name=tags3]");
          tagify = new Tagify(input2, {
            pattern: /^.{0,20}$/, // Validate typed tag(s) by Regex. Here maximum chars length is defined as "20"
            delimiters: ",| ", // add new tags when a comma or a space character is entered
            keepInvalidTags: true, // do not remove invalid tags (but keep them marked as invalid)
            editTags: 1, // single click to edit a tag
            maxTags: 6,
            blacklist: ["foo", "bar", "baz"],
            whitelist: whitelist,
            transformTag: transformTag,
            backspace: "edit",
            placeholder: "Type something",
            dropdown: {
              enabled: 1, // show suggestion after 1 typed character
              fuzzySearch: false, // match only suggestions that starts with the typed characters
              position: "text", // position suggestions list next to typed text
              caseSensitive: true // allow adding duplicate items if their case is different
            },
            templates: {
              dropdownItemNoMatch: function (data) {
                return `<div class='${this.settings.classNames.dropdownItem}' tabindex="0" role="option">
                              No suggestion found for: <strong>${data.value}</strong>
                          </div>`;
              }
            }
          });
          
          // generate a random color (in HSL format, which I like to use)
          function getRandomColor() {
            function rand(min, max) {
              return min + Math.random() * (max - min);
            }
          
            var h = rand(1, 360) | 0,
              s = rand(40, 70) | 0,
              l = rand(65, 72) | 0;
          
            return "hsl(" + h + "," + s + "%," + l + "%)";
          }
          
          function transformTag(tagData) {
            tagData.style = "--tag-bg:" + getRandomColor();
          
            if (tagData.value.toLowerCase() == "shit") tagData.value = "s✲✲t";
          }
          
          
        /* Tagify End ---------------------------*/
    });
})(jQuery);

$(window).on("load", function () {
    /*-----------------
        preloader
    ------------------*/
    // var preLoder = $(".preloader");
    // preLoder.fadeOut(1000);
});
