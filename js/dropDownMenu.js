        $(document).ready(function () {
            $(".dropdown").mouseenter(function () {
                $(".dropdown-menu").slideDown("slow");
            });
        });
        $(document).ready(function () {
            $(document).click(function () {
                $(".dropdown-menu").slideUp("slow");
            });
        });
        