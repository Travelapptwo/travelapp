$(window.parent.document).find("#iframeid").load(function () {
    var main = $(window.parent.document).find("#iframeid");
    var thisheight = $(document).height() + 30;
    main.height(thisheight);
});