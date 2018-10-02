/* prevent links from opening in a new browser on iPad full screen mode */
        var a = document.getElementsByTagName("a");
        for (var i = 0; i < a.length; i++) {
            if (!a[i].onclick && a[i].getAttribute("target") != "_blank") {
                a[i].onclick = function () {
                    window.location = this.getAttribute("href");
                    return false;
                }
            }
        }
        /* jQuery actions */
        $("#skills-slider").click(function () {
            $("#skills-no-question").toggle("slide", function () {});
            $("#skills-yes-question").toggle("slide", function () {});
            $("#skills-list").toggle("slide", function () {});
            $("#skills-no-survey").hide("", function () {});
            $("#skills-yes-survey").hide("", function () {});
        });
        $("#skills-no-question").click(function () {
            $("#skills-no-survey").toggle("slide", function () {});
        });
        $("#skills-yes-question").click(function () {
            $("#skills-yes-survey").toggle("slide", function () {});
        });
        $("#search-button").click(function () {
            $("#search").toggle("slow", function () {});
        });
        $(".entry-add").click(function () {
            $("#add-entry").toggle("fade", function () {});
        });
        $("#cancel-button").click(function () {
            $(".modal-container").hide("", function () {});
        });
        $("#add-entry-confirm-button").click(function () {
            $(".modal-container").hide("", function () {});
        });
        $("#session-button").click(function () {
            $("#start-session").toggle("fade", function () {});
        });
        $(".cancel").click(function () {
            $(".modal-container").hide("", function () {});
        });
        $("#start-session-button").click(function () {
            $(".modal-container").hide("", function () {});
            $("#navbar").hide("", function () {});
            $("#navbar-session").show("", function () {});
        });
        $("#end-session-button").click(function () {
            $("#end-session").toggle("fade", function () {});
        });
        $("#end-session-button-in-modal").click(function () {
            $(".modal-container").hide("fade", function () {});
            $("#navbar").show("", function () {});
            $("#navbar-session").hide("", function () {});
            $("#reviewed").show("", function () {});

        });
        
    

        

        mobiscroll.settings = {
            lang: 'en', // Specify language like: lang: 'pl' or omit setting to use default
            theme: 'ios' // Specify theme like: theme: 'ios' or omit setting to use default
        };

        $(function () {

            var cbAllow = $('.md-allow'),
                stepperLuggage = $('.md-luggage');

            cbAllow.change(function () {
                stepperLuggage.prop('disabled', !this.checked);
            });

        });