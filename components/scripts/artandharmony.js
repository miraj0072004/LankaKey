$("#artandh_english_btn").click(
    function()
    {
        $("#artandharmonysinhalacontent").hide();
        $("#artandharmonycontent").show();
        $(this).addClass('active');
        $("#artandh_sinhala_btn").removeClass("active");
    }
);

$("#artandh_sinhala_btn").click(
    function()
    {
        $("#artandharmonysinhalacontent").show();
        $("#artandharmonycontent").hide();
        $(this).addClass('active');
        $("#artandh_english_btn").removeClass("active");
    }
);